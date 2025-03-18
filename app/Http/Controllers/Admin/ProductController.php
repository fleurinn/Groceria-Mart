<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Schema;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');
        $status = $request->input('status');

        $totalProducts = Product::count();
        $publishedProducts = Product::where('status', 'public')->count();
        $draftProducts = Product::where('status', 'draft')->count();
        $discountedProducts = Product::whereNotNull('discount')->count();

        $products = Product::with('category')
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('tags', 'like', "%{$search}%");
            })
            ->when($category, function ($query) use ($category) {
                $query->where('category_product_id', $category);
            })
            ->when($status, function ($query) use ($status) {
                $query->where('status', $status);
            })
            ->get();

        return view('admin.products.index', compact('products', 'search'));
    }

    public function create()
    {
        $categories = CategoryProduct::all();
        return view('admin.pages.products.produk.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required|string|max:255',
            'variant'           => 'nullable|string|max:255',
            'weight'            => 'nullable|string|max:50',
            'dimension'         => 'nullable|string|max:100',
            'color'             => 'nullable|string|max:50',
            'slug'              => 'nullable|string|unique:products,slug|max:255',
            'description'       => 'required|string|max:1000',
            'category_product_id' => 'required|exists:category_products,id',
            'image'             => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'images.*'          => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'price'             => 'required|numeric|min:0',
            'stock'             => 'required|integer|min:0',
            'status'            => 'required|in:draft,public',
            'tags'              => 'nullable|string',
            'discount'          => 'nullable|numeric|min:0|max:100',
        ]);

        $slug = $request->input('slug') ?: Str::slug($request->name);

        $image = $request->file('image');
        $imagePath = $image->storeAs('public/products/', $image->hashName());

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $path = $img->storeAs('public/products/', $img->hashName());
                $imagePaths[] = $img->hashName();
            }
        }

        Product::create($request->except(['image', 'images', 'slug']) + [
            'image' => $image->hashName(),
            'images' => json_encode($imagePaths),
            'slug' => $slug,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Product $product)
    {
        $categories = CategoryProduct::all();
        return view('admin.pages.products.produk.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'              => 'required|string|max:255',
            'variant'           => 'nullable|string|max:255',
            'weight'            => 'nullable|string|max:50',
            'dimension'         => 'nullable|string|max:100',
            'color'             => 'nullable|string|max:50',
            'slug'              => 'nullable|string|unique:products,slug,' . $product->id . '|max:255',
            'description'       => 'required|string|max:1000',
            'category_product_id' => 'required|exists:category_products,id',
            'image'             => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'images.*'          => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'price'             => 'required|numeric|min:0',
            'stock'             => 'required|integer|min:0',
            'status'            => 'required|in:draft,public',
            'tags'              => 'nullable|string',
            'discount'          => 'nullable|numeric|min:0|max:100',
        ]);

        $slug = $request->input('slug') ?: Str::slug($request->name);

        if ($request->hasFile('image')) {
            Storage::delete('public/products/' . $product->image);
            $image = $request->file('image');
            $imagePath = $image->storeAs('public/products/', $image->hashName());
            $product->image = $image->hashName();
        }

        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $img) {
                $path = $img->storeAs('public/products/', $img->hashName());
                $imagePaths[] = $img->hashName();
            }
            $product->images = json_encode($imagePaths);
        }

        $product->update($request->except(['image', 'images', 'slug']) + ['slug' => $slug]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui.');
    }


    // Mengekspor data produk
    public function export()
{
    $products = Product::all(); // Mengambil semua produk

    $fileName = 'products.xlsx';

    return Excel::download(new class($products) implements \Maatwebsite\Excel\Concerns\FromCollection, \Maatwebsite\Excel\Concerns\WithHeadings {
        protected $products;

        public function __construct($products)
        {
            $this->products = $products;
        }

        public function collection()
        {
            return $this->products;
        }

        public function headings(): array
        {
            return Schema::getColumnListing((new Product)->getTable());
        }
    }, $fileName);
}
}
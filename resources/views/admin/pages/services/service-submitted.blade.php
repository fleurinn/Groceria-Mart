@extends('admin.layouts.admin-layouts')

@section('page_title', 'Pesan Layanan | Groceria')
@section('content')
<div class="content pt-5 pb-5">
  <div class="email-container">
    <!-- Header Email (opsional) -->
    <div class="row gx-lg-6 gx-3 py-4 z-2 position-sticky bg-body email-header">
      <!-- Isi header jika diperlukan -->
    </div>
    <!-- Row Utama -->
    <div class="row g-lg-6 mb-8">
      <!-- Kolom Kiri: Email dari pengirim -->
      <div class="col-12 col-lg-6">
        <div class="card email-content">
          <div class="card-body overflow-hidden">
            <!-- Bagian Header Email -->
            <div class="d-flex justify-content-between align-items-center pb-3 border-bottom border-translucent mb-4">
              <a class="btn btn-link p-0 text-body-secondary me-3" href="inbox.html">
                <span class="fa-solid fa-angle-left fw-bolder fs-8"></span>
              </a>
              <!-- Bisa tambahkan tombol atau ikon lainnya di sini -->
            </div>
            <!-- Detail Email -->
            <div class="overflow-x-hidden scrollbar email-detail-content">
              <div class="row align-items-center gy-3 gx-0 mb-10">
                <div class="col-12 col-sm-auto d-flex order-sm-1">
                  <!-- Tombol-tombol aksi (Reply, Delete, etc) -->
                  <button class="btn p-0 me-4 me-lg-3 me-xl-4" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply">
                    <span class="fa-solid fa-reply text-body-quaternary"></span>
                  </button>
                  <!-- Tambahkan tombol lain jika diperlukan -->
                </div>
                <div class="col-auto">
                  <img class="me-2 rounded-circle" src="../../assets/img/team/60.webp" alt="Foto" width="48" height="48" />
                </div>
                <div class="col-auto flex-1">
                  <div class="d-flex mb-1">
                    <h5 class="mb-0 text-body-highlight me-2">{{ $service->fullname }}</h5>
                    <p class="mb-0 lh-sm text-body-tertiary fs-9 d-none d-md-block text-nowrap">&#60; {{ $service->email }} &#62;</p>
                  </div>
                  <p class="mb-0 fs-9">
                    <span class="text-body-tertiary">kepada</span>
                    <span class="fw-bold text-body-secondary"> Groceria </span>
                    <span class="text-body-highlight fw-semibold fs-10">admin </span>
                  </p>
                </div>
              </div>
              <div class="text-body-highlight fs-9 w-100 w-md-75 mb-8">
                <p>{{ $service->message }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Kolom Kanan: Form Balasan dengan TinyMCE -->
<div class="col-12 col-lg-6">
  <div class="card">
    <div class="card-header">
      <h5 class="mb-0">Balas Pesan</h5>
    </div>
    <div class="card-body">
      <form id="replyForm" method="POST" action="{{ route('services.reply', $service->id) }}">
        @csrf
        <div class="mb-3">
          <textarea id="reply_message" class="tinymce" name="reply_message"
            data-tinymce='{"height":"15rem","placeholder":"Tulis deskripsi di sini...","license_key":"gpl"}'>
            {{ old('reply_message', strip_tags($service->reply_message)) }}
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Balasan</button>
      </form>
    </div>
  </div>
</div>
</div><!-- End row utama -->
</div>

<!-- Notifikasi sukses -->
@if (session('success'))
  <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<!-- Script: TinyMCE -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Script: Validasi & Ubah ke Plain Text -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('replyForm');

    form.addEventListener('submit', function (event) {
      const editor = tinymce.get('reply_message');

      // Ambil teks polos tanpa HTML
      const plainText = editor.getContent({ format: 'text' }).trim();

      if (plainText === "") {
        event.preventDefault();
        alert("Balasan tidak boleh kosong!");
        return;
      }

      // Set isi kembali sebagai plain text agar yang dikirim tanpa HTML
      editor.setContent(plainText);
    });
  });
</script>



@endsection

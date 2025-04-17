@extends('landing.layouts.app')

@section('page_title', 'Profile User | Groceria')
@section('content')

<!-- Register section -->
<section class="gi-register py-[40px] max-[767px]:py-[30px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1600px]:max-w-[1600px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="section-title-2 w-full mb-[20px] pb-[20px] flex flex-col justify-center items-center">
                <h2 class="gi-title mb-[0] font-manrope text-[26px] font-semibold text-[#4b5966] relative inline p-[0] capitalize leading-[1]">Profile<span></span></h2>
                <p class="max-w-[400px] mt-[15px] text-[14px] text-[#777] text-center leading-[23px]">Silahkan lengkapi Profile Anda</p>
            </div>
            <div class="flex flex-wrap w-full">
                <div class="gi-register-wrapper max-w-[934px] my-[0] mx-auto px-[12px]">
                    <div class="gi-register-container border-[1px] border-solid border-[#eee] p-[30px] text-left bg-[#fff] rounded-[5px] max-[575px]:p-[15px]">
                        <div class="gi-register-form">
                            <form action="#" method="post" class="flex flex-row flex-wrap mx-[-15px]">
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Nama Depan*</label>
                                    <input type="text" name="firstname" placeholder="Masukan nama depan" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" required>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Nama Belakang*</label>
                                    <input type="text" name="lastname" placeholder="Masukan nama belakang" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" required>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Email*</label>
                                    <input type="email" name="email" placeholder="Masukan email anda..." class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" required>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Nomor Handphone*</label>
                                    <input type="text" name="phonenumber" placeholder="Masukan nomor handphone anda" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" required>
                                </span>
                                <span class="gi-register-wrap w-full px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Alamat*</label>
                                    <input type="text" name="address" placeholder="Masukan alamat lengkap anda" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]">
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Kota*</label>
                                    <span class="gi-rg-select-inner w-full h-[50px] p-[0] mb-[30px] relative flex rounded-[5px] border-[1px] border-solid border-[#eee] text-[14px] text-left">
                                        <select name="gi_select_city" id="gi-select-city" class="gi-register-select appearance-none outline-[0] border-[0] bg-[#fff] grow-[1] px-[10px] text-[#777] font-light cursor-pointer">
                                            <option selected disabled>Kota</option>
                                            <option value="1">Bogor Barat</option>
                                            <option value="2">Bogor Selatan</option>
                                            <option value="3">Bogor Tengah</option>
                                            <option value="4">Bogor Timur</option>
                                            <option value="5">Bogor Utara</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Kode pos</label>
                                    <input type="text" name="postalcode" placeholder="Masuka kode pos" class="w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]">
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Kecamatan *</label>
                                    <span class="gi-rg-select-inner w-full h-[50px] p-[0] mb-[30px] relative flex rounded-[5px] border-[1px] border-solid border-[#eee] text-[14px] text-left">
                                        <select name="gi_select_country" id="gi-select-country" class="gi-register-select appearance-none outline-[0] border-[0] bg-[#fff] grow-[1] px-[10px] text-[#777] font-light cursor-pointer">
                                            <option selected disabled>Kecamatan</option>
                                            <option value="Babakan Madang">Babakan Madang</option>
                                            <option value="Bojonggede">Bojonggede</option>
                                            <option value="Cariu">Cariu</option>
                                            <option value="Ciampea">Ciampea</option>
                                            <option value="Cibinong">Cibinong</option>
                                            <option value="Cisarua">Cisarua</option>
                                            <option value="Citeureup">Citeureup</option>
                                            <option value="Dramaga">Dramaga</option>
                                            <option value="Gunung Putri">Gunung Putri</option>
                                            <option value="Jasinga">Jasinga</option>
                                            <option value="Jonggol">Jonggol</option>
                                            <option value="Kemang">Kemang</option>
                                            <option value="Klapanunggal">Klapanunggal</option>
                                            <option value="Leuwiliang">Leuwiliang</option>
                                            <option value="Leuwisadeng">Leuwisadeng</option>
                                            <option value="Megamendung">Megamendung</option>
                                            <option value="Nanggung">Nanggung</option>
                                            <option value="Pamijahan">Pamijahan</option>
                                            <option value="Parung">Parung</option>
                                            <option value="Parung Panjang">Parung Panjang</option>
                                            <option value="Rancabungur">Rancabungur</option>
                                            <option value="Rumpin">Rumpin</option>
                                            <option value="Sukajaya">Sukajaya</option>
                                            <option value="Sukamakmur">Sukamakmur</option>
                                            <option value="Sukaraja">Sukaraja</option>
                                            <option value="Tajurhalang">Tajurhalang</option>
                                            <option value="Tamansari">Tamansari</option>
                                            <option value="Tanjungsari">Tanjungsari</option>
                                            <option value="Tenjo">Tenjo</option>
                                            <option value="Tenjolaya">Tenjolaya</option>
                                            <option value="Cigombong">Cigombong</option>
                                            <option value="Cigudeg">Cigudeg</option>
                                            <option value="Cijeruk">Cijeruk</option>
                                            <option value="Cileungsi">Cileungsi</option>
                                            <option value="Ciomas">Ciomas</option>
                                            <option value="Cibungbulang">Cibungbulang</option>
                                            <option value="Cihideung">Cihideung</option>
                                            <option value="Ciseeng">Ciseeng</option>
                                            <option value="Kelapa Nunggal">Kelapa Nunggal</option>
                                            <option value="Rumpin">Rumpin</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="gi-register-wrap gi-register-half w-[50%] px-[15px]">
                                    <label class="inline-block mb-[9px] text-[#4b5966] text-[15px] font-medium tracking-[0] leading-[1]">Desa*</label>
                                    <span class="gi-rg-select-inner w-full h-[50px] p-[0] mb-[30px] relative flex rounded-[5px] border-[1px] border-solid border-[#eee] text-[14px] text-left">
                                        <select name="gi_select_state" id="gi-select-state" class="gi-register-select appearance-none outline-[0] border-[0] bg-[#fff] grow-[1] px-[10px] text-[#777] font-light cursor-pointer">
                                            <option selected disabled>Desa</option>
                                            <optgroup label="Babakan Madang">
                                                <option value="Babakan Madang">Desa Babakan Madang</option>
                                                <option value="Bojong Koneng">Desa Bojong Koneng</option>
                                                <option value="Cijayanti">Desa Cijayanti</option>
                                                <option value="Cipambuan">Desa Cipambuan</option>
                                                <option value="Citaringgul">Desa Citaringgul</option>
                                                <option value="Kadumangu">Desa Kadumangu</option>
                                                <option value="Karang Tengah">Desa Karang Tengah</option>
                                                <option value="Sentul">Desa Sentul</option>
                                                <option value="Sumur Batu">Desa Sumur Batu</option>
                                            </optgroup>
                                            <optgroup label="Bojonggede">
                                                <option value="Bojong Baru">Desa Bojong Baru</option>
                                                <option value="Cimanggis">Desa Cimanggis</option>
                                                <option value="Ragajaya">Desa Ragajaya</option>
                                                <option value="Rawa Panjang">Desa Rawa Panjang</option>
                                                <option value="Susukan">Desa Susukan</option>
                                                <option value="Waringin Jaya">Desa Waringin Jaya</option>
                                                <option value="Pabuaran">Desa Pabuaran</option>
                                                <option value="Bojong Gede">Desa Bojong Gede</option>
                                                <option value="Kedung Waringin">Desa Kedung Waringin</option>
                                            </optgroup>
                                            <optgroup label="Cariu">
                                                <option value="Cariu">Desa Cariu</option>
                                                <option value="Cibatu Tiga">Desa Cibatu Tiga</option>
                                                <option value="Cikutamahi">Desa Cikutamahi</option>
                                                <option value="Kiarapandak">Desa Kiarapandak</option>
                                                <option value="Kutamaneuh">Desa Kutamaneuh</option>
                                                <option value="Mekarwangi">Desa Mekarwangi</option>
                                                <option value="Tanjungsari">Desa Tanjungsari</option>
                                                <option value="Cibadak">Desa Cibadak</option>
                                                <option value="Antajaya">Desa Antajaya</option>
                                                <option value="Bantar Kuning">Desa Bantar Kuning</option>
                                            </optgroup>
                                            <optgroup label="Ciampea">
                                                <option value="Ciampea">Desa Ciampea</option>
                                                <option value="Cibadak">Desa Cibadak</option>
                                                <option value="Cibanteng">Desa Cibanteng</option>
                                                <option value="Cihideung Udik">Desa Cihideung Udik</option>
                                                <option value="Cihideung Ilir">Desa Cihideung Ilir</option>
                                                <option value="Cinangneng">Desa Cinangneng</option>
                                                <option value="Cipeteuy">Desa Cipeteuy</option>
                                                <option value="Cisarua">Desa Cisarua</option>
                                                <option value="Darmawan">Desa Darmawan</option>
                                                <option value="Neglasari">Desa Neglasari</option>
                                            </optgroup>
                                            <optgroup label="Cibinong">
                                                <option value="Cibinong">Kelurahan Cibinong</option>
                                                <option value="Ciriung">Kelurahan Ciriung</option>
                                                <option value="Harapan Jaya">Kelurahan Harapan Jaya</option>
                                                <option value="Karadenan">Kelurahan Karadenan</option>
                                                <option value="Nanggewer">Kelurahan Nanggewer</option>
                                                <option value="Nanggewer Mekar">Kelurahan Nanggewer Mekar</option>
                                                <option value="Pakansari">Kelurahan Pakansari</option>
                                                <option value="Pondok Rajeg">Kelurahan Pondok Rajeg</option>
                                                <option value="Sukahati">Kelurahan Sukahati</option>
                                                <option value="Tegar Beriman">Kelurahan Tegar Beriman</option>
                                            </optgroup>
                                            <optgroup label="Cisarua">
                                                <option value="Cilember">Desa Cilember</option>
                                                <option value="Cisarua">Desa Cisarua</option>
                                                <option value="Citeko">Desa Citeko</option>
                                                <option value="Jogjogan">Desa Jogjogan</option>
                                                <option value="Kopo">Desa Kopo</option>
                                                <option value="Leuwimalang">Desa Leuwimalang</option>
                                                <option value="Tugu Selatan">Desa Tugu Selatan</option>
                                                <option value="Tugu Utara">Desa Tugu Utara</option>
                                                <option value="Batulayang">Desa Batulayang</option>
                                                <option value="Cipanas">Desa Cipanas</option>
                                            </optgroup>
                                            <optgroup label="Citeureup">
                                                <option value="Citeureup">Desa Citeureup</option>
                                                <option value="Pasir Mukti">Desa Pasir Mukti</option>
                                                <option value="Tajur">Desa Tajur</option>
                                                <option value="Sanja">Desa Sanja</option>
                                                <option value="Tarikolot">Desa Tarikolot</option>
                                                <option value="Leuwikaret">Desa Leuwikaret</option>
                                                <option value="Hambalang">Desa Hambalang</option>
                                                <option value="Puspanegara">Desa Puspanegara</option>
                                                <option value="Karang Asem Barat">Desa Karang Asem Barat</option>
                                                <option value="Karang Asem Timur">Desa Karang Asem Timur</option>
                                                <option value="Gunung Putri">Desa Gunung Putri</option>
                                                <option value="Bantarjaya">Desa Bantarjaya</option>
                                                <option value="Sukahati">Desa Sukahati</option>
                                            </optgroup>
                                            <optgroup label="Dramaga">
                                                <option value="Babakan">Desa Babakan</option>
                                                <option value="Ciherang">Desa Ciherang</option>
                                                <option value="Cikarawang">Desa Cikarawang</option>
                                                <option value="Cinangneng">Desa Cinangneng</option>
                                                <option value="Dramaga">Desa Dramaga</option>
                                                <option value="Negara">Desa Negara</option>
                                                <option value="Petir">Desa Petir</option>
                                                <option value="Purwasari">Desa Purwasari</option>
                                                <option value="Sinarsari">Desa Sinarsari</option>
                                                <option value="Sukadamai">Desa Sukadamai</option>
                                            </optgroup>
                                            <optgroup label="Gunung Putri">
                                                <option value="Bojong Nangka">Desa Bojong Nangka</option>
                                                <option value="Ciangsana">Desa Ciangsana</option>
                                                <option value="Cicadas">Desa Cicadas</option>
                                                <option value="Cikeas Udik">Desa Cikeas Udik</option>
                                                <option value="Gunung Putri">Desa Gunung Putri</option>
                                                <option value="Karanggan">Desa Karanggan</option>
                                                <option value="Nagrak">Desa Nagrak</option>
                                                <option value="Tlanjung Udik">Desa Tlanjung Udik</option>
                                                <option value="Wanaherang">Desa Wanaherang</option>
                                                <option value="Bojongkulur">Desa Bojongkulur</option>
                                            </optgroup>
                                            <optgroup label="Jasinga">
                                                <option value="Bagoang">Desa Bagoang</option>
                                                <option value="Barengkok">Desa Barengkok</option>
                                                <option value="Cikopomayak">Desa Cikopomayak</option>
                                                <option value="Jasinga">Desa Jasinga</option>
                                                <option value="Jugala Jaya">Desa Jugala Jaya</option>
                                                <option value="Kalongsawah">Desa Kalongsawah</option>
                                                <option value="Kampung Sawah">Desa Kampung Sawah</option>
                                                <option value="Koleang">Desa Koleang</option>
                                                <option value="Pamagersari">Desa Pamagersari</option>
                                                <option value="Pangaur">Desa Pangaur</option>
                                                <option value="Pager Jaya">Desa Pager Jaya</option>
                                                <option value="Setu">Desa Setu</option>
                                                <option value="Sipak">Desa Sipak</option>
                                                <option value="Sukajadi">Desa Sukajadi</option>
                                                <option value="Wirajaya">Desa Wirajaya</option>
                                                <option value="Cigudeg">Desa Cigudeg</option>
                                                <option value="Cisarua">Desa Cisarua</option>
                                            </optgroup>
                                            <optgroup label="Jonggol">
                                                <option value="Balekambang">Desa Balekambang</option>
                                                <option value="Bendungan">Desa Bendungan</option>
                                                <option value="Cibodas">Desa Cibodas</option>
                                                <option value="Singajaya">Desa Singajaya</option>
                                                <option value="Sukamulya">Desa Sukamulya</option>
                                                <option value="Sukasirna">Desa Sukasirna</option>
                                                <option value="Sukamanah">Desa Sukamanah</option>
                                                <option value="Sirnagalih">Desa Sirnagalih</option>
                                                <option value="Singasari">Desa Singasari</option>
                                                <option value="Jonggol">Desa Jonggol</option>
                                                <option value="Weninggalih">Desa Weninggalih</option>
                                                <option value="Sukagalih">Desa Sukagalih</option>
                                                <option value="Sukanegara">Desa Sukanegara</option>
                                                <option value="Sukaresmi">Desa Sukaresmi</option>
                                            </optgroup>
                                            <optgroup label="Kemang">
                                                <option value="Kemang">Desa Kemang</option>
                                                <option value="Pegalih">Desa Pegalih</option>
                                                <option value="Parakan Jaya">Desa Parakan Jaya</option>
                                                <option value="Jampang">Desa Jampang</option>
                                                <option value="Pabuaran">Desa Pabuaran</option>
                                                <option value="Tegal">Desa Tegal</option>
                                                <option value="Sempur">Desa Sempur</option>
                                                <option value="pondok Udik">Desa pondok Udik</option>
                                                <option value="pondok Rajeg">Desa pondok Rajeg</option>
                                            </optgroup>
                                            <optgroup label="Klapanunggal">
                                                <option value="Bantarjati">Desa Bantarjati</option>
                                                <option value="Cikahuripan">Desa Cikahuripan</option>
                                                <option value="Cileungsi Kidul">Desa Cileungsi Kidul</option>
                                                <option value="Klapanunggal">Desa Klapanunggal</option>
                                                <option value="Ligarmukti">Desa Ligarmukti</option>
                                                <option value="Lulut">Desa Lulut</option>
                                                <option value="Nambo">Desa Nambo</option>
                                                <option value="Singasari">Desa Singasari</option>
                                                <option value="Kembang Kuning">Desa Kembang Kuning</option>
                                            </optgroup>
                                            <optgroup label="Leuwiliang">
                                                <option value="Bareng">Desa Bareng</option>
                                                <option value="Cibeber I">Desa Cibeber I</option>
                                                <option value="Cibeber II">Desa Cibeber II</option>
                                                <option value="Karacak">Desa Karacak</option>
                                                <option value="Karyasari">Desa Karyasari</option>
                                                <option value="Leuwiliang">Desa Leuwiliang</option>
                                                <option value="ciampea Udik">Desa ciampea Udik</option>
                                                <option value="Pabangbon">Desa Pabangbon</option>
                                                <option value="Purasari">Desa Purasari</option>
                                                <option value="Sibanteng">Desa Sibanteng</option>
                                            </optgroup>
                                            <optgroup label="Leuwisadeng">
                                                <option value="Babakan Sadeng">Desa Babakan Sadeng</option>
                                                <option value="Bojong Sempu">Desa Bojong Sempu</option>
                                                <option value="Kalong I">Desa Kalong I</option>
                                                <option value="Kalong II">Desa Kalong II</option>
                                                <option value="Leuwisadeng">Desa Leuwisadeng</option>
                                                <option value="Sadeng">Desa Sadeng</option>
                                                <option value="Sadeng Kolot">Desa Sadeng Kolot</option>
                                                <option value="Sibadak">Desa Sibadak</option>
                                            </optgroup>
                                            <optgroup label="Megamendung">
                                                <option value="Cipayung Datar">Desa Cipayung Datar</option>
                                                <option value="Gadog">Desa Gadog</option>
                                                <option value="Kuta">Desa Kuta</option>
                                                <option value="Megamendung">Desa Megamendung</option>
                                                <option value="Pasir Angin">Desa Pasir Angin</option>
                                                <option value="Sukagalih">Desa Sukagalih</option>
                                                <option value="Sukamanah">Desa Sukamanah</option>
                                                <option value="Cipayung Girang">Desa Cipayung Girang</option>
                                                <option value="Cimanglid">Desa Cimanglid</option>
                                                <option value="Sukaresmi">Desa Sukaresmi</option>
                                            </optgroup>
                                            <optgroup label="Nanggung">
                                                <option value="Bantar Karet">Desa Bantar Karet</option>
                                                <option value="Cisarua">Desa Cisarua</option>
                                                <option value="Curug Bitung">Desa Curug Bitung</option>
                                                <option value="Hambaro">Desa Hambaro</option>
                                                <option value="Kalong Liud">Desa Kalong Liud</option>
                                                <option value="Nanggung">Desa Nanggung</option>
                                                <option value="Pangkal Jaya">Desa Pangkal Jaya</option>
                                                <option value="Parakan Muncang">Desa Parakan Muncang</option>
                                                <option value="Cisarua">Desa Cisarua</option>
                                            </optgroup>
                                            <optgroup label="Pamijahan">
                                                <option value="Gunung Bunder I">Desa Gunung Bunder I</option>
                                                <option value="Gunung Bunder II">Desa Gunung Bunder II</option>
                                                <option value="Gunung Sari">Desa Gunung Sari</option>
                                                <option value="Gunung Picung">Desa Gunung Picung</option>
                                                <option value="Cibunian">Desa Cibunian</option>
                                                <option value="Ciasihan">Desa Ciasihan</option>
                                                <option value="Cibening">Desa Cibening</option>
                                                <option value="Pamijahan">Desa Pamijahan</option>
                                                <option value="Pasarean">Desa Pasarean</option>
                                                <option value="Purwabakti">Desa Purwabakti</option>
                                                <option value="Gunung Mulya">Desa Gunung Mulya</option>
                                                <option value="Tangkil">Desa Tangkil</option>
                                                <option value="Duria">Desa Duria</option>
                                                <option value="citoe">Desa citoe</option>
                                                <option value="ciampea">Desa ciampea</option>
                                            </optgroup>
                                            <optgroup label="Parung">
                                                <option value="Bojong Sempu">Desa Bojong Sempu</option>
                                                <option value="Bunar">Desa Bunar</option>
                                                <option value="Iwul">Desa Iwul</option>
                                                <option value="Jabon Mekar">Desa Jabon Mekar</option>
                                                <option value="Jampang">Desa Jampang</option>
                                                <option value="Pamagersari">Desa Pamagersari</option>
                                                <option value="Parung">Desa Parung</option>
                                                <option value="Wabah Jaya">Desa Wabah Jaya</option>
                                            </optgroup>
                                            <optgroup label="Parung Panjang">
                                                <option value="Cibunar">Desa Cibunar</option>
                                                <option value="Cikuda Wetan">Desa Cikuda Wetan</option>
                                                <option value="Ciseeng">Desa Ciseeng</option>
                                                <option value="Dago">Desa Dago</option>
                                                <option value="Girimulya">Desa Girimulya</option>
                                                <option value="Jagabita">Desa Jagabita</option>
                                                <option value="Kabitungan">Desa Kabitungan</option>
                                                <option value="Karya Bakti">Desa Karya Bakti</option>
                                                <option value="Malasari">Desa Malasari</option>
                                                <option value="Parung Panjang">Desa Parung Panjang</option>
                                                <option value="pingku">Desa pingku</option>
                                            </optgroup>
                                            <optgroup label="Rancabungur">
                                                <option value="Bantarjaya">Desa Bantarjaya</option>
                                                <option value="Ciadeg">Desa Ciadeg</option>
                                                <option value="Cijujung">Desa Cijujung</option>
                                                <option value="Cimulang">Desa Cimulang</option>
                                                <option value="Mekarsari">Desa Mekarsari</option>
                                                <option value="Pasirgaok">Desa Pasirgaok</option>
                                                <option value="Pasirmadang">Desa Pasirmadang</option>
                                                <option value="Rancabungur">Desa Rancabungur</option>
                                                <option value="candali">Desa candali</option>
                                            </optgroup>
                                            <optgroup label="Rumpin">
                                                <option value="Cibodas">Desa Cibodas</option>
                                                <option value="Cibuntu">Desa Cibuntu</option>
                                                <option value="Cidokom">Desa Cidokom</option>
                                                <option value="Cipinang">Desa Cipinang</option>
                                                <option value="Gobang">Desa Gobang</option>
                                                <option value="Kampung Sawah">Desa Kampung Sawah</option>
                                                <option value="Kertajaya">Desa Kertajaya</option>
                                                <option value="Leuwibatu">Desa Leuwibatu</option>
                                                <option value="Mekarjaya">Desa Mekarjaya</option>
                                                <option value="Rumpin">Desa Rumpin</option>
                                                <option value="Sukamulya">Desa Sukamulya</option>
                                                <option value="Sukasari">Desa Sukasari</option>
                                                <option value="Taman Sari">Desa Taman Sari</option>
                                                <option value="Tamansari">Desa Tamansari</option>
                                            </optgroup>
                                            <optgroup label="Sukajaya">
                                                <option value="Sukatani">Desa Sukatani</option>
                                                <option value="Pasir Madang">Desa Pasir Madang</option>
                                                <option value="Pasir Eurih">Desa Pasir Eurih</option>
                                                <option value="Udik Mulyaharja">Desa Udik Mulyaharja</option>
                                                <option value="Sukajaya">Desa Sukajaya</option>
                                                <option value="Sipayung">Desa Sipayung</option>
                                                <option value="Sinargalih">Desa Sinargalih</option>
                                                <option value="Sirnajaya">Desa Sirnajaya</option>
                                                <option value="Situ Gadung">Desa Situ Gadung</option>
                                                <option value="Cileuksa">Desa Cileuksa</option>
                                                <option value="Cigudeg">Desa Cigudeg</option>
                                            </optgroup>
                                            <optgroup label="Sukamakmur">
                                                <option value="Sukamakmur">Desa Sukamakmur</option>
                                                <option value="Pabuaran">Desa Pabuaran</option>
                                                <option value="Sukaresmi">Desa Sukaresmi</option>
                                                <option value="Sirnajaya">Desa Sirnajaya</option>
                                                <option value="Sukaharja">Desa Sukaharja</option>
                                                <option value="Wargajaya">Desa Wargajaya</option>
                                                <option value="Cibadak">Desa Cibadak</option>
                                                <option value="Cinangka">Desa Cinangka</option>
                                            </optgroup>
                                            <optgroup label="Sukaraja">
                                                <option value="Cikeas">Desa Cikeas</option>
                                                <option value="Cilebut Barat">Desa Cilebut Barat</option>
                                                <option value="Cilebut Timur">Desa Cilebut Timur</option>
                                                <option value="Cimandala">Desa Cimandala</option>
                                                <option value="Gunung Geulis">Desa Gunung Geulis</option>
                                                <option value="Nagrak">Desa Nagrak</option>
                                                <option value="Pasir Jambu">Desa Pasir Jambu</option>
                                                <option value="Pasirlaja">Desa Pasirlaja</option>
                                                <option value="Sukaraja">Desa Sukaraja</option>
                                                <option value="Sukatani">Desa Sukatani</option>
                                                <option value="Cibanon">Desa Cibanon</option>
                                            </optgroup>
                                            <optgroup label="Tajurhalang">
                                                <option value="Tajurhalang">Desa Tajurhalang</option>
                                                <option value="Citayam">Desa Citayam</option>
                                                <option value="Nanggerang">Desa Nanggerang</option>
                                                <option value="Sasakpanjang">Desa Sasakpanjang</option>
                                                <option value="Kalisuren">Desa Kalisuren</option>
                                                <option value="Tonjong">Desa Tonjong</option>
                                                <option value="Sukmajaya">Desa Sukmajaya</option>
                                            </optgroup>
                                            <optgroup label="Tamansari">
                                                <option value="Sukamantri">Desa Sukamantri</option>
                                                <option value="Sukajadi">Desa Sukajadi</option>
                                                <option value="Pasireurih">Desa Pasireurih</option>
                                                <option value="Tamansari">Desa Tamansari</option>
                                                <option value="Sukaresmi">Desa Sukaresmi</option>
                                                <option value="Sirnagalih">Desa Sirnagalih</option>
                                                <option value="Pasirmuncang">Desa Pasirmuncang</option>
                                                <option value="Cibadak">Desa Cibadak</option>
                                            </optgroup>
                                            <optgroup label="Tanjungsari">
                                                <option value="Tanjungsari">Desa Tanjungsari</option>
                                                <option value="Selawangi">Desa Selawangi</option>
                                                <option value="Pasirmadang">Desa Pasirmadang</option>
                                                <option value="Sirnarasa">Desa Sirnarasa</option>
                                                <option value="Antajaya">Desa Antajaya</option>
                                                <option value="Bantar Kuning">Desa Bantar Kuning</option>
                                                <option value="Cibadak">Desa Cibadak</option>
                                                <option value="Cinangka">Desa Cinangka</option>
                                                <option value="Sukaresmi">Desa Sukaresmi</option>
                                                <option value="Gunung Malang">Desa Gunung Malang</option>
                                            </optgroup>
                                            <optgroup label="Tenjo">
                                                <option value="Tenjo">Desa Tenjo</option>
                                                <option value="Singabangsa">Desa Singabangsa</option>
                                                <option value="Ciomas">Desa Ciomas</option>
                                                <option value="Babakan">Desa Babakan</option>
                                                <option value="Cilaku">Desa Cilaku</option>
                                                <option value="Singabraja">Desa Singabraja</option>
                                                <option value="Tapos">Desa Tapos</option>
                                                <option value="Bojong">Desa Bojong</option>
                                                <option value="Cibitung tengah">Desa Cibitung tengah</option>
                                            </optgroup>
                                            <optgroup label="Tenjolaya">
                                                <option value="Tenjolaya">Desa Tenjolaya</option>
                                                <option value="Gunung Mulya">Desa Gunung Mulya</option>
                                                <option value="Cinagara">Desa Cinagara</option>
                                                <option value="Tapos I">Desa Tapos I</option>
                                                <option value="Tapos II">Desa Tapos II</option>
                                                <option value="Cibitung Wetan">Desa Cibitung Wetan</option>
                                                <option value="Situ Daun">Desa Situ Daun</option>
                                            </optgroup>
                                            <optgroup label="Cigombong">
                                                <option value="Cigombong">Desa Cigombong</option>
                                                <option value="Cisalada">Desa Cisalada</option>
                                                <option value="Ciburuy">Desa Ciburuy</option>
                                                <option value="Tugujaya">Desa Tugujaya</option>
                                                <option value="Tugu jaya II">Desa Tugu jaya II</option>
                                                <option value="Srogol">Desa Srogol</option>
                                                <option value="Wates Jaya">Desa Wates Jaya</option>
                                                <option value="Ciburay">Desa Ciburay</option>
                                            </optgroup>
                                            <optgroup label="Cigudeg">
                                                <option value="Cigudeg">Desa Cigudeg</option>
                                                <option value="Banyumudal">Desa Banyumudal</option>
                                                <option value="Bangunjaya">Desa Bangunjaya</option>
                                                <option value="Batujajar">Desa Batujajar</option>
                                                <option value="Bunar">Desa Bunar</option>
                                                <option value="Cidokom">Desa Cidokom</option>
                                                <option value="Cintamanik">Desa Cintamanik</option>
                                                <option value="Mekarjaya">Desa Mekarjaya</option>
                                                <option value="Rengasjajar">Desa Rengasjajar</option>
                                                <option value="Sukamaju">Desa Sukamaju</option>
                                                <option value="Wargajaya">Desa Wargajaya</option>
                                                <option value="Sukaraksa">Desa Sukaraksa</option>
                                            </optgroup>
                                            <optgroup label="Cijeruk">
                                                <option value="Cijeruk">Desa Cijeruk</option>
                                                <option value="Cibalung">Desa Cibalung</option>
                                                <option value="Cipicung">Desa Cipicung</option>
                                                <option value="Cipelang">Desa Cipelang</option>
                                                <option value="Palasari">Desa Palasari</option>
                                                <option value="Sukaharja">Desa Sukaharja</option>
                                                <option value="Tajurhalang">Desa Tajurhalang</option>
                                                <option value="Warungmenteng">Desa Warungmenteng</option>
                                            </optgroup>
                                            <optgroup label="Cileungsi">
                                                <option value="Cileungsi">Desa Cileungsi</option>
                                                <option value="Cileungsi Kidul">Desa Cileungsi Kidul</option>
                                                <option value="Cipenjo">Desa Cipenjo</option>
                                                <option value="Dayeuh">Desa Dayeuh</option>
                                                <option value="Gandoang">Desa Gandoang</option>
                                                <option value="Jatisari">Desa Jatisari</option>
                                                <option value="Limusnunggal">Desa Limusnunggal</option>
                                                <option value="Mampir">Desa Mampir</option>
                                                <option value="Mekarsari">Desa Mekarsari</option>
                                                <option value="Pasir Angin">Desa Pasir Angin</option>
                                                <option value="Setu sari">Desa Setu sari</option>
                                            </optgroup>
                                            <optgroup label="Ciomas">
                                                <option value="Ciomas Rahayu">Desa Ciomas Rahayu</option>
                                                <option value="Ciomas">Desa Ciomas</option>
                                                <option value="Kota Batu">Desa Kota Batu</option>
                                                <option value="Laladon">Desa Laladon</option>
                                                <option value="Mekarjaya">Desa Mekarjaya</option>
                                                <option value="Pagelaran">Desa Pagelaran</option>
                                                <option value="Parakan">Desa Parakan</option>
                                            </optgroup>
                                            <optgroup label="Cibungbulang">
                                                <option value="Cibungbulang">Desa Cibungbulang</option>
                                                <option value="Cemplang">Desa Cemplang</option>
                                                <option value="Dukuh">Desa Dukuh</option>
                                                <option value="Gunung Malang">Desa Gunung Malang</option>
                                                <option value="Leuweung Kolot">Desa Leuweung Kolot</option>
                                                <option value="Situ Daun">Desa Situ Daun</option>
                                                <option value="Suka Bakti">Desa Suka Bakti</option>
                                                <option value="Sumur Batu">Desa Sumur Batu</option>
                                            </optgroup>
                                            <optgroup label="Cihideung">
                                                <option value="Cihideung Hilir">Desa Cihideung Hilir</option>
                                                <option value="Cihideung Udik">Desa Cihideung Udik</option>
                                                <option value="Leuweng Muara">Desa Leuweng Muara</option>
                                                <option value="Palasari">Desa Palasari</option>
                                                <option value="Purasari">Desa Purasari</option>
                                                <option value="Wates Jaya">Desa Wates Jaya</option>
                                            </optgroup>
                                            <optgroup label="Ciseeng">
                                                <option value="Ciseeng">Desa Ciseeng</option>
                                                <option value=" Parigi Mekar">Desa Parigi Mekar</option>
                                                <option value=" Bojonggaok">Desa Bojonggaok</option>
                                                <option value=" Ciomas">Desa Ciomas</option>
                                                <option value=" Babakan">Desa Babakan</option>
                                                <option value=" Kuripan">Desa Kuripan</option>
                                                <option value=" Putat Nutug">Desa Putat Nutug</option>
                                                <option value=" Cibentang">Desa Cibentang</option>
                                                <option value=" Limus Nunggal">Desa Limus Nunggal</option>
                                                <option value=" Karihkil">Desa Karihkil</option>
                                                <option value="Sukaluyu">Desa Sukaluyu</option>
                                            </optgroup>
                                            <optgroup label="Kelapa Nunggal">
                                                <option value="Bantar Gebang">Desa Bantar Gebang</option>
                                                <option value="Cibalongsari">Desa Cibalongsari</option>
                                                <option value="Cikahuripan">Desa Cikahuripan</option>
                                                <option value="Gunung Putri">Desa Gunung Putri</option>
                                                <option value="Jubleg">Desa Jubleg</option>
                                                <option value="Kalapa Nunggal">Desa Kalapa Nunggal</option>
                                                <option value="Kembangkuning">Desa Kembangkuning</option>
                                                <option value="Lulut">Desa Lulut</option>
                                                <option value="Nambo">Desa Nambo</option>
                                            </optgroup>
                                            <optgroup label="Rumpin">
                                                <option value="Cibodas">Desa Cibodas</option>
                                                <option value="Cibuntu">Desa Cibuntu</option>
                                                <option value="Cidokom">Desa Cidokom</option>
                                                <option value="Cipinang">Desa Cipinang</option>
                                                <option value="Gobang">Desa Gobang</option>
                                                <option value="Kampung Sawah">Desa Kampung Sawah</option>
                                                <option value="Kertajaya">Desa Kertajaya</option>
                                                <option value="Leuwibatu">Desa Leuwibatu</option>
                                                <option value="Mekarjaya">Desa Mekarjaya</option>
                                                <option value="Rumpin">Desa Rumpin</option>
                                                <option value="Sukamulya">Desa Sukamulya</option>
                                                <option value="Sukasari">Desa Sukasari</option>
                                                <option value="Taman Sari">Desa Taman Sari</option>
                                                <option value="Tamansari">Desa Tamansari</option>
                                            </optgroup>

                                        </select>
                                    </span>
                                </span>
                                <span class="gi-register-wrap gi-recaptcha w-full flex justify-center px-[15px]">
                                    <span class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></span>
                                    <input class="form-control hidden w-full bg-transparent border-[1px] border-solid border-[#eee] text-[#777] text-[14px] mb-[26px] px-[15px] outline-[0] rounded-[5px] h-[50px]" data-recaptcha="true" required data-error="Please complete the Captcha">
                                    <span class="help-block with-errors"></span>
                                </span>
                                <span class="gi-register-wrap gi-register-btn flex flex-row justify-end w-full px-[15px] max-[767px]:flex-col">
                                    <a href="{{ route('produk') }}" class="gi-btn-1 py-[8px] px-[15px] bg-[#4b5966] text-[#fff] border-[0] transition-all duration-[0.3s] ease-in-out overflow-hidden text-center text-[14px] font-semibold relative rounded-[5px] max-[767px]:mt-[15px] hover:bg-[#5caf90]">
                                        Edit Profile
                                    </a>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sample section End -->

@endsection
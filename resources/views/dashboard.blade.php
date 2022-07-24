@extends('layout.main')
@section('container')
@if(session()->has('added'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('added') }}</strong> Thank you for your bid.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="row pt-4">
  <div class="col-md-6 col-lg-4">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="/img/interior1.jpg" class="img-fluid rounded-start" alt="Interior 1">

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">5 Tips Sukses Mewujudkan Interior Rumah Serba Putih</h5>
            <p class="card-text">Desain interior rumah serba putih bukanlah tren baru. Akan tetapi, tren ini diyakini masih akan bertahan cukup lama.</p>
            <p class="card-text"><small class="text-muted">Last updated 47 secs ago</small></p>

          </div>

        </div>

      </div>

    </div>

  </div>
  <div class="col-md-6 col-lg-4">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="/img/interior2.jpg" class="img-fluid rounded-start" alt="Interior 2">

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Banyak Digunakan pada Interior, Kenapa Warna Coklat Begitu Disukai?</h5>
            <p class="card-text">Pricipal Designer Insert Design Studio Jenna Schumacher menjelaskan, coklat adalah warna klasik yang cocok digunakan untuk hampir semua palet.</p>
            <p class="card-text"><small class="text-muted">Last updated 1 day ago</small></p>

          </div>

        </div>

      </div>

    </div>

  </div>
  <div class="col-md-6 col-lg-4">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="/img/interior3.jpg" class="img-fluid rounded-start" alt="Interior 3">

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">5 Alasan Warna Coklat Tetap Digemari dalam Desain Interior Rumah</h5>
            <p class="card-text">Ada banyak warna yang bisa dipilih untuk menghias interior rumah, dan meningkatkan tampilannya supaya terlihat lebih menarik.</p>
            <p class="card-text"><small class="text-muted">Last updated 5 days ago</small></p>

          </div>

        </div>

      </div>

    </div>

  </div>
  <div class="col-md-6 col-lg-4">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="/img/interior4.jpg" class="img-fluid rounded-start" alt="Interior 4">

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">7 Warna Retro yang Kembali Jadi Tren Desain Interior, Apa Saja?</h5>
            <p class="card-text">Beberapa warna yang banyak dijadikan elemen dekorasi rumah dan warna cat dinding di masa lalu dapat membangkitkan kenyamanan,keakraban, dan kegembiraan.</p>
            <p class="card-text"><small class="text-muted">Last updated 6 days ago</small></p>

          </div>

        </div>

      </div>

    </div>

  </div>
  <div class="col-md-6 col-lg-4">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="/img/interior5.jpg" class="img-fluid rounded-start" alt="Interior 5">

        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Cara Membuat Ruangan Terlihat Lebih Luas Menurut Desainer Interior</h5>
            <p class="card-text">Saat mendesain ruangan kecil, penting untuk memilih bagian yang sesuai dengan skala ruang," kata Molly Kidd dari Light & Dwell Design seperti dikutip dari Martha Stewart, Jumat (21/1/2022).</p>
            <p class="card-text"><small class="text-muted">Last updated 2 weeks ago</small></p>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>
<div class="container mb-4">
  <h1 class="fs-1">Pesan Barang</h1>
  <div class="row">
    <div class="col-8 border border-dark border-end-0 border-opacity-10 rounded-4 p-4 shadow">
      <form id="bidForm" method="post" action="/">
        @csrf
        <!-- nama barang field -->
        <div class="mb-3">
          <label for="orderedProduct" class="form-label">Pesanan Barang</label>
          <input type="text" class="form-control" id="orderedProduct" aria-describedby="orderedProductHelp" name="product">
          <div id="orderedProductHelp" class="form-text">Tulis barang yang diinginkan</div>
        </div>
        <!-- platform field -->
        <div class="row mb-3">
          <label for="platform" class="form-label">Platform</label>
          <div class="col">
            <div class="form-check">
              <input class="form-check-input" type="radio" id="consoleRadio" name="platform_id" value="1">
              <label class="form-check-label" for="consoleRadio">Console</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check">
              <input class="form-check-input" type="radio" id="pcRadio" name="platform_id" value="2">
              <label class="form-check-label" for="pcRadio">Personal Computer</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check">
              <input class="form-check-input" type="radio" id="furniture" name="platform_id" value="3">
              <label class="form-check-label" for="furniture">Furniture</label>
            </div>
          </div>
        </div>
        <!-- harga & jumlah field -->
        <div class="row mb-3">
          <div class="col-8">
            <label for="price" class="form-label">Harga</label>
            <input type="text" class="form-control" id="price" aria-describedby="priceHelp" name="price" >
            <div id="priceHelp" class="form-text">Tentukan harga yang diinginkan</div>
          </div>
          <div class="col-4">
            <label for="quantity" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="quantity"  aria-describedby="quantityHelp" name="quantity">
            <div id="quantityHelp" class="form-text">Tentukan jumlah barang yang dipesan</div>
          </div>
        </div>
        <!-- submit button -->
        <div class="d-flex gap-3 justify-content-end">
          <button type="button" class="btn btn-danger d-flex align-items-center" onclick="resetFunction()">
            <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" class="me-2" fill="#ffffff" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg> Hapus
          </button>
          <button type="submit" class="btn btn-success d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" class="me-2" fill="#ffffff" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M171.7 191.1H404.3L322.7 35.07C316.6 23.31 321.2 8.821 332.9 2.706C344.7-3.409 359.2 1.167 365.3 12.93L458.4 191.1H544C561.7 191.1 576 206.3 576 223.1C576 241.7 561.7 255.1 544 255.1L492.1 463.5C484.1 492 459.4 512 430 512H145.1C116.6 512 91 492 83.88 463.5L32 255.1C14.33 255.1 0 241.7 0 223.1C0 206.3 14.33 191.1 32 191.1H117.6L210.7 12.93C216.8 1.167 231.3-3.409 243.1 2.706C254.8 8.821 259.4 23.31 253.3 35.07L171.7 191.1zM191.1 303.1C191.1 295.1 184.8 287.1 175.1 287.1C167.2 287.1 159.1 295.1 159.1 303.1V399.1C159.1 408.8 167.2 415.1 175.1 415.1C184.8 415.1 191.1 408.8 191.1 399.1V303.1zM271.1 303.1V399.1C271.1 408.8 279.2 415.1 287.1 415.1C296.8 415.1 304 408.8 304 399.1V303.1C304 295.1 296.8 287.1 287.1 287.1C279.2 287.1 271.1 295.1 271.1 303.1zM416 303.1C416 295.1 408.8 287.1 400 287.1C391.2 287.1 384 295.1 384 303.1V399.1C384 408.8 391.2 415.1 400 415.1C408.8 415.1 416 408.8 416 399.1V303.1z"/></svg> Pesan
          </button>
        </div>
      </form>
    </div>
    {{-- <div class="col-4 text-end">Join Discord Kota Madani</div> --}}
  </div>

</div>

@endsection
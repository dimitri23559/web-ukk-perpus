@extends('layouts.main')
@section('container')
  <div class="row flex-md-row-reverse align-items-center g-5 py-5">
    <div class="col-md-6">
      <img src="https://source.unsplash.com/700x500?library" class="d-block mx-lg-auto img-fluid rounded" alt="Heroes images" loading="lazy">
    </div>
    <div class="col-md-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
      <p class="lead"> Perpustakaan atau rumah buku adalah sebuah koleksi buku dan majalah yang umumnya dibiayai dan dioperasikan oleh sebuah kota atau institusi, serta dimanfaatkan oleh masyarakat yang rata-rata tidak mampu membeli buku dengan biaya sendiri. Namun, dengan kemajuan teknologi, perpustakaan modern tidak hanya menyimpan buku, tetapi juga media lain seperti map, cetak atau hasil seni lainnya, mikrofilm, mikrofiche, tape audio, CD, LP, tape video dan DVD, serta menyediakan fasilitas umum untuk mengakses gudang data CD-ROM dan internet. Sebagai kumpulan informasi, perpustakaan modern juga dapat berupa perpustakaan digital yang dapat diakses lewat jaringan komputer.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="/posts" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Get Started</a>
      </div>
    </div>
  </div>
@endsection
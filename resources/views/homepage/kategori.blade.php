@include('layouts.menu')

 @extends('layouts.template')
 @section('content')
    <div class="container-fluid">
        {{-- carousel --}}

    {{-- end carousel --}}
    {{-- kategori produk --}}
    <div class="row mt-4 align-items-center">
        <div class="col col-md-12 col-sm-12 mb-4">
            <h2 class="text-center">Kategori Produk</h2>
        </div>
        {{-- kategori produk pertama --}}
        <div class="card" style="width: 18rem;">
            <img src="{{ 'assets/tas.jpg' }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Tas</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ 'assets/pakaian.jpg' }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pakaian</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ 'assets/sepatu.jpg' }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Sepatu</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ 'assets/makeup.jpg' }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Make Up</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    {{-- end kategori produk --}}

    {{-- profil toko --}}
    <hr>
    <div class="row mt-4">
        <div class="col">
            <h5 class="text-center"></h5>
        </div>
    </div>

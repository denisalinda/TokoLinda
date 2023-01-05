@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
<!-- table kategori -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kategori Film</h4>
                    <div class="card-tools">
                        <a href="{{ Route ('create.kategori') }}" class="btn btn-sm btn-primary">
                            Baru
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="#">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="keyword" id="keyword" class="form-control" placeholder="ketik keyword disini">
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary">
                                Cari
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="50px">No</th>
                                    <th>Gambar</th>
                                    <th>Kode</th>
                                    <th>Genre</th>
                                    <th>Jumlah </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img src="{{ asset('assets/image/film.jpg') }}" alt="kategori 1" width='150px'>
                                        <div class="row mt-2">
                                            <div class="col">
                                                <input type="file" name="gambar" id="gambar">
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-sm btn-primary">Upload</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Film-1</td>
                                    <td>Film</td>
                                    <td>112 Produk</td>
                                    <td>
                                        <a href="{{ Route ('edit.kategori') }}" class="btn btn-smbtn-primary mr-2 mb-2">
                                            Edit
                                        </a>
                                        <button class="btn btn-sm btn-danger mb-2">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <img src= {{ asset('assets/image/drakor.jpg') }} alt="kategori 2" width='150px'>
                                        <div class="row mt-2">
                                            <div class="col">
                                                <input type="file" name="gambar" id="gambar">
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-sm btn-primary">Upload</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>drakor-2</td>
                                    <td>Drama Korea</td>
                                    <td>200 Produk</td>
                                    <td>
                                        <a href="{{ Route ('edit.kategori') }}" class="btn btn-smbtn-primary mr-2 mb-2">
                                            Edit
                                        </a>
                                        <button class="btn btn-sm btn-danger mb-2">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <img src="{{ asset('assets/image/horor.jpg') }}" alt="kategori 3" width='150px'>
                                        <div class="row mt-2">
                                            <div class="col">
                                                <input type="file" name="gambar" id="gambar">
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-sm btn-primary">Upload</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Horor-01</td>
                                    <td>Horror</td>
                                    <td>90 Produk</td>
                                    <td>
                                        <a href="{{ Route ('edit.kategori') }}" class="btn btn-smbtn-primary mr-2 mb-2">
                                            Edit
                                        </a>
                                        <button class="btn btn-sm btn-danger mb-2">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

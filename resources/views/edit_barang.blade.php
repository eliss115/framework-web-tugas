@extends('utama')

@section('edit')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Barang</h4>
            <p class="card-description">
            AliceShop
            </p>
            <form class="forms-sample" action="/updateBarang" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputKodeBarang">Kode Barang</label>
                    <input type="text" class="form-control" name="kode_barang" value="{{ $barang[0]->kode_barang }}"
                        placeholder="Masukkan Kode Barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputNamaBarang">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" value="{{  $barang[0]->nama_barang }}"
                        placeholder="Masukkan Nama Barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputJenisVarian">Jenis Varian</label>
                    <input type="text" class="form-control" name="jenis_varian" value="{{  $barang[0]->jenis_varian }}"
                        placeholder="Jenis Varian">
                </div>
                <div class="form-group">
                    <label for="exampleInputQty">Qty</label>
                    <input type="text" class="form-control" name="qty" value="{{  $barang[0]->qty }}" placeholder="Qty">
                </div>
                <div class="form-group">
                    <label for="exampleInputHargaJual">Harga Jual</label>
                    <input type="text" class="form-control" name="harga_jual" value="{{  $barang[0]->harga_jual }}"
                        placeholder="Harga Jual">

                </div>
                <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection
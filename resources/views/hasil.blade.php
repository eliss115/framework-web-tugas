@extends('utama')

@section('hasil')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body" align="center">
            <h4 class="card-title">Hasil Input Barang</h4>
            <p class="card-description">
                Detail pembelian barang
            </p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th> Nama Barang</th>
                            <th>Jenis Varian</th>
                            <th>Qty</th>
                            <th>Harga Jual</th>
                            <th>Total Harga</th>
                            <th>Potongan Harga</th>
                            <th>Harga Setelah Diskon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $item)
                        <tr>
                            <td>{{ $item -> kode_barang }}</td>
                            <td>{{ $item -> nama_barang }}</td>
                            <td>{{ $item -> jenis_varian }}</td>
                            <td>{{ $item -> qty }}</td>
                            <td>{{ $item -> harga_jual }}</td>
                            <td>{{ $item -> total_harga }}</td>
                            <td>{{ $item -> diskon }}%</td>
                            <td>{{ $item -> harga_setelah_diskon }}</td>
                            <td>
                                <button type="submit"
                                    onclick="window.location.href='{{url('editBarang/'.$item->kode_barang)}}';"
                                    class="btn btn-dark btn-icon-text">Edit</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
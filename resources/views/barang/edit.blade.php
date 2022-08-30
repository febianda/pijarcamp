@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Edit Barang</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Edit Barang</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <form action="{{ route('updateBarang', ['id' => $barang->id]) }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="text" name="nama" id="nama" class="form-control" required="required" value="{{ $barang->nama }}" placeholder="Masukkan nama barang">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">keterangan</label>
                        <textarea name="keterangan" id="keterangan" rows="3" class="form-control" required="required" placeholder="Masukkan keterangan barang">{{ $barang->keterangan }}</textarea>
                    </div>

                    <div class="text-right">
                        <a href="{{ route('daftarBarang') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
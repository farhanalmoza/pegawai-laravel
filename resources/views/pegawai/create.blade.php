@extends('layouts.app')

@section('content')
<div class="container">
	<h4 class="mt-2">Tambah Pegawai</h4>
	<hr>

	@if ( $errors->any() )
		<div class="alert alert-danger pb-0">
			<ul>
				@foreach( $errors->all() as $error )
				  <li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form method="post" action="{{ route('pegawai.store') }}" enctype="multipart/form-data">
	  @csrf
	  <div class="form-group row">
	  	<label class="col-sm-2 col-form-label">Foto</label>
	  	<div class="col-sm-5">
	  		<div class="custom-file">
			  <input type="file" class="custom-file-input" id="foto" name="foto">
			  <label class="custom-file-label" for="foto">Pilih file...</label>
			</div>
	  	</div>
	  </div>

	  <div class="form-group row">
	    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
	    <div class="col-sm-5">
	      <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
	    </div>
	  </div>

	  <div class="form-group row">
	  	<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
	  	<div class="col-sm-4">
	  		<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" id="jkl" name="jk" class="custom-control-input" value="L">
				  <label class="custom-control-label" for="jkl">Laki-laki</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
				  <input type="radio" id="jkp" name="jk" class="custom-control-input" value="P">
				  <label class="custom-control-label" for="jkp">Perempuan</label>
				</div>
	  	</div>
	  </div>

	  <div class="form-group row">
	  	<label for="tanggal" class="col-sm-2 col-form-label">Tanggal Lahir</label>
	  	<div class="col-sm-3">
	  		<input type="date" class="form-control" name="tanggal" id="tanggal">
	  	</div>
	  </div>

	  <div class="form-group row">
	  	<label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
	  	<div class="col-sm-5">
	      <select id="jabatan" class="custom-select" name="jabatan">
	      	<option value=""> -Pilih Jabatan- </option>
	      	@foreach($jabatan as $j)
	        <option value="{{ $j->id_jabatan }}">{{ $j->nama_jabatan }}</option>
	        @endforeach
	      </select>
	  	</div>	  	
	  </div>

	  <div class="form-group row">
	    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
	    <div class="col-sm-8">
	      <textarea name="keterangan" class="form-control" id="keterangan">{{ old('keterangan') }}</textarea>
	    </div>
	  </div>
	  
    <div class="col-sm-10 offset-sm-2 pl-2">
      <button type="submit" class="text-white btn btn-info"><i class="fas fa-share-square"></i> Simpan</button>
      <button type="reset" class="text-white btn btn-danger"><i class="fas fa-times-circle"></i> Batal</button>
    </div>
	</form>
</div>
@endsection
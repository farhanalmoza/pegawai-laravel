@extends('layouts.app')

@section('content')
<div class="container">
	<h4 class="mt-2">Tambah Jabatan</h4>
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

	<form method="post" action="{{ route('jabatan.store') }}">
	  @csrf
	  <div class="form-group row">
	    <label for="nama" class="col-sm-2 col-form-label">Nama Jabatan</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
	    </div>
	  </div>
	  
    <div class="col-sm-10 offset-md-2">
      <button type="submit" class="text-white btn btn-info"><i class="fas fa-share-square"></i> Simpan</button>
      <button type="reset" class="text-white btn btn-danger"><i class="fas fa-times-circle"></i> Batal</button>
    </div>
	</form>
</div>
@endsection
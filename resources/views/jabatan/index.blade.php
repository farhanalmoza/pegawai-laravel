@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Data Jabatan</h4>
    <hr>
    <a class="btn btn-success" href="{{ route('jabatan.create') }}"><i class="fas fa-plus"></i> Tambah</a>

    @if ( $message = Session::get('status') )
        <div class="alert alert-success mt-3 pb-0">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped table-bordered mt-3 pb-0">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama jabatan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($jabatan as $jbt)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $jbt->nama_jabatan }}</td>
          <td>
            <a class="text-white btn btn-sm btn-info" href="{{ route('jabatan.edit', $jbt->id_jabatan) }}"><i class="fa fa-pencil"></i> Edit</a>
            <form action="{{ route('jabatan.destroy', $jbt->id_jabatan) }}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
</div>

@endsection

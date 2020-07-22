@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Data Pegawai</h4>
    <hr>
    <a class="btn btn-success" href="{{ route('pegawai.create') }}"><i class="fas fa-plus"></i> Tambah</a>

    @if ( $message = Session::get('status') )
        <div class="alert alert-success mt-3 pb-0">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped table-bordered mt-3 pb-0">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Foto</th>
          <th scope="col">Nama</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Jabatan</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pegawai as $pgw)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td><img src="{{ asset('images/'.$pgw->foto) }}" width="100" alt=""></td>
          <td>{{ $pgw->nama_pegawai }}</td>
          <td>{{ $pgw->jenis_kelamin }}</td>
          <td>{{ $pgw->tgl_lahir }}</td>
          <td>{{ $pgw->nama_jabatan }}</td>
          <td>{{ $pgw->keterangan }}</td>
          <td>
            <a class="text-white btn btn-sm btn-info" href="{{ route('pegawai.edit', $pgw->id_pegawai) }}"><i class="fa fa-pencil"></i> Edit</a>
            <form action="{{ route('pegawai.destroy', $pgw->id_pegawai) }}" method="post" class="d-inline">
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

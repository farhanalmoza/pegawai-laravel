@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1>Selamat Datang</h1>
                    <h1 class="display-4">Aplikasi Manajemen Pegawai</h1>
                    <h3>Anda login sebagai Administrator</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

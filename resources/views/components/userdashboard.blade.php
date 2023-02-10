@extends('layouts.index')

@section('content')
    <div class="container-fluid p-5" style="height: 100vh">
        <div class="row p-5 mt-5">
            <div class="col-md-6 m-auto">
                <div class="dash-head">
                    <h1>Dashboard User</h1>
                    <hr>
                </div>
                <div class="dash-main">
                    <div>
                        <p>Nama Username Akun : <span class="text-muted">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span></p>
                        <p>ID Akun : <span class="text-muted">{{ \Illuminate\Support\Facades\Auth::user()->id }}</span></p>
                        <p>Alamat Email Akun : <span class="text-muted">{{ \Illuminate\Support\Facades\Auth::user()->email }}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

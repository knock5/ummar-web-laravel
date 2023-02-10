@extends('layouts.dashboard')

@section('container')
    <div class="container-fluid p-3">
        <div class="d-flex justify-content-center align-items-center my-3">
            <button class="btn btn-secondary" onclick="window.location='/ummar/accusers'">&laquo Kembali</button>
        </div>

        <div class="col-md-8 m-auto p-2 border">
            <form class="" method="POST" action="{{ url('/ummar/accusers/update') }}">
                @csrf
                @method('PUT')
                <div class="col-6 my-2 mx-auto">
                    <label for="id" class="form-label">ID Account</label>
                    <input type="text" class="form-control" name="id" value="{{ $id }}" readonly style="cursor: not-allowed">
                </div>
                <div class="col-6 my-2 mx-auto">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" class="form-control" name="name" value="{{ $name }}">
                </div>
                <div class="col-md-6 my-2 mx-auto">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $email }}">
                </div>
                <div class="col-md-6 my-2 mx-auto">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" name="password" value="{{ $password }}">
                </div>
                <div class="col-6 my-3 mx-auto d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection

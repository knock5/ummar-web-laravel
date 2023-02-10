@extends('layouts.dashboard')

@section('container')
    <div class="container-fluid p-3">
        <div class="d-flex justify-content-center align-items-center my-3">
            <button class="btn btn-secondary" onclick="window.location='/ummar/accusers'">&laquo Kembali</button>
        </div>

        <div class="col-md-8 m-auto p-2 border">
            @if(session('msg'))
                {{ session('msg') }}
            @endif
            <form class="" method="POST" action="{{ url('/ummar/accusers/save') }}">
                @csrf
                <div class="col-6 my-2 mx-auto">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" class="form-control" name="name" placeholder="Account username...">
                </div>
                <div class="col-md-6 my-2 mx-auto">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Account email...">
                </div>
                <div class="col-md-6 my-2 mx-auto">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Account password...">
                </div>
                <div class="col-6 my-3 mx-auto d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection

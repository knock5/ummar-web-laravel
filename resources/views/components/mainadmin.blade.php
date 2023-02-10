@extends('layouts.dashboard')

@section('container')
    <div class="container-fluid {{ ($title === 'Dashboard Admin') ? 'container-fluid-admin' : '' }} d-flex flex-column justify-content-center align-items-center text-white">
        <div>
            <h1 class="fw-bold">I Hope You Have A Good Day!</h1>
        </div>
        <div>
            <p class="fs-3">
                Let's create a new data for increase your bussiness.
            </p>
        </div>
    </div>
@endsection


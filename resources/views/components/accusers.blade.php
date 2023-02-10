@extends('layouts.dashboard')

@section('container')
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center text-white">
        <div class="table-container-accusers mt-5 d-flex justify-content-between">
            <div>
                <p class="fs-3">Data Account Users :</p>
            </div>
            <div>
                <button class="btn btn-primary" onclick="window.location='/ummar/accusers/add'">Add New Users</button>
            </div>
        </div>

        @if(session('msg'))
            <div class="bg-primary p-2 my-2">
                {{ session('msg') }}
            </div>
        @endif

        <div class="table-container-accusers">
            <table class="table table-bordered my-3">
                <thead class="table-primary text-center">
                <tr>
                    <th scope="col">Actions</th>
                    <th scope="col">ID</th>
                    <th scope="col">Account Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Remember Token</th>
                    <th scope="col">Level</th>
                    <th scope="col">Created at</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dataAccountUmmar as $d)
                    <tr>
                        <td class="d-flex justify-content-center align-items-center gap-2">
                            <button class="btn btn-info" onclick="window.location='/ummar/accusers/edit/{{ $d->id }}'" >Edit</button>
                            <form action="/ummar/accusers/delete/{{ $d->id }}" method="POST" onsubmit="return hapusData()">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                        <td class="text-center">{{ $d->id }}</td>
                        <td class="text-center">{{ $d->name }}</td>
                        <td class="text-center">{{ $d->email }}</td>
                        <td class="text-center">{{ $d->password }}</td>
                        <td class="text-center">{{ $d->remember_token }}</td>
                        <td class="text-center">{{ $d->level }}</td>
                        <td class="text-center">{{ $d->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

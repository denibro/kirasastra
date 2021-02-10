
@extends('admin.dasboardadmin')

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                    <div class="panel">
                        <div class="panel-heading">
                                <h3 class="panel-title">Members</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NAMA</th>
                                        <th>ROLE</th>
                                        <th>EMAIL</th>
                                        <th>JK</th>
                                        <th>ALAMAT</th>
                                        <th>DIBUAT</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{strtoupper($user->name)}}</td>
                                        <td>{{strtoupper($user->role)}}</td>
                                        <td>{{ $user->email}}</td>
                                        <td>{{ $user->profilmember->jenis_kelamin}}</td>
                                        <td>{{strtoupper($user->profilmember->alamat)}}</td>
                                        <td>{{ $user->created_at}}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-primary">Detail</a>
                                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection

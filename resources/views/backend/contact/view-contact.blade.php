@extends('backend.master')
@section('title')
    View Contact
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Contact</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <section class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Contact List
                                    <a href="{{route('contact.add')}}" class="btn btn-info btn-sm float-right"><i class="fa fa-plus-circle"></i>Add Contact</a>
                                </h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>linkdin</th>
                                        <th>Google Plus</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($views as $key => $view)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$view->phone}}</td>
                                            <td>{{$view->email}}</td>
                                            <td>{{$view->facebook}}</td>
                                            <td>{{$view->twitter}}</td>
                                            <td>{{$view->linkedin}}</td>
                                            <td>{{$view->google}}</td>
                                            <td>
                                                <a class="btn btn-success btn-sm mr-1" href="{{route('contact.edit', $view->id)}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a class="btn btn-danger btn-sm mr-1" id="delete" href="{{route('contact.destroy', $view->id)}}">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
@endsection

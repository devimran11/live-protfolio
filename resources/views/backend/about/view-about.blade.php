@extends('backend.master')
@section('title')
    View About
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage About</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">About</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <section class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>About List
                                    <a href="{{route('about.create')}}" class="btn btn-info btn-sm float-right"><i class="fa fa-plus-circle"></i>Add About</a>
                                </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Name</th>
                                        <th>Profile</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>HTML</th>
                                        <th>CSS</th>
                                        <th>PHP</th>
                                        <th>JavaScript</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($views as $key => $view)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$view->name}}</td>
                                            <td>{{$view->profile}}</td>
                                            <td>{{$view->email}}</td>
                                            <td>{{$view->phone}}</td>
                                            <td>{{$view->html}}</td>
                                            <td>{{$view->css}}</td>
                                            <td>{{$view->php}}</td>
                                            <td>{{$view->javascript}}</td>
                                            <td><img src="{{url('backend/images/about/', $view->image)}}" alt="" width="50" height="50"></td>
                                            <td>
                                                <a class="btn btn-success btn-sm mr-1" href="{{route('about.edit', $view->id)}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a class="btn btn-danger btn-sm mr-1" id="delete" href="{{route('about.destroy', $view->id)}}">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div><!-- /.card-body -->
                        </div>
                    </section>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

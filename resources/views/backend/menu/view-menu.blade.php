@extends('backend.master')
@section('title')
    View Menu
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Menu</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Menu</li>
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
                                <h3>Menu List
                                    <a href="{{route('add.menu')}}" class="btn btn-info btn-sm float-right"><i class="fa fa-plus-circle"></i>Add Menu</a>
                                </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Menu</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($viewMenus as $key => $viewMenu)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$viewMenu->menu}}</td>
                                            <td>
                                                <a class="btn btn-success btn-sm mr-1" href="{{route('edit.menu', $viewMenu->id)}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a class="btn btn-danger btn-sm mr-1" id="delete" href="{{route('delete.menu', $viewMenu->id)}}">
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

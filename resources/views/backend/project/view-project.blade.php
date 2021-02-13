@extends('backend.master')
@section('title')
    View Project
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Project About</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Project</li>
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
                                <h3>Project List
                                    <a href="{{route('project.create')}}" class="btn btn-info btn-sm float-right"><i class="fa fa-plus-circle"></i>Add Project</a>
                                </h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>ICON</th>
                                        <th>Number of Work</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($projects as $key => $projects)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$projects->icon}}</td>
                                            <td>{{$projects->number_of_work}}</td>
                                            <td>{{$projects->details}}</td>
                                            <td>
                                                <a class="btn btn-success btn-sm mr-1" href="{{route('project.edit', $projects->id)}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a class="btn btn-danger btn-sm mr-1" id="delete" href="{{route('project.destroy', $projects->id)}}">
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

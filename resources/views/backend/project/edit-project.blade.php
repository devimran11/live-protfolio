@extends('backend.master')
@section('title')
   Edit Project
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Project</h1>
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
                                    <h3>Edit Project
                                        <a href="{{route('project.index')}}" class="btn btn-info btn-sm float-right"><i class="fa fa-list"></i>All Project</a>
                                    </h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{route('project.update', $project->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="icons">ICONS</label>
                                            <input type="text" name="icons" value="{{$project->icon}}" id="icons" class="form-control">
                                            @error('icons')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="number_of_work">Number of Work</label>
                                            <input type="text" name="number_of_work" value="{{$project->number_of_works}}" id="number_of_work" class="form-control">
                                            @error('number_of_work')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="details">Details</label>
                                            <input type="text" name="details" id="details" value="{{$project->details}}" class="form-control">
                                            @error('details')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3" style="margin-top: 30px">
                                            <button type="submit" class="btn btn-m btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
@endsection


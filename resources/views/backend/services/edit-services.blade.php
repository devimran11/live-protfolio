@extends('backend.master')
@section('title')
   Edit Services
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Services</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Services</li>
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
                                    <h3>Edit Services
                                        <a href="{{route('services.index')}}" class="btn btn-info btn-sm float-right"><i class="fa fa-list"></i>All Services</a>
                                    </h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{route('services.update', $edit->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="category_name">Category Name</label>
                                            <input type="text" name="category_name" value="{{$edit->category_name}}" id="category_name" class="form-control">
                                            @error('category_name')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="icons">ICONS</label>
                                            <input type="text" name="icons" value="{{$edit->icon}}" id="icons" class="form-control">
                                            @error('icons')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="description">Description</label>
                                            <textarea name="description" id="description" cols="50" rows="5" class="form-control">{{$edit->description}}</textarea>
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


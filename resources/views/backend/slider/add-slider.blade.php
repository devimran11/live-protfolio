@extends('backend.master')
@section('title')
   Add Slider
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Slider</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Slider</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <div class="card-header">
                                <h3>Add Slider
                                    <a href="{{route('slider.index')}}" class="btn btn-info btn-sm float-right"><i class="fa fa-list"></i>Slider List</a>
                                </h3>
                        </div>
                            
                            <div class="card-body">
                                <form method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name</label>
                                            <input type="name" name="name" id="name" class="form-control">
                                            @error('name')
                                                <div class="alert" style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="designation">Designation</label>
                                            <input type="designation" name="designation" id="designation" class="form-control">
                                            @error('designation')
                                                <div class="alert" style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="image">Image</label>
                                            <input type="file" name="image" id="image" class="form-control">
                                            @error('image')
                                                <div class="alert" style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3" style="margin-top: 30px">
                                            <button type="submit" class="btn btn-m btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /.card-body -->
                        </div>
                    </section>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection


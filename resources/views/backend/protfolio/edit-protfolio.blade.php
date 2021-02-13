@extends('backend.master')
@section('title')
   Edit Protfolio
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Protfolio</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Protfolio</li>
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
                                    <h3>Edit Protfolio
                                        <a href="{{route('protfolio.index')}}" class="btn btn-info btn-sm float-right"><i class="fa fa-list"></i>Menu Protfolio</a>
                                    </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form method="POST" action="{{route('protfolio.update', $edit->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" value="{{$edit->title}}" id="title" class="form-control">
                                            @error('title')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="category">Category</label>
                                            <input type="text" name="category" value="{{$edit->category}}" id="category" class="form-control">
                                            @error('category')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="image">Image</label>
                                            <img src="{{url('backend/images/protfolio/', $edit->image)}}" alt="" height="150" width="150">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="image">Image</label>
                                            <input type="file" name="image" id="image" class="form-control">
                                            @error('image')
                                                <div class="alert-danger">{{ $message }}</div>
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


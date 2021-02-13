@extends('backend.master')
@section('title')
   Edit About
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
                <!-- Main row -->
                <div class="row">
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <div class="card-header">
                                    <h3>Edit About
                                        <a href="{{route('about.index')}}" class="btn btn-info btn-sm float-right"><i class="fa fa-list"></i>Menu About</a>
                                    </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form method="POST" action="{{route('about.update', $edit->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" value="{{$edit->name}}" id="name" class="form-control">
                                            @error('name')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="profile">Profile</label>
                                            <input type="text" name="profile" value="{{$edit->profile}}" id="profile" class="form-control">
                                            @error('profile')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" value="{{$edit->email}}" id="email" class="form-control">
                                            @error('email')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="phone">Phone</label>
                                            <input type="number" name="phone" value="{{$edit->phone}}" id="phone" class="form-control">
                                            @error('phone')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="html">HTML</label>
                                            <input type="text" name="html" value="{{$edit->html}}" id="html" class="form-control">
                                            @error('html')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="css">CSS</label>
                                            <input type="text" name="css" value="{{$edit->css}}" id="css" class="form-control">
                                            @error('css')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="php">PHP</label>
                                            <input type="text" name="php" value="{{$edit->php}}" id="php" class="form-control">
                                            @error('php')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="javascript">JavaScript</label>
                                            <input type="text" name="javascript" value="{{$edit->javascript}}" id="javascript" class="form-control">
                                            @error('javascript')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="about_me">About Me</label>
                                            <textarea name="about_me" id="" cols="30" rows="5" class="form-control">{{$edit->about_me}}</textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="image">Image</label>
                                            <img src="{{url('backend/images/about/', $edit->image)}}" alt="" width="50" height="50">
                                            <input type="file" name="image" id="image" class="form-control">
                                            @error('image')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3" style="margin-top: 30px">
                                            <button type="submit" class="btn btn-m btn-primary">Update</button>
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


@extends('backend.master')
@section('title')
   Edit Contact
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Contact</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
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
                                    <h3>Edit Contact
                                        <a href="{{route('contact.all')}}" class="btn btn-info btn-sm float-right"><i class="fa fa-list"></i>Menu Contact</a>
                                    </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form method="POST" action="{{route('contact.update', $edit->id)}}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" value="{{$edit->address}}" id="address" class="form-control">
                                            @error('address')
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
                                            <label for="email">Email</label>
                                            <input type="email" name="email" value="{{$edit->email}}" id="email" class="form-control">
                                            @error('email')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="facebook">Facebook</label>
                                            <input type="text" name="facebook" value="{{$edit->facebook}}" id="facebook" class="form-control">
                                            @error('facebook')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="twitter">Twitter</label>
                                            <input type="twitter" name="twitter" value="{{$edit->twitter}}" id="twitter" class="form-control">
                                            @error('twitter')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="linkdin">Linkdin</label>
                                            <input type="text" name="linkdin" value="{{$edit->linkedin}}" id="linkdin" class="form-control">
                                            @error('linkdin')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="google_plus">Google Plus</label>
                                            <input type="text" name="google_plus" value="{{$edit->google}}" id="google_plus" class="form-control">
                                            @error('google_plus')
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


@extends('layouts.main')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>{{ $title ??__('User') }}</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.user.index') }}">{{ $title ??__('User') }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $title ??__('Create User') }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">{{ $title ??__('Create User') }}</h4>
                        <p class="mb-30"></p>
                    </div>
                </div>
                <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Full Name</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="fullname" placeholder="Full Name">
                            @error('fullname')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="email" placeholder="Email" type="email">
                            @error('email')
                            <small>{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Username</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="username" placeholder="Username" type="text">
                            @error('username')
                            <small>{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="password" type="password">
                            @error('password')
                            <small>{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Role</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select col-12" name="role">
                                <option selected disabled>Choose...</option>
                                <option value="admin">Admin</option>
                                <option value="student">Student</option>
                                <option value="lecturer">Lecturer</option>
                            </select>
                            @error('role')
                            <small>{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Gender</label>
                        <div class="col-sm-12 col-md-10 d-flex justify-content-start">
                            <div class="custom-control custom-radio mr-3">
                                <input type="radio" id="male" name="gender" value="male" class="custom-control-input">
                                <label class="custom-control-label" for="male">Male</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="female" name="gender" value="female" class="custom-control-input">
                                <label class="custom-control-label" for="female">Female</label>
                            </div>
                            @error('gender')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail" class="col-sm-12 col-md-2 col-form-label">Photo Profile</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="photo" type="file">
                            @error('photo')
                            <small>{{ $message }}</small>
                            @enderror
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <div class="col-md-2"></div>
                        <div class="col-md-10 text-md-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>                                
                <div class="collapse collapse-box" id="basic-form1">
                    <div class="code-box">
                        <div class="clearfix">
                            <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#copy-pre"><i class="fa fa-clipboard"></i> Copy Code</a>
                            <a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By
            <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
        </div>
    </div>
</div>
@endsection
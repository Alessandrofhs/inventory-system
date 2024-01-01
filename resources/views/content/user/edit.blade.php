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
                                    {{ $title ??__('Edit User') }}
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
                        <h4 class="text-blue h4">{{ $title ??__('Edit User') }}</h4>
                        <p class="mb-30"></p>
                    </div>
                </div>
                <form action="{{ route('admin.user.update',['id'=>$users->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Full Name</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="fullname" value="{{ $users->fullname }}">
                            @error('fullname')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="email" value="{{ $users->email }}" type="email">
                            @error('password')
                            <small>{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Username</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="username" value="{{ $users->username }}" type="text">
                            @error('username')
                            <small>{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="password" value="password" type="password" id="passwordInput">
                            <input type="checkbox" onclick="showPassword()"> Show Password
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
            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By
            <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
        </div>
    </div>
</div>
<script>
    function showPassword() {
        var passwordInput = document.getElementById("passwordInput");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>
@endsection
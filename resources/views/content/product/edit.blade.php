@extends('layouts.main')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>{{ $title ?? __('Product') }}</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('admin.product.index') }}">{{ $title ?? __('Product') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        {{ $title ?? __('Edit Product') }}
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
                            <h4 class="text-blue h4">{{ $title ?? __('Edit product') }}</h4>
                            <p class="mb-30"></p>
                        </div>
                    </div>
                    <form action="{{ route('admin.product.update', ['id' => $products->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label"> Name</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="name" placeholder="Name">
                                @error('name')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Amount</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="amount" placeholder="Amount" type="number">
                                @error('amount')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Place</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="place" placeholder="place" type="text">
                                @error('place')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Update at</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="update_at" type="datetime-local">
                                @error('update_at')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail" class="col-sm-12 col-md-2 col-form-label">Photo Product</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="image" type="file">
                                @error('image')
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

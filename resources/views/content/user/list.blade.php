@extends('layouts.main')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>{{ $title ??__('User Data') }}</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $title ??__('User Data') }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Data table</h4>
                        <p>
                            User data in this system
                        </p>
                    </div>
                    <div class="pull-right">
                        <a href="{{ route('user.add') }}" class="btn btn-success btn-sm scroll-click" rel="content-y" data-toggle="collapse" role="button">Add New<i class="fa fa-plus"></i>
                        </a>
                    </div>                
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif    
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>$</td>
                            <td>MarkOtto@mail.com</td>
                            <td>MarkOtto</td>
                            <td>Mark123</td>
                            <td>Dosen</td>
                            <td>
                                <span class="badge badge-primary">Edit</span>
                                <span class="badge badge-danger">Delete</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="collapse collapse-box" id="striped-table">
                    <div class="code-box">
                        <div class="clearfix">
                            <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#striped-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
                            <a href="#striped-table" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
                        </div>
                        <pre><code class="xml copy-pre hljs" id="striped-table-code">
                            <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table table-striped"</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">scope</span>=<span class="hljs-string">"col"</span>&gt;</span>#<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">scope</span>=<span class="hljs-string">"row"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
                    </code></pre>
                    </div>
                </div>
            </div>
            <!-- Striped table End -->
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By
            <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
        </div>
    </div>
</div>

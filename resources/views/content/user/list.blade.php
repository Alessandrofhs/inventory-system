@extends('layouts.main')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>{{ $title?? __('User Data Table') }}</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $title?? __('User Data Table') }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">                    
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="pb-20">
                    <div class="pd-20 card-box mb-30">
						<div class="clearfix mb-20">
							<div class="pull-left">
								<h4 class="text-blue h4">User Data table</h4>
								<p>
									All user in system
								</p>
							</div>
							<div class="pull-right">
                                <button class="btn btn-primary btn-sm scroll-click" onclick="location.href='{{ route('admin.user.create') }}'">
                                    Add New
                                </button>
                            </div>
						</div>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Name</th>
									<th scope="col">Username</th>
									<th scope="col">Email</th>
									<th scope="col">Role</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
                                @foreach ($users as $user)
                                <tr>
									<td scope="row">{{ $loop->iteration }}</td>
									<td>{{ $user->fullname }}</td>
									<td>{{ $user->username }}</td>
									<td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->gender }}</td>
									<td>
                                        <div class="btn-group" role="group" aria-label="Action buttons">
                                            <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $user->id }}">Delete</button>
                                        </div>
                                    </td>
								</tr>
                                <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $user->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $user->id }}">Delete User</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete {{ $user->fullname }}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <form action="{{ route('admin.user.delete', ['id' => $user->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
							</tbody>
						</table>
					</div>
                </div>
            </div>            
            <!-- Export Datatable End -->
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By
            <a href="https://github.com/dropways" target="_blank"
                >Ankit Hingarajiya</a
            >
        </div>
    </div>
</div>
@endsection

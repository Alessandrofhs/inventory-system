@extends('layouts.main')
@section('title', 'profile')
@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Profile</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Profile
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                        <div class="pd-20 card-box height-100-p">
                            <div class="profile-photo">
                                <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i
                                        class="fa fa-pencil"></i></a>
                                <img src="{{ asset('storage/photo-user/' . Auth::user()->image) }}" alt=""
                                    class="avatar-photo">
                                <div class="modal fade" id="modal" tabindex="-1" role="dialog"
                                    aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body pd-5">
                                                <div class="img-container">
                                                    <img id="image" src="vendors/images/photo2.jpg" alt="Picture">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" value="Update" class="btn btn-primary">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="text-center h5 mb-0">{{ Auth::user()->fullname }}</h5>
                            <p class="text-center text-muted font-14">
                                {{ Auth::user()->role }}
                            </p>
                            <div class="profile-info">
                                <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                                <ul>
                                    <li>
                                        <span>Email Address:</span>
                                        {{ Auth::user()->email }}
                                    </li>
                                    <li>
                                        <span>Phone Number:</span>
                                        {{ Auth::user()->phone }}
                                    </li>
                                    <li>
                                        <span>Gender:</span>
                                        {{ Auth::user()->gender }}
                                    </li>
                                    <li>
                                        <span>Address:</span>
                                        {{ Auth::user()->address }}
                                    </li>
                                </ul>
                            </div>
                            <div class="profile-social">
                                <h5 class="mb-20 h5 text-blue">Social Links</h5>
                                <ul class="clearfix">
                                    <li>
                                        <a href="#" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"
                                            style="color: rgb(255, 255, 255); background-color: rgb(59, 89, 152);"><i
                                                class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"
                                            style="color: rgb(255, 255, 255); background-color: rgb(29, 161, 242);"><i
                                                class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bgcolor="#007bb5" data-color="#ffffff"
                                            style="color: rgb(255, 255, 255); background-color: rgb(0, 123, 181);"><i
                                                class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bgcolor="#f46f30" data-color="#ffffff"
                                            style="color: rgb(255, 255, 255); background-color: rgb(244, 111, 48);"><i
                                                class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bgcolor="#c32361" data-color="#ffffff"
                                            style="color: rgb(255, 255, 255); background-color: rgb(195, 35, 97);"><i
                                                class="fa fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bgcolor="#3d464d" data-color="#ffffff"
                                            style="color: rgb(255, 255, 255); background-color: rgb(61, 70, 77);"><i
                                                class="fa fa-dropbox"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bgcolor="#db4437" data-color="#ffffff"
                                            style="color: rgb(255, 255, 255); background-color: rgb(219, 68, 55);"><i
                                                class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bgcolor="#bd081c" data-color="#ffffff"
                                            style="color: rgb(255, 255, 255); background-color: rgb(189, 8, 28);"><i
                                                class="fa fa-pinterest-p"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bgcolor="#00aff0" data-color="#ffffff"
                                            style="color: rgb(255, 255, 255); background-color: rgb(0, 175, 240);"><i
                                                class="fa fa-skype"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn" data-bgcolor="#00b489" data-color="#ffffff"
                                            style="color: rgb(255, 255, 255); background-color: rgb(0, 180, 137);"><i
                                                class="fa fa-vine"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                        <div class="card-box height-100-p overflow-hidden">
                            <div class="profile-tab height-100-p">
                                <div class="tab height-100-p">
                                    <ul class="nav nav-tabs customtab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#timeline"
                                                role="tab">Calender</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#setting"
                                                role="tab">Settings</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <!-- Timeline Tab start -->
                                        <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                                            <div class="pd-20">
                                                <!-- Calendar container -->
                                                <div id="calendarTimeline"></div>
                                            </div>
                                        </div>
                                        <!-- Timeline Tab End -->
                                        <!-- Setting Tab start -->
                                        <div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
                                            <div class="profile-setting">
                                                <form>
                                                    <ul class="profile-edit-list row">
                                                        <li class="weight-500 col-md-12">
                                                            <h4 class="text-blue h5 mb-20">
                                                                Edit Your Personal Setting
                                                            </h4>
                                                            <div class="form-group">
                                                                <label>Full Name</label>
                                                                <input class="form-control form-control-lg"
                                                                    name="fullname" type="text">
                                                                @error('fullname')
                                                                    <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label>username</label>
                                                                <input class="form-control form-control-lg"
                                                                    type="username">
                                                                @error('username')
                                                                    <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input class="form-control form-control-lg"
                                                                    type="email">
                                                                @error('email')
                                                                    <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label>password</label>
                                                                <input class="form-control form-control-lg"
                                                                    type="password">
                                                                @error('password')
                                                                    <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Gender</label>
                                                                <div class="d-flex">
                                                                    <div class="custom-control custom-radio mb-5 mr-20">
                                                                        <input type="radio" id="customRadio4"
                                                                            name="customRadio"
                                                                            class="custom-control-input">
                                                                        <label class="custom-control-label weight-400"
                                                                            for="customRadio4">Male</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio mb-5">
                                                                        <input type="radio" id="customRadio5"
                                                                            name="customRadio"
                                                                            class="custom-control-input">
                                                                        <label class="custom-control-label weight-400"
                                                                            for="customRadio5">Female</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Role</label>
                                                                <div
                                                                    class="dropdown bootstrap-select form-control form-control-lg">
                                                                    <select
                                                                        class="selectpicker form-control form-control-lg"
                                                                        data-style="btn-outline-secondary btn-lg"
                                                                        title="Not Chosen" tabindex="-98">
                                                                        <option class="bs-title-option" value="">
                                                                        <option selected disabled>Choose...</option>
                                                                        <option value="admin">Admin</option>
                                                                        <option value="student">Student</option>
                                                                        <option value="lecturer">Lecturer</option>
                                                                    </select><button type="button"
                                                                        class="btn dropdown-toggle btn-outline-secondary btn-lg bs-placeholder"
                                                                        data-toggle="dropdown" role="combobox"
                                                                        aria-owns="bs-select-3" aria-haspopup="listbox"
                                                                        aria-expanded="false" title="Not Chosen">
                                                                        <div class="filter-option">
                                                                            <div class="filter-option-inner">
                                                                                <div class="filter-option-inner-inner">Not
                                                                                    Chosen</div>
                                                                            </div>
                                                                        </div>
                                                                    </button>
                                                                    <div class="dropdown-menu ">
                                                                        <div class="inner show" role="listbox"
                                                                            id="bs-select-3" tabindex="-1">
                                                                            <ul class="dropdown-menu inner show"
                                                                                role="presentation"></ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>State/Province/Region</label>
                                                                <input class="form-control form-control-lg"
                                                                    type="text">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Postal Code</label>
                                                                <input class="form-control form-control-lg"
                                                                    type="text">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Phone Number</label>
                                                                <input class="form-control form-control-lg"
                                                                    type="text">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <textarea class="form-control"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Visa Card Number</label>
                                                                <input class="form-control form-control-lg"
                                                                    type="text">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Paypal ID</label>
                                                                <input class="form-control form-control-lg"
                                                                    type="text">
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox mb-5">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="customCheck1-1">
                                                                    <label class="custom-control-label weight-400"
                                                                        for="customCheck1-1">I agree to receive
                                                                        notification
                                                                        emails</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <input type="submit" class="btn btn-primary"
                                                                    value="Update Information">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Setting Tab End -->
                                    </div>
                                </div>
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
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendarTimeline');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                // Konfigurasi kalender
                // Misalnya: defaultView, events, dll.
                plugins: ['interaction', 'dayGrid', 'timeGrid'],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                defaultDate: new Date(),
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    // Daftar acara bisa dimasukkan di sini
                ]
            });

            calendar.render();
        });
    </script>
@endsection

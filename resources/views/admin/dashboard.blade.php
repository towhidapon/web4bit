@extends('admin.layouts.app')
@section('content')
    <div class="card overflow-hidden">
        <div class="bg-primary bg-soft">
            <div class="row">
                <div class="col-7">
                    <div class="text-primary p-3">
                        <h5 class="text-primary">Welcome Back !</h5>
                        <p>Skote Dashboard</p>
                    </div>
                </div>
                <div class="col-5 align-self-end">
                    <img class="img-fluid" src="assets/images/profile-img.png" alt="">
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="row">
                <div class="col-sm-4">
                    <div class="avatar-md profile-user-wid mb-4">
                        <img class="img-thumbnail rounded-circle" src="assets/images/users/avatar-1.jpg" alt="">
                    </div>
                    <h5 class="font-size-15 text-truncate">Henry Price</h5>
                    <p class="text-muted mb-0 text-truncate">UI/UX Designer</p>
                </div>

                <div class="col-sm-8">
                    <div class="pt-4">

                        <div class="row">
                            <div class="col-6">
                                <h5 class="font-size-15">125</h5>
                                <p class="text-muted mb-0">Projects</p>
                            </div>
                            <div class="col-6">
                                <h5 class="font-size-15">$1245</h5>
                                <p class="text-muted mb-0">Revenue</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a class="btn btn-primary waves-effect waves-light btn-sm" href="javascript: void(0);">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

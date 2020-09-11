@extends('layouts.app')

@section('content')
    <div class="row">
    <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                <a href="{{route('users.index')}}">
                <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total User</h5>
                            <span class="h2 font-weight-bold mb-0">{{$usercount}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-user"></i></span>
                        <span class="text-nowrap"></span>
                    </p>
                </a>
                </div>
            </div>
        </div>



    <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                <a href="{{route('hospitals.index')}}">
                <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Hospital</h5>
                            <span class="h2 font-weight-bold mb-0">{{$hospitalcount}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fas fa-hospital-alt"></i></span>
                        <span class="text-nowrap"></span>
                    </p>
                </a>
                </div>
            </div>
        </div>
    <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                <a href="{{route('roles.index')}}">
                <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Roles</h5>
                            <span class="h2 font-weight-bold mb-0">{{$rolecount}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-user"></i></span>
                        <span class="text-nowrap"></span>
                    </p>
                </a>
                </div>
            </div>
        </div>
    <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                <a href="{{route('permissions.index')}}">
                <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Permissions</h5>
                            <span class="h2 font-weight-bold mb-0">{{$permissioncount}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-user"></i></span>
                        <span class="text-nowrap"></span>
                    </p>
                </a>
                </div>
            </div>
        </div>
    <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                <a href="{{route('hospitals.index')}}">
                <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total User</h5>
                            <span class="h2 font-weight-bold mb-0">{{$usercount}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-user"></i></span>
                        <span class="text-nowrap"></span>
                    </p>
                </a>
                </div>
            </div>
        </div>
    <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                <a href="{{route('hospitals.index')}}">
                <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total User</h5>
                            <span class="h2 font-weight-bold mb-0">{{$usercount}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-user"></i></span>
                        <span class="text-nowrap"></span>
                    </p>
                </a>
                </div>
            </div>
        </div>
    <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                <a href="{{route('hospitals.index')}}">
                <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total User</h5>
                            <span class="h2 font-weight-bold mb-0">{{$usercount}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-user"></i></span>
                        <span class="text-nowrap"></span>
                    </p>
                </a>
                </div>
            </div>
        </div>
    <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                <a href="{{route('hospitals.index')}}">
                <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total User</h5>
                            <span class="h2 font-weight-bold mb-0">{{$usercount}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-user"></i></span>
                        <span class="text-nowrap"></span>
                    </p>
                </a>
                </div>
            </div>
        </div>
    <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                <a href="{{route('hospitals.index')}}">
                <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total User</h5>
                            <span class="h2 font-weight-bold mb-0">{{$usercount}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-user"></i></span>
                        <span class="text-nowrap"></span>
                    </p>
                </a>
                </div>
            </div>
        </div>
    <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                <a href="{{route('hospitals.index')}}">
                <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total User</h5>
                            <span class="h2 font-weight-bold mb-0">{{$usercount}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-user"></i></span>
                        <span class="text-nowrap"></span>
                    </p>
                </a>
                </div>
            </div>
        </div>
    <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                <a href="{{route('hospitals.index')}}">
                <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total User</h5>
                            <span class="h2 font-weight-bold mb-0">{{$usercount}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-user"></i></span>
                        <span class="text-nowrap"></span>
                    </p>
                </a>
                </div>
            </div>
        </div>
    <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                <a href="{{route('hospitals.index')}}">
                <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total User</h5>
                            <span class="h2 font-weight-bold mb-0">{{$usercount}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-user"></i></span>
                        <span class="text-nowrap"></span>
                    </p>
                </a>
                </div>
            </div>
</div>
        @endsection

@extends('layouts.app')
@push('pg_btn')
@section('content')
@can('create-seat')
<a href="{{ route('seats.create') }}" class="btn btn-sm btn-neutral">Create New seat</a>
@endpush
@endcan
<div class="row">

@foreach ($seats as $seat)
<div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                <a href="{{route('users.index')}}">
                <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">seat</h5>
                            <span class="h2 font-weight-bold mb-0">{{$seat->seat_quantity}}</span>
                                    <form>
                                        <a
                                            class="{{$seat->status == 1 ? 'btn btn-danger' : 'btn btn-primary' }}"
                                            href="{{ route('seats.edit',$seat->id) }}">

                                            <i class="fas fa-edit"></i>
                                            <span> {{$seat->status == 1 ? 'Booked' : 'Available' }} </span>
                                        </a>


                                    </form>
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
        </div> @endforeach
</div>
 {!! $seats->links() !!}
 @endsection

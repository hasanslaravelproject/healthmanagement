@extends('layouts.app')
@push('pg_btn')
@can('create-permissions')
    <a href="{{ route('permissions.create') }}" class="btn btn-sm btn-neutral">Create New Permission</a>
@endcan
@endpush
@section('content')
<div class="row">
    @foreach($permissions as $permission)
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <a href="{{route('permissions.index')}}">
                <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Permission ID #{{$permission->id}}</h5>
                            <span class="card-title text-uppercase text-muted mb-0"><h2> {{$permission->name}}</h2></span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                </div>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
{!! $permissions->links() !!}

@endsection

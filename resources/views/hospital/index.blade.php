@extends('layouts.app')
@push('pg_btn')
@section('content')
@can('create-hospital')
<a href="{{ route('hospitals.create') }}" class="btn btn-sm btn-neutral">Create New Hospital</a>
@endpush
@endcan
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header bg-transparent">
                <div class="row">
                    <div class="col-lg-8">
                        <h3 class="mb-0">All Hospitals</h3>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <div>
                        <table class="table table-hover align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Branch Code</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Photo</th>

                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($hospitals as $hospital)
                                <td>{{ ++$i }}</td>
                                <td>{{ $hospital->name }}</td>
                                <td>{{ $hospital->type }}</td>
                                <td>{{ $hospital->branch_code }}</td>
                                <td>{{ $hospital->address }}</td>
                                <td>{{ $hospital->contact_number }}</td>
                                <td>{{ $hospital->email }}</td>
                                <td>
                                    @if($hospital->status)
                                    <span class="badge badge-pill badge-lg badge-success">Active</span>
                                    @else
                                    <span class="badge badge-pill badge-lg badge-danger">Disabled</span>
                                    @endif
                                </td>
                                <td>{{ $hospital->created_at->diffForHumans()}}</td>
                                <td>
                                            <div class="avatar-group">
                                                @if ($hospital->profile_photo)
                                                <img alt="Image placeholder"
                                                    class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="{{$hospital->name}}"
                                                    src="{{ asset($hospital->profile_photo) }}">
                                                @else
                                                <i class="far avatar avatar-sm rounded-circle fa-user"></i>
                                                @endif
                                            </div>
                                        </td>
                                <td>
                                    <form action="{{ route('hospitals.destroy',$hospital->id) }}" method="POST">

                                        <a class="btn btn-info" href="{{ route('hospitals.show',$hospital->id) }}"><i
                                                class="fas fa-eye"></i></a>

                                        <a class="btn btn-primary" href="{{ route('hospitals.edit',$hospital->id) }}"><i
                                                class="fas fa-edit"></i></a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                                </tr>
                                @endforeach
                        </table>

                        {!! $hospitals->links() !!}

 @endsection

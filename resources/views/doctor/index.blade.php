@extends('layouts.app')
@push('pg_btn')
@section('content')
@can('create-doctor')
<a href="{{ route('doctors.create') }}" class="btn btn-sm btn-neutral">Create New docotrs</a>
@endcan
@endpush
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header bg-transparent">
                <div class="row">
                    <div class="col-lg-8">
                        <h3 class="mb-0">All docotrs</h3>
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
                                    <th scope="col">department</th>
                                    <th scope="col">hospital name</th>

                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Photo</th>

                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($doctors as $doctor)
                                <td>{{ ++$i }}</td>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->department }}</td>
                                <td>{{ $doctor->hospital_name }}</td>

                                <td>{{ $doctor->email }}</td>
                                <td>
                                    @if($doctor->status)
                                    <span class="badge badge-pill badge-lg badge-success">Active</span>
                                    @else
                                    <span class="badge badge-pill badge-lg badge-danger">Disabled</span>
                                    @endif
                                </td>
<!--                                 <td>{{ $doctor->created_at->diffForHumans()}}</td> -->
 <td>
                                            <div class="avatar-group">
                                                @if ($doctor->profile_photo)
                                                <img alt="Image placeholder"
                                                    class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="{{$doctor->name}}"
                                                    src="{{ asset($doctor->profile_photo) }}">
                                                @else
                                                <i class="far avatar avatar-sm rounded-circle fa-user"></i>
                                                @endif
                                            </div>
                                        </td>
                                <td>
                                    <form action="{{ route('doctors.destroy',$doctor->id) }}" method="POST">

                                        <a class="btn btn-info" href="{{ route('doctors.show',$doctor->id) }}"><i
                                                class="fas fa-eye"></i></a>


                                                @can('update-doctor')
                                        <a class="btn btn-primary" href="{{ route('doctors.edit',$doctor->id) }}"><i
                                                class="fas fa-edit"></i></a>
                                                @endcan

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                                </tr>
                                @endforeach
                        </table>

                        {!! $doctors->links() !!}

 @endsection

@extends('layouts.app')
@push('pg_btn')
@section('content')

<a href="{{ route('patients.create') }}" class="btn btn-sm btn-neutral">Create New patient</a>
@endpush

<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header bg-transparent">
                <div class="row">
                    <div class="col-lg-8">
                        <h3 class="mb-0">All patients</h3>
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
                                    <th scope="col">Address</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Seat No</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Photo</th>

                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($patients as $patient)
                                <td>{{ ++$i }}</td>
                                <td>{{ $patient->name }}</td>
                                <td>{{ $patient->address }}</td>
                                <td>{{ $patient->contact_number }}</td>
                                <td>{{ $patient->email }}</td>
                                <td>{{ $patient->seat_no }}</td>
                                <td>
                                    @if($patient->status)
                                    <span class="badge badge-pill badge-lg badge-success">Active</span>
                                    @else
                                    <span class="badge badge-pill badge-lg badge-danger">Disabled</span>
                                    @endif
                                </td>
                                <td>{{ $patient->created_at->diffForHumans()}}</td>
                                <td>
                                            <div class="avatar-group">
                                                @if ($patient->profile_photo)
                                                <img alt="Image placeholder"
                                                    class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="{{$patient->name}}"
                                                    src="{{ asset($patient->profile_photo) }}">
                                                @else
                                                <i class="far avatar avatar-sm rounded-circle fa-user"></i>
                                                @endif
                                            </div>
                                        </td>
                                <td>
                                    <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">

                                        <a class="btn btn-info" href="{{ route('patients.show',$patient->id) }}"><i
                                                class="fas fa-eye"></i></a>

                                        <a class="btn btn-primary" href="{{ route('patients.edit',$patient->id) }}"><i
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

                        {!! $patients->links() !!}

 @endsection

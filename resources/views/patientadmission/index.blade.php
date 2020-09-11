@extends('layouts.app')
@push('pg_btn')
@section('content')
@canany('create-patientadmission')
<a href="{{ route('patientadmissions.create') }}" class="btn btn-sm btn-neutral">Create New patientadmission</a>
@endcan
@endpush

<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header bg-transparent">
                <div class="row">
                    <div class="col-lg-8">
                        <h3 class="mb-0">All patientadmissions</h3>
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
                                    <th scope="col">case_id</th>
                                    <th scope="col">case_history</th>
                                    <th scope="col">patient_id</th>
                                    <th scope="col">reffered_by</th>
                                    <th scope="col">hospital_id</th>
                                    <th scope="col">doctor_id</th>
                                    <th scope="col">seat_id</th>
                                    <th scope="col">admitted_by</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($patientadmissions as $patientadmission)
                                <td>{{ ++$i }}</td>
                                <td>{{ $patientadmission->case_id }}</td>
                                <td>{{ $patientadmission->case_history }}</td>
                                <td>{{ $patientadmission->patient_id }}</td>
                                <td>{{ $patientadmission->reffered_by }}</td>
                                <td>{{ $patientadmission->hospital_id }}</td>
                                <td>{{ $patientadmission->doctor_id }}</td>
                                <td>{{ $patientadmission->seat_id }}</td>
                                <td>{{ $patientadmission->admitted_by }}</td>
                                <td>
                                    @if($patientadmission->status)
                                    <span class="badge badge-pill badge-lg badge-success">Active</span>
                                    @else
                                    <span class="badge badge-pill badge-lg badge-danger">Disabled</span>
                                    @endif
                                </td>
<!--                                 <td>{{ $patientadmission->created_at->diffForHumans()}}</td>
 -->                                <td>
                                            <div class="avatar-group">
                                                @if ($patientadmission->profile_photo)
                                                <img alt="Image placeholder"
                                                    class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="{{$patientadmission->name}}"
                                                    src="{{ asset($patientadmission->profile_photo) }}">
                                                @else
                                                <i class="far avatar avatar-sm rounded-circle fa-user"></i>
                                                @endif
                                            </div>
                                        </td>
                                <td>
                                    <form action="{{ route('patientadmissions.destroy',$patientadmission->id) }}" method="POST">

                                        <a class="btn btn-info" href="{{ route('patientadmissions.show',$patientadmission->id) }}"><i
                                                class="fas fa-eye"></i></a>

                                        <a class="btn btn-primary" href="{{ route('patientadmissions.edit',$patientadmission->id) }}"><i
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

                        {!! $patientadmissions->links() !!}

 @endsection

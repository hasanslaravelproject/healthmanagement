@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('patientadmissions.index')}}" class="btn btn-sm btn-neutral">All patientadmissions</a>
@endpush
@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('patientadmissions.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>case id</strong>
                <input type="text" name="case_id" value ={{$serials}} class="form-control" placeholder="case id">
            </div>
        </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('case_history', ' Patients Case History', ['class' => 'form-control-label']) }}
                                        {!! Form::textarea('case_history', null, ['id'=>"summernote", 'class'=> 'form-control',]) !!}
                                    </div>
                                </div>

                            </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="patient_id">patient name:</label>
                    <select name="patient_id" id="patient_id" class ="form-control">
                    @foreach($patients as $patient)
                    <option value={{$patient->id}}>{{$patient->name}}</option>
                    @endforeach
                    </select>
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="reffered_by">ref doctor:</label>
                    <select name="reffered_by" id="reffered_by" class ="form-control">
                    @foreach($doctors as $doctor)
                    <option value={{$doctor->id}}>{{$doctor->name}}</option>
                    @endforeach
                    </select>
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="hospital_id">hospital name:</label>
                    <select name="hospital_id" id="hospital_id" class ="form-control">
                    @foreach($hospitals as $hospital)
                    <option value={{$hospital->id}}>{{$hospital->name}}</option>
                    @endforeach
                    </select>
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="doctor_id">Doctor Name:</label>
                    <select name="doctor_id" id="doctor_id" class ="form-control">
                    @foreach($doctors as $doctor)
                    <option value={{$doctor->id}}>{{$doctor->name}}</option>
                    @endforeach
                    </select>
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="seat_id">seat name:</label>
                    <select name="seat_id" id="seat_id" class ="form-control">
                    @foreach($seats as $seat)
                    <option value={{$seat->id}}>{{$seat->id}}</option>
                    @endforeach
                    </select>
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>admitted By:</strong>
                <input type="text" name="admitted_by" class="form-control" placeholder="admitted By">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="status">status:</label>
                    <select name="status" id="status" class ="form-control">
                    <option value=1>active</option>
                    <option value=0>inactive</option>
                    </select>
                </div>
        </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

</form>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/summernote-bs4.min.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('assets/js/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('#summernote').summernote({
            height: 150,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]

        });
        jQuery('#uploadFile').filemanager('file');
    });
    </script>

    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script>
        jQuery(document).ready(function(){
            jQuery('#uploadFile').filemanager('file');
        })
    </script>
@endpush

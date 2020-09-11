@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('seats.index')}}" class="btn btn-sm btn-neutral">All seats</a>
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

<form action="{{ route('seats.store') }}" method="POST">
    @csrf

  <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>seat quantity:</strong>
                <input type="text" name="seat_quantity" class="form-control" placeholder="seat_quantity">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="status">status:</label>
                    <select name="status" id="status" class ="form-control">
                    <option value="1">active</option>
                    <option value="0">inactive</option>
                    </select>
                </div>
        </div>
            </div>


            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

</form>
@endsection

@push('scripts')
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script>
        jQuery(document).ready(function(){
            jQuery('#uploadFile').filemanager('file');
        })
    </script>
@endpush

@extends('company.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Hasans project</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('companys.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>type</th>
            <th>branch_code</th>
            <th>address</th>
            <th>contact_number</th>
            <th>email</th>
            <th>status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($companys as $company)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $company->name }}</td>
            <td>{{ $company->type }}</td>
            <td>{{ $company->branch_code }}</td>
            <td>{{ $company->address }}</td>
            <td>{{ $company->contact_number }}</td>
            <td>{{ $company->email }}</td>
            <td>{{ $company->status }}</td>
            <td>           
                <form action="{{ route('companys.destroy',$company->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('companys.show',$company->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('companys.edit',$company->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $companys->links() !!}
      
@endsection
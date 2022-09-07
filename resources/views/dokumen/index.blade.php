@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Laravel 9 CRUD with Image Upload Example from scratch - ItSolutionStuff.com</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('document.create') }}"> Create New Product</a>
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
        <th>File</th>
        <th>Name</th>
        <th>Details</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($documents as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>
            <a href="{{ url('images/' . $product->image) }}"> view </a>
            {{-- <img src="{{ url('images/' . $product->image) }}" width="100px"> --}}
        </td>
        <td>{{ $product->judul }}</td>
        
        <td>
            <form action="{{ route('document.destroy',$product->id) }}" method="POST">
 
                <a class="btn btn-info" href="{{ route('document.show',$product->id) }}">Show</a>
  
                <a class="btn btn-primary" href="{{ route('document.edit',$product->id) }}">Edit</a>
 
                @csrf
                @method('DELETE')
    
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $documents->links() !!}
@endsection
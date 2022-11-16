@extends('layouts.app')

@section('content')
<div class="container">
<div class="container mt-4">
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      New Category
    </div>
    <div class="card-body">
      <form name="add-category-form" id="add-category-form" method="post" action="{{url('/admin/categories')}}">
       @csrf
        <div class="form-group">
          <label for="title">Name</label>
          <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn mt-5 btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</div>
@endsection

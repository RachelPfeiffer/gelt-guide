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
      New Article
    </div>
    <div class="card-body">
      <form name="add-article-form" id="add-blog-post-form" method="post" action="{{url('/admin/articles')}}">
       @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="text">Text</label>
          <textarea name="text" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <input type="number" id="category" name="category" class="form-control" required="">
        </div>
        <button type="submit" class="btn mt-5 btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</div>
@endsection

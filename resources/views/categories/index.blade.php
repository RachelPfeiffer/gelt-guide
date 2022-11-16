@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{url('/admin/categories/create')}}" class="btn">Add New</a>
    <ul>
        @foreach($categories as $category)
        <li>{{$category->name}}</li>
        @endforeach  
    </ul>

</div>
@endsection

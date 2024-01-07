@extends('admin.layouts.master')
@section('content')
<h3>This is index page</h3>

<a href="{{route('hero.create')}}">
    <button class="btn btn-info">Create</button>
</a>
@endsection

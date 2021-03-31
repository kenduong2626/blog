@extends('master.master')
@section('title','Danh sách bài viết')
@section('content')

    @foreach($data as $row)
    <h1>{{$row->title}}</h1>
    <p>{{$row->description}}</p>
    @endforeach

@endsection

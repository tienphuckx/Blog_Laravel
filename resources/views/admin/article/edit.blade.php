@extends('layouts.admin')

@section('content')


@if (Session::has('msg'))
  <div class="alert alert-success" role="alert">
    {{Session::get('msg')}}
  </div>
@endif
  
  <form action="{{$article->id == null ? route('baiviet.store') : route('baiviet.update',$article->id)}}" method="POST">
    @csrf
   
    <input name="title" value="{{$article->title}}" />
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input name="thumbnail" value="{{$article->thumbnail}}" />
    @error('thumbnail')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <input name="shortDescription" value="{{$article->shortDescription}}" />
    @error('shortDescription')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <textarea name="content" cols="30" rows="10"  >{{$article->content}}</textarea>
    @error('content')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
  
    @if (empty($article->id))
      @method('POST')
      <input type="submit" value="Đăng Bài" />              
    @else
      @method('PUT')
      <input type="submit" value="Cập Nhật" />    
    @endif
    

  </form>




@endsection
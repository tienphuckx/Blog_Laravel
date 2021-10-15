@extends('layouts.admin')

@section('content')


@if (Session::has('msg'))
  <div class="alert alert-success" comment="alert">
    {{Session::get('msg')}}
  </div>
@endif


  
  <form action="{{$comment->id == null ? route('binhluan.store') : route('binhluan.update',$comment->id)}}" method="POST">
    @csrf
   
    
    
      <h3><b>Article Title</b> : {{$comment->article->title}}</h3>
      <h3><b>UserName</b> : {{$comment->user->userName}}</h3>

  
    <div class="form-group">
      <textarea name="content" class="form-control" cols="30" rows="10"  placeholder="Nội dung" >{{$comment->content}}</textarea>
      @error('content')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
    @if (empty($comment->id))
      @method('POST')
      <button type="submit" class="btn btn-primary">Đăng Bài </button>              
    @else
      @method('PUT')
      <button type="submit" class="btn btn-primary">Cập Nhật </button> 
    @endif
    </div>

  </form>




@endsection
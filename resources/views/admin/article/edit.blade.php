@extends('layouts.admin')

@section('content')


@if (Session::has('msg'))
  <div class="alert alert-success" role="alert">
    {{Session::get('msg')}}
  </div>
@endif


  
  <form action="{{$article->id == null ? route('baiviet.store') : route('baiviet.update',$article->id)}}" method="POST">
    @csrf
   
    <div class="form-group">
      <label for=""><p>Tiêu đề</p></label>
      <input class="form-control" name="title" value="{{$article->title}}" />
      @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for=""><p>Hình ảnh</p></label>
      <input class="form-control" name="thumbnail" value="{{$article->thumbnail}}" />
      @error('thumbnail')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>


    <div class="form-group">
      <label for="">Mô tả ngắn</label>
      <input class="form-control" name="shortDescription" value="{{$article->shortDescription}}" />
    @error('shortDescription')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <div class="form-group">
      <label for="">Nội dung bài viết</label>
      <textarea class="form-control" name="content" cols="30" rows="10"  >{{$article->content}}</textarea>
    @error('content')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    
  
    <div>
      @if (empty($article->id))
      @method('POST')
      <input class="btn btn-primary" type="submit" value="Đăng Bài" />              
    @else
      @method('PUT')
      <input class="btn btn-primary" type="submit" value="Cập Nhật" />    
    @endif
    </div>
    

  </form>




@endsection
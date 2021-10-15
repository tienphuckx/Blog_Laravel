@extends('layouts.admin')

@section('content')


@if (Session::has('msg'))
  <div class="alert alert-success" role="alert">
    {{Session::get('msg')}}
  </div>
@endif


  
  <form action="{{$article->id == null ? route('baiviet.store') : route('baiviet.update',$article->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
   
    <div class="form-group">
      <input name="title" class="form-control" placeholder="Tiêu đề" value="{{$article->title}}" />
      @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <select class="form-control" name="category_id">
        <option selected value="">Chọn thể loại</option>

        @foreach ($categories as $category)
          <option value="{{$category->id}}" @if ($article->category_id == $category->id) selected @endif>
            {{$category->name}}
          </option>
        @endforeach

      </select>
      @error('category_id')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <input type="hidden" name="thumbnail" id="thumbnail" value="{{$article->thumbnail}}" />

    <div class="form-group">
      <input name="shortDescription" class="form-control" placeholder="Mô tả ngắn" value="{{$article->shortDescription}}" />
      @error('shortDescription')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <textarea name="content" class="form-control" cols="30" rows="10"  placeholder="Nội dung" >{{$article->content}}</textarea>
      @error('content')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  
    <div class="form-group">
    @if (empty($article->id))
      @method('POST')
      <button type="submit" class="btn btn-primary">Đăng Bài </button>              
    @else
      @method('PUT')
      <button type="submit" class="btn btn-primary">Cập Nhật </button> 
    @endif
    </div>

  </form>




@endsection
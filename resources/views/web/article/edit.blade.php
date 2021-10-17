@extends('layouts.web')

@section('content')


@if (Session::has('msg'))
  <div class="alert alert-success" role="alert">
    {{Session::get('msg')}}
  </div>
@endif

<form action="{{$article->id == null ? route('post.store') : route('post.update',$article->id) }}" method="POST"  enctype="multipart/form-data">
    @csrf

    <img src="{{url('storage/'.$article->thumbnail)}}" alt="">
    <div class="form-group">
      <label >Thumbnail</label>
      <input type="file" class="form-control-file" id="thumbnail" name="thumbnail" />
      @error('thumbnail')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <input type="hidden" name="thumbnail" value="{{$article->thumbnail}}">

    <div class="form-group">
        <input name="title" class="form-control" placeholder="Tiêu đề" value="{{$article->title}}" />
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
     
    <div class="form-group">
      <label >Category</label>
      <select class="form-control" id="category_id" name="category_id">
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

    <div class="form-group">
        <textarea name="shortDescription" class="form-control" rows="5" placeholder="Mô tả ngắn">{{$article->shortDescription}}</textarea>
        @error('shortDescription')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

   

    <div class="form-group">
      <textarea name="content" id="editor" class="form-control"  placeholder="Nội dung">{{$article->content}}</textarea>
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


<script>
  ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
          console.error( error );
      } );
</script>
@endsection
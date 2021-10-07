@extends('layouts.admin')

@section('content')


@if (Session::has('msg'))
  <div class="alert alert-success" role="alert">
    {{Session::get('msg')}}
  </div>
@endif


  
  <form action="{{$role->id == null ? route('role.store') : route('role.update',$role->id)}}" method="POST">
    @csrf
   
    <div class="form-group">
      <input name="name" class="form-control" placeholder="Name" value="{{$role->name}}" />
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <input name="code" class="form-control" placeholder="Code" value="{{$role->code}}" />
      @error('code')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

  
  
    <div class="form-group">
    @if (empty($role->id))
      @method('POST')
      <button type="submit" class="btn btn-primary">Đăng Bài </button>              
    @else
      @method('PUT')
      <button type="submit" class="btn btn-primary">Cập Nhật </button> 
    @endif
    </div>

  </form>




@endsection
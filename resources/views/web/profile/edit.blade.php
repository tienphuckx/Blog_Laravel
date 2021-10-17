@extends('layouts.web')

@section('content')

<form action="{{route('profile.update',$profile->id)}}" method="POST" enctype="multipart/form-data">
@method('PUT')
@csrf

    <img src="{{url('storage/'.$profile->avatar)}}" alt="">
      <div class="form-group">
        <label >Avatar</label>
        <input type="file" class="form-control-file" id="avatar" name="avatar" />
        @error('avatar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <input type="hidden" name="avatar" value="{{$profile->avatar}}">

    <br>
    <h3>UserName :{{$profile->userName}}</h3>
    <h3>MyRole :{{$profile->role->name}}</h3>

    <div class="form-group">
        <input name="fullName" class="form-control" placeholder="FullName" value="{{$profile->fullName}}" />
        @error('fullName')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Cập Nhật </button> 
</form>
@endsection
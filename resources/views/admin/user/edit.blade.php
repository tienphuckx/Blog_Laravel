@extends('layouts.admin')

@section('content')


@if (Session::has('msg'))
  <div class="alert alert-success" role="alert">
    {{Session::get('msg')}}
  </div>
@endif


  
  <form action="{{$user->id == null ? route('nguoidung.store') : route('nguoidung.update',$user->id)}}" method="POST">
    @csrf
   

    

    <div class="form-group">
      <input name="userName" class="form-control" placeholder="Username" value="{{$user->userName}}" />
      @error('userName')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <input name="fullName" class="form-control" placeholder="FullName" value="{{$user->fullName}}" />
      @error('fullName')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <select class="form-select" name="role_id">
        <option selected value="">Chọn Role</option>

        @foreach ($roles as $role)
          <option value="{{$role->id}}" @if ($user->role_id == $role->id) selected @endif>
            {{$role->name}}
          </option>
        @endforeach

      </select>
      @error('role_id')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <select class="form-select" name="status">
        <option selected value="">Chọn Status</option>
        <option value="1" @if ($user->status == 1) selected @endif> >Hoạt động</option>
        <option value="0" @if ($user->status == 0) selected @endif>Vô hiệu</option>
    </div>

  

    <div class="form-group">
      <input name="password" type="password" class="form-control" placeholder="password" value="" />
      @error('password')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  
    <div class="form-group">
    @if (empty($user->id))
      @method('POST')
      <button type="submit" class="btn btn-primary">Thêm </button>              
    @else
      @method('PUT')
      <button type="submit" class="btn btn-primary">Cập Nhật </button> 
    @endif
    </div>

  </form>




@endsection
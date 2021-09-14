@extends('layouts.app')

@section('content')
<form action="{{route('baiviet.store')}}" method="post">
    @csrf
    <div>
        <label for="title">Tieu de :</label>
        <input type="text" name="title" />
        <div>
            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>

    <div>
        <label for="content">Noi dung :</label>
        <br>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <div>
            @error('content')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>

    <div>
        <input type="submit" value="Dang bai">
    </div>

</form>
@endsection
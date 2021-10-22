@extends('layouts.web')

@section('content')

<div class="cate">
    @foreach ($categories as $item)
       <div class="cate__item">
            <i class=""></i>
            <a href="{{route('category.show',$item->id)}}">
                <h3>{{$item->name}}</h3>
            </a>
       </div>
    @endforeach
</div>

@endsection
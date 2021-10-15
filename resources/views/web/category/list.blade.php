@extends('layouts.web')

@section('content')


@foreach ($categories as $item)
    <a href="{{route('category.show',$item->id)}}">
        <h3>{{$item->name}}</h3>
    </a><br>
@endforeach




  
@endsection
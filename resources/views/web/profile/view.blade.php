@extends('layouts.web')

@section('content')


<h1>FullName : {{$profile->fullName}}</h1>
<br>
<h3>UserName :{{$profile->userName}}</h3>
<h3>MyRole :{{$profile->role->name}}</h3>

  
@endsection
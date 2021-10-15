@extends('layouts.web')

@section('content')


<h1>{{$category->name}}</h1>
<br>

<div class="posts">
    <div class="posts-inner">

        @foreach ($articles as $item)
            <article class="post">
                <div class="post-header">
                    <h2 class="title">
                        <a href="single.html">{{$item->title}}</a>
                    </h2>

                    <!-- Post Details -->
                    <div class="post-details">
                        <div class="post-cat">
                            <a href="#">{{$item->category->name}}</a>
                        </div>
                        <a href="#" class="post-date"><span>{{$item->created_at}}</span></a>
                        
                    </div>
                    <!-- End Post Details -->
                </div>
                <div class="post-media">
                    <a href="single.html">
                        <img src="storage/{{$item->thumbnail}}" alt="Post">
                    </a>
                </div>
                <div class="post-content">

                    <!-- The Content -->
                    <div class="the-excerpt">
                        <p>{{$item->shortDescription}}</p>
                    </div>
                    <!-- End The Content -->
                </div>

                <div class="read-more">
                    <a href="{{route('post.show',$item->id)}}">Continue Reading ...</a>
                </div>


            </article>
        @endforeach

    </div>

    <!-- Pagination -->
    <div class="pagination-wrap">
        {{$articles->links()}}
    </div>
    <!-- End Pagination -->
</div>


  
@endsection
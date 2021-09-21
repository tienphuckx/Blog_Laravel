@extends('layouts.web')

@section('content')

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
                                    <a href="#">Travel</a>
                                </div>
                                <a href="#" class="post-date"><span>{{$item->created_at}}</span></a>
                                <div class="post-details-child">
                                    <a href="#" class="post-views">15 views</a>
                                    <a href="#" class="post-comments">03 Comments</a>
                                    <div class="post-share-icon">
                                        <span>SHARE</span>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                            <li><a href="#"><i class="fa fa-google"></i><span>Google Plus</span></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                                            <li><a href="#"><i class="fa fa-behance"></i><span>Behance</span></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i><span>Dribbble</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post Details -->
                        </div>
                        <div class="post-media">
                            <a href="single.html">
                                <img src="{{$item->thumbnail}}" alt="Post">
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
                            <a href="single.html">Continue Reading ...</a>
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
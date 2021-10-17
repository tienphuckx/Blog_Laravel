@extends('layouts.web')

@section('content')


@if (Session::has('msg'))
  <div class="alert alert-success" role="alert">
    {{Session::get('msg')}}
  </div>
@endif

<div class="posts">
  <div class="posts-inner">
    <article class="post">
      <div class="post-header">
        <h2 class="title"><span>{{$article->title}}</span></h2>

        <!-- Post Details -->
        <div class="post-details">
          <div class="post-cat">
            <a href="#">{{$article->category->name}}</a>
          </div>
          <a href="#" class="post-date"><span>{{$article->created_at}}</span></a>
         
        </div>
        <!-- End Post Details -->
      </div>
      <div class="post-media">
        <a href="{{url('storage/'.$article->thumbnail)}}">
          <img src="{{url('storage/'.$article->thumbnail)}}" alt="Post">
        </a>
      </div>
      <div class="post-content">

        <!-- The Content -->
        <div class="the-excerpt">
          <blockquote>
            <p> {{$article->shortDescription}}</p>
          </blockquote>
          <h3>This is content</h3>
          {!! $article->content !!}
        </div>
        <!-- End The Content -->

      
        <div class="post-author">
          Writed by  <a href="#">{{$article->user->userName}}</a>
        </div>
      </div>

    </article>
  </div>



  



  <!-- Comments -->
  <div id="comments">
    <h2 class="title"><span>{{$comments->count()}} Comment</span></h2>
    <div class="comments-inner">
      <ul class="comment-list">
       @foreach ($comments as $comment)
            <li class="comment">
              <div class="comment-body">
                <div class="comment-head">
                  <div class="comment-avatar">
                    <img alt="avatar" src="{{url('storage/'.$comment->user->avatar)}}">
                  </div>
                  <div class="comment-info">
                    <h5 class="title">{{$comment->user->userName}}</h5>
                    <span class="comment-date">{{$comment->created_at}}</span>
                  </div>
                </div>
                @if ($comment->user_id == Auth::user()->id)
                  <div class="comment-context">
                    <p>{{$comment->content}}</p>
                    <div class="reply">
                      <span class="comment-reply">
                          <a class="comment-reply-link" href="{{route('comment.destroy',$comment->id)}}" 
                            onclick="event.preventDefault();
                            document.getElementById('delete-comment-form').submit();">
                              Delete
                          </a>
                          <form action="{{route('comment.destroy',$comment->id)}}" method="POST" id="delete-comment-form" class="d-none">
                            @method('DELETE')
                            @csrf
                        </form>
                      </span>
                    </div>
                  </div>
                @endif
              </div>
              
            </li> 
       @endforeach
      </ul>
    </div>

    <!-- Respond -->
    <div id="respond" class="comment-respond">
      <h2 class="title"><span>Leave a Reply</span></h2>
      <form action="{{route('comment.store')}}" method="post" class="contact">
       @method('POST')
       @csrf
        <div class="contact-item">
          <label>Your Comment *</label>
          <textarea name="content"></textarea>
          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          <input type="hidden" name="article_id" value="{{$article->id}}">
        </div>
        @error('content')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="contact-item form-submit">
          <input name="submit" type="submit" id="submit" class="submit" value="Submit">
        </div>
      </form>
    </div><!-- #respond -->
    <!-- End Respond -->
  </div>
  <!-- End Comments -->
</div>

@endsection
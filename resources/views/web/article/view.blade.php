@extends('layouts.web')

@section('content')


@if (Session::has('msg'))
  <div class="alert alert-success" role="alert">
    {{Session::get('msg')}}
  </div>
@endif

<div class="baiviet">

      {{-- HEADER  --}}
      <div class="baiviet__header">
        <hr>
        <p class="baiviet__header-title">{{$article->title}}</p>
        
        <!-- Post Details -->
        <div class="baiviet__header-chitiet">
          <div class="chitiet-category">
            <a href="#">{{$article->category->name}}</a>
          </div>
          <a href="#" class="chitiet-date"><span>{{$article->created_at}}</span></a>
        </div>
        <!-- End Post Details -->
      </div>

      {{-- HINH ANH  --}}
      <div class="baiviet__hinhanh">
        <hr>
        <a href="{{url('storage/'.$article->thumbnail)}}">
          {{-- <img src="{{url('storage/'.$article->thumbnail)}}" alt="Post"> --}}
        </a>
        <img src="{{asset('web/images/posts/1.jpg')}}" alt="Post">
      </div>

      {{-- NOI DUNG  --}}
      <div class="baiviet__main">  
        {{-- DESC  --}}
        <p class="baiviet__mota">"{{$article->shortDescription}}"</p>
        {{-- NOI DUNG  --}}
        <p class="baiviet__noidung">{{$article->content}}</p> 
         {{-- TAC GIA       --}}
        <div class="baiviet__tacgia">
          Tác giả:  <span class="tentacgia">{{$article->user->fullName}}</span>
        </div>

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
                        <img alt="avatar" src="images/avatar-150px.jpg">
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
                                  Xóa
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
          <h2 class="title"><span>Tham gia bình loạn</span></h2>
          <form action="{{route('comment.store')}}" method="post" class="contact">
          @method('POST')
          @csrf
            <div class="contact-item">
              <label>Bình loạn ... *</label>
              <textarea name="content"></textarea>
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <input type="hidden" name="article_id" value="{{$article->id}}">
            </div>
            <div class="contact-item form-submit bg-danger">
              <input name="submit" type="submit" id="submit" class="submit" value="Submit">
            </div>
          </form>
        </div><!-- #respond -->
        <!-- End Respond -->
      </div>
      <!-- End Comments -->
</div>

@endsection
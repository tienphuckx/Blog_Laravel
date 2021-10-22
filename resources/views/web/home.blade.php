@extends('layouts.web')

@section('content')

        <div class="mb-5">
            @foreach ($articles as $item)
            <div class="baiviet bv_block">                                 
                <div class="baiviet__main">
                    <div class="row p-0 m-0">
                        <div class="thum_hinhanh col-md-4 p-0 m-0">
                            <img src="{{asset('web/images/posts/1.jpg')}}" alt="">
                        </div>
                        <div class="col-md-8 bg-success p-0 m-0">
                            {{-- TITLE  --}}
                            <p class="baiviet__header-title">{{$item->title}}</p>  
                            <!-- MOTA -->
                            <div class="baiviet__mota">
                                <p>{{$item->shortDescription}}</p>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="baiviet__header">                  
                                        
                    <!-- Post Details -->
                    <div class="baiviet__header-chitiet mt-1">
                        <div class="chitiet-category">
                            <a href="#">{{$item->category->name}}</a>
                        </div>
                        <a href="#" class="chitiet-date"><span>{{$item->created_at}}</span></a>
                       
                    </div>
                    
                    <!-- End Post Details -->
                </div>  
                <div>
                    <div class="baiviet_read">
                        <a href="{{route('post.show',$item->id)}}">Xem chi tiết</a>
                    </div>
                </div>
           
            </div>
        @endforeach

    
        <!-- Pagination -->
        <div class="pagination-wrap">
            {{$articles->links()}}
        </div>
        <!-- End Pagination -->
        </div>
   
@endsection
@extends('layouts.admin')

@section('content')





    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Danh sách bài viết</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">

                    

                  <th>
                    Tiêu đề
                  </th>

                  <th>
                    Thumbnail
                  </th>

                  <th>
                    Mô tả ngắn
                  </th>

                  <th>
                    
                  </th>


                </thead>
                <tbody>

                    @foreach($articles as $article)
                    <tr>
                        <td>
                            {{ $article->title }}
                        </td>
                        <td>
                            {{ $article->thumbnail }}
                        </td>
                        <td>
                            {{ $article->shortDescription }}
                        </td>

                        <th>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </th>
                        
                      </tr>
                    @endforeach

                    
                  

               
                  
                </tbody>
              </table>
              <div>
                {{$articles->links() }}
            </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  

@endsection

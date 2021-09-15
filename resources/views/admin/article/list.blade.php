@extends('layouts.admin')

@section('content')





    
<div class="col-xl-12 col-md-12">
  <div class="card Recent-Users">
      <div class="card-header">
          <h5>Danh sách bài viết</h5>
      </div>
      <div class="card-block px-0 py-3">
          <div class="table-responsive">
              <table class="table table-hover table-bordered">

                <thead>
                  <tr class="unread" >
                      <td>
                        <h6 class="mb-1">No.</h6>
                      </td>
                      <td>
                        <h6 class="mb-1">Tiêu đề</h6>
                      </td>
                      <td>
                          <h6 class="mb-1">Mô tả ngắn</h6>
                          
                      </td>
                      <td>
                          <h6 class="text-muted">
                            <i class="fas fa-circle text-c-green f-10 m-r-15"></i>Description</h6>
                      </td>
                      <td  class="text-right">
                        Options
                      </td>
                  </tr>                                                                    

              </thead>

                  <tbody>
                     
                      @foreach ($articles as $item)
                        <tr class="unread">
                          <td></td>
                  
                          <td>
                            {{$item->title}}
                          </td>
                          <td>
                            {{$item->shortDescription}}
                          </td>
                          <td class="text-right">
                            <a href="#!" class="label theme-bg text-white f-12">Edit</a>
                            <a href="#!" class="label text-white f-12 btn-danger">Delete</a>
                      </tr>
                      @endforeach  

                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
  

@endsection

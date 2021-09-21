@extends('layouts.back-end')
@section('content')


<!--[ Recent Users ] start-->
<div class="col-xl-12 col-md-12">
  <div class="card Recent-Users">
      <div class="card-header">
          <h5>All User</h5>
      </div>
      <div class="card-block px-0 py-3">
          <div class="table-responsive">
              <table class="table table-hover table-bordered">

                <thead>
                  <tr class="unread" >
                      <td>
                        <input type="checkbox" id="checkAll">
                      </td>
                      <td>
                        <h6 class="mb-1">Tieu de</h6>
                      </td>
                      <td>
                          <h6 class="mb-1">Mo ta ngan</h6>                       
                      </td>
                      <td>
                       Options
                      </td>
              
                  </tr>                                                                    

              </thead>

                  <tbody>
                      <tr class="unread">
                          <td>
                            <input type="checkbox" id="checkbox_{{$item->id}}" value="{{$item->id}}"  >
                          </td>
                          <td>
                            {{$item->title}}
                          </td>
                          <td>
                            {{$item->shortDescription}}
                          </td>
                          <td>
                            <a href="#!" class="label theme-bg text-white f-12">Update</a>
                            <a href="#!" class="label text-white f-12 btn-danger">Delete</a>
                          </td>
                          
                            
                      </tr>

                      

                  </tbody>
              </table>
              
          </div>
          
      </div>
  </div>
</div>
<!--[ Recent Users ] end-->

@endsection
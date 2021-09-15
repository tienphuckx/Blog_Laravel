@extends('layouts.back-end')
@section('content')



<div class="col-xl-12 col-md-12">
  <div class="card Recent-Users">
      <div class="card-header">
          <h5>All Category</h5>
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
                        {{-- <img class="rounded-circle" style="width:40px;" src="{{asset('back-end/admin')}}/images/user/avatar-1.jpg" alt="activity-user"> --}}
                        <h6 class="mb-1">Image</h6>
                      </td>
                      <td>
                          <h6 class="mb-1">Name</h6>
                          
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
                      <tr class="unread">
                          <td></td>
                          <td><img class="rounded-circle" style="width:40px;" src="{{asset('back-end/admin')}}/images/user/avatar-1.jpg" alt="activity-user"></td>
                          <td>
                              <h6 class="mb-1">Isabella Christensen</h6>
                              <p class="m-0">Lorem Ipsum is simply…</p>
                          </td>
                          <td>
                              <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>11 MAY 12:56</h6>
                          </td>
                          <td class="text-right">
                            <a href="#!" class="label theme-bg2 text-white f-12">Detail</a>
                            <a href="#!" class="label theme-bg text-white f-12">Update</a>
                            <a href="#!" class="label text-white f-12 btn-danger">Delete</a>
                      </tr>

                      <tr class="unread">
                        <td></td>
                          <td><img class="rounded-circle" style="width:40px;" src="{{asset('back-end/admin')}}/images/user/avatar-2.jpg" alt="activity-user"></td>
                          <td>
                              <h6 class="mb-1">Mathilde Andersen</h6>
                              <p class="m-0">Lorem Ipsum is simply text of…</p>
                          </td>
                          <td>
                              <h6 class="text-muted"><i class="fas fa-circle text-c-red f-10 m-r-15"></i>11 MAY 10:35</h6>
                          </td>
                          <td class="text-right">
                            <a href="#!" class="label theme-bg2 text-white f-12">Detail</a>
                            <a href="#!" class="label theme-bg text-white f-12">Update</a>
                            <a href="#!" class="label btn-danger text-white f-12">Delete</a>
                          </td>
                      </tr>

                      <tr class="unread">
                        <td></td>
                          <td><img class="rounded-circle" style="width:40px;" src="{{asset('back-end/admin')}}/images/user/avatar-3.jpg" alt="activity-user"></td>
                          <td>
                              <h6 class="mb-1">Karla Sorensen</h6>
                              <p class="m-0">Lorem Ipsum is simply…</p>
                          </td>
                          <td>
                              <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>9 MAY 17:38</h6>
                          </td>

                          <td  class="text-right">
                            <a href="#!" class="label theme-bg2 text-white f-12">Detail</a>
                            <a href="#!" class="label theme-bg text-white f-12">Update</a>
                            <a href="#!" class="label btn-danger text-white f-12">Delete</a>
                          </td>
                      </tr>

                      <tr class="unread">
                        <td></td>
                          <td><img class="rounded-circle" style="width:40px;" src="{{asset('back-end/admin')}}/images/user/avatar-1.jpg" alt="activity-user"></td>
                          <td>
                              <h6 class="mb-1">Ida Jorgensen</h6>
                              <p class="m-0">Lorem Ipsum is simply text of…</p>
                          </td>
                          <td>
                              <h6 class="text-muted f-w-300"><i class="fas fa-circle text-c-red f-10 m-r-15"></i>19 MAY 12:56</h6>
                          </td>
                          <td  class="text-right">
                            <a href="#!" class="label theme-bg2 text-white f-12">Detail</a>
                            <a href="#!" class="label theme-bg text-white f-12">Update</a>
                            <a href="#!" class="label btn-danger text-white f-12">Delete</a>
                      </tr>

                      <tr class="unread">
                        <td></td>
                          <td><img class="rounded-circle" style="width:40px;" src="{{asset('back-end/admin')}}/images/user/avatar-2.jpg" alt="activity-user"></td>
                          <td>
                              <h6 class="mb-1">Albert Andersen</h6>
                              <p class="m-0">Lorem Ipsum is simply dummy…</p>
                          </td>
                          <td>
                              <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>21 July 12:56</h6>
                          </td>
                          <td class="text-right">
                            <a href="#!" class="label theme-bg2 text-white f-12">Detail</a>
                            <a href="#!" class="label theme-bg text-white f-12">Update</a>
                            <a href="#!" class="label btn-danger text-white f-12">Delete</a>
                      </tr>

                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>


@endsection
@extends('layouts.admin')

@section('content')





@if (Session::has('msg'))
  <div class="alert alert-success" role="alert">
    {{Session::get('msg')}}
  </div>
@endif


  <div class="card-header">
    <h5>Danh sách bài viết</h5>
  <div>
  <div class="mr-auto">
    <button onclick="warningBeforeDelete()" class="btn btn-dark" >Delete</button>
  </div>

    
<div class="col-xl-12 col-md-12">

  <div class="card Recent-Users">

      <form method="POST" action="/deleteAll" id="formDelete">
        @method('DELETE')
        @csrf


      <div class="card-block px-0 py-3">
          <div class="table-responsive">
              <table class="table table-hover table-bordered">

                <thead>
                  <tr class="unread" >
                      <td>
                        <input type="checkbox" id="checkAll">
                      </td>
                      <td>
                        <h6 class="mb-1">Tiêu đề</h6>
                      </td>
                      <td>
                        <h6 class="mb-1">Mô tả ngắn</h6>
                      </td>
                      
                      <td  class="text-right">
                        Options
                      </td>
                  </tr>                                                                    

              </thead>

                  <tbody>
                     
                      @foreach ($articles as $item)
                        <tr class="unread">
                          <td>
                            <input type="checkbox" name="ids[]" id="checkbox_{{$item->id}}" value="{{$item->id}}">
                          </td>
                  
                          <td>
                            {{$item->title}}
                          </td>

                          <td>
                            {{$item->shortDescription}}
                          </td>

                          <td class="text-right">
                            <a href="{{route('baiviet.edit',$item->id)}}" class="label theme-bg text-white f-12">Edit</a>

                            <form action="{{route('baiviet.destroy',$item->id)}}" method="POST" class="label text-white f-12 btn-danger>
                              @method('DELETE')
                               @csrf
                               <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>

                          </td>
                      @endforeach  
                    </tr>
                  </tbody>
              </table>
              
          </div>
      </div>
      
      </form>
      {{$articles->links()}}

  </div>
</div>

<script>

  $("#checkAll").click(function(){
      $('input:checkbox').not(this).prop('checked', this.checked);
  });


  function warningBeforeDelete(){
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })

  swalWithBootstrapButtons.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, cancel!',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      $( "#formDelete" ).submit();
    } else if (
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire(
        'Cancelled',
      )
    }
  })
  }

  
  </script>

@endsection

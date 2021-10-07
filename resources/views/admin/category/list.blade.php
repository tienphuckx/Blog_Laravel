@extends('layouts.admin')

@section('content')





@if (Session::has('msg'))
  <div class="alert alert-success" role="alert">
    {{Session::get('msg')}}
  </div>
@endif


  <div class="card-header">
    <h5>Danh sách thể  loại</h5>
  <div>
  <div class="mr-auto">
    <button onclick="warningBeforeDelete()" class="btn btn-dark" >Delete</button>
  </div>

    
<div class="col-xl-12 col-md-12">

  <div class="card Recent-Users">

      <form method="POST" action="/deleteAllCategory" id="formDelete">
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
                        <h6 class="mb-1">Name</h6>
                      </td>
                      <td>
                        <h6 class="mb-1">Code</h6>
                      </td>
                      <td >
                        <h6 class="mb-1">Options</h6>
                      </td>
                  </tr>                                                                    
              </thead>

                  <tbody >
                      @foreach ($categories as $item)
                        <tr class="unread">
                          <td>
                            <input type="checkbox" name="ids[]" id="checkbox_{{$item->id}}" value="{{$item->id}}">
                          </td>
                          <td>
                            {{$item->name}}
                          </td>
                          <td>
                            {{$item->code}}
                          </td>
                          <td >
                          <a href="{{route('theloai.edit',$item->id)}}" class="btn btn-outline-danger">Edit</a>
                          </td>
                      @endforeach  
                    </tr>
                  </tbody>
              </table>
              
          </div>
      </div>
      
      </form>
      {{$categories->links()}}

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
    title: 'Bạn có muốn xóa',
    text: "Bạn sẽ không thể phục hồi lại",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Vâng, Xóa hết',
    cancelButtonText: 'Rời khỏi',
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

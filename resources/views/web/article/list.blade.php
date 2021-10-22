@extends('layouts.web')

@section('content')

@if (Session::has('msg'))
  <div class="alert alert-success" role="alert">
    {{Session::get('msg')}}
  </div>
@endif

  <button onclick="warningBeforeDelete()" class="btn btn-dark" >Delete</button>

  <form method="POST" action="/deleteAllPost" id="formDelete">
    @method('DELETE')
    @csrf

    <table class="table">

        <thead>
          <tr class="unread" >
              <td>
                <input type="checkbox" id="checkAll">
              </td>
              <td>
                <h6 class="mb-1">Tiêu đề</h6>
              </td>
              <td >
                <h6 class="mb-1">Options</h6>
              </td>
          </tr>                                                                    
      </thead>

      <tbody >
          @foreach ($articles as $item)
            <tr class="unread">
              <td>
                <input type="checkbox" name="ids[]" id="checkbox_{{$item->id}}" value="{{$item->id}}">
              </td>
              <td>
                <a href="{{route('post.show',$item->id)}}">{{$item->title}}</a>
              </td>
              <td >
              <a href="{{route('post.edit',$item->id)}}" class="btn btn-outline-danger">Edit</a>
              <a href="{{route('post.show',$item->id)}}" class="btn btn-outline-danger">View</a>
              </td>
          @endforeach  
        </tr>
      </tbody>
    </table>


  {{$articles->links()}}
</form>

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
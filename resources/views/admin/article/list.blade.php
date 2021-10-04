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
  
{{-- ================================================================== --}}

<form method="POST" action="/deleteAll" id="formDelete">
  @method('DELETE')
  @csrf

<div class="container">
  <div class="row">
    <table class="table table-dark" >
      <thead>
        <tr>
          <th class="col-2 text-truncate">
            <input type="checkbox" id="checkAll">
          </th>
          <th class="col-4 text-truncate" style="max-width: 100px;">TIÊU ĐỀ</th>
          <th class="col-4 text-truncate" style="max-width: 450px;">MÔ TẢ NGẮN</th>
          <th class="col-2 text-truncate"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($articles as $item)
        <tr>
          <th class="col-2">
            <input type="checkbox" name="ids[]" id="checkbox_{{$item->id}}" value="{{$item->id}}">
          </th>
          <td class="col-4 text-truncate" style="max-width: 100px;">
            {{$item->title}}
          </td>
          <td class="col-4 text-truncate" style="max-width: 450px;">
            {{$item->shortDescription}}
          </td>
          <td class="col-2 text-right" >
            <a href="{{route('baiviet.edit',$item->id)}}" class="label theme-bg text-white f-12">Edit</a>

            <form action="{{route('baiviet.destroy',$item->id)}}" method="POST" class="label text-white f-12 btn-danger>
                @method('DELETE')
                @csrf

                <button type="submit" class="btn btn-outline-danger">Delete</button>

                
            </form>
          </td>
        </tr>
        @endforeach  
      </tbody>
    </table>
  </div>
</div>
{{$articles->links()}}

</form>
{{-- =========================================================== --}}

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

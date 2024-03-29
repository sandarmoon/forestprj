@extends('backendtemplate')
@section('content')
<div class="row">
  <div class="col-sm-12 mb-4  mb-4">
    <h4 class="font-weight-bold text-dark d-inline-block">Item</h4>
    <a href="{{route('item.create')}}" class="btn btn-primary float-right">Create New Item Upload</a>
  </div>

  @if(session('msg'))
  <div class="alert alert_msg alert-success col-sm-12 mb-4 mx-auto mb-4 col-md-10">
    {{session('msg')}}
  </div>
  @endif

</div>

<div class="row mt-5">
  
    
  <div class="col-lg-10 grid-margin stretch-card mx-auto">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Item Table</h4>
        
        <div class="table-responsive">
          <table class="table" id="datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Subcategory</th>
                <th>Author</th>
                <th>Price</th>
                <th>Genre</th>
                <th>Responsive</th>
                <th>Version</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody class="index_table">
              @php
                $i=1;
              @endphp
              @foreach($items as $item)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$item->name}}</td>
                <td><img src="{{asset($item->thumbnail)}}"></td>
                <td>{{$item->subcategory->name}}</td>
                <td>{{$item->author->user->name}}</td>
                <td>@if($item->price_type == '$') ${{$item->price}} @elseif($item->price_type == 'mmk') {{$item->price}}mmk @else Free @endif</td>
                <td>{{$item->genre->name}}</td>
                <td>{{$item->responsive}}</td>
                <td>{{$item->version}}</td>
                <td>
                  <a href="{{route('item.show',$item->id)}}" class="btn btn-info btn-sm text-white"><i class="fa fa-info"></i></a>
                  <a href="{{route('item.edit',$item->id)}}" class="btn btn-warning btn-sm text-white"><i class="fa fa-edit"></i></a>
                  <form action="{{route('item.destroy',$item->id)}}" method="post" class="d-inline-block" onclick="return confirm('Are you sure to delete?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                  </form>

                </td>
              </tr>
              @endforeach
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>  
   

</div>

@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $('.alert_msg').hide(2000);

    $('#datatable').DataTable({
      "lengthMenu": [[10, 25, 50, 100, 200 , 300 , 400 , 500], [10, 25, 50, 100, 200 , 300 , 400 , 500]],
          "pageLength": 10,
          "bPaginate": true,
          "bLengthChange": true,
          "bFilter": true,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": true,
          "bStateSave": true,
          "aoColumnDefs": [
              { 'bSortable': false, 'aTargets': [ -1,0] }
          ]
        });
  })
</script>
@endsection
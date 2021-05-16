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

<div class="row">
  
    
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
                <th>Action</th>
              </tr>
            </thead>
            <tbody class="index_table">
              @php
                $i=1;
              @endphp
              @foreach($categories as $category)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->regularFee}}</td>
                <td>
                  <button class="btn btn-warning btn-sm text-white btn_edit" data-id="{{$category->id}}" data-name="{{$category->name}}" data-regularfee="{{$category->regularFee}}"><i class="fa fa-edit"></i></button>
                  <form action="{{route('category.destroy',$category->id)}}" method="post" class="d-inline-block" onclick="return confirm('Are you sure to delete?')">
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
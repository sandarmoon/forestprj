@extends('backendtemplate')
@section('content')
<div class="row adddiv">
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

@endsection
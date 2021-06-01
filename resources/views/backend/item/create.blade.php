@extends('backendtemplate')
@section('content')
<div class="row adddiv">
  <div class="col-sm-12 mb-4  mb-4">
      <h4 class="font-weight-bold text-dark">Item Upload</h4>
    </div>

    @if(session('msg'))
    <div class="alert alert_msg alert-success col-sm-12 mb-4 mx-auto mb-4 col-md-10">
      {{session('msg')}}
    </div>
    @endif
    
      <div class="col-lg-10 grid-margin stretch-card mx-auto">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Select a category for your upload:</h4>


            <div>
              <form class="forms-sample" action="{{route('itemtype')}}" method="get">
              
                  <div class="form-group">
                    <label for="exampleInputUsername1">Category</label>
                    <select name="type" class="form-control">
                      <option selected disabled>Select Category</option>
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                    <div class="form-control-feedback text-danger"> {{$errors->first('type') }} </div>

                  </div>
                 
                  <button type="submit" class="btn btn-primary mr-2">Next</button>    
              </form>
            </div>

          </div>
      </div>
      </div>
   
</div>
@endsection
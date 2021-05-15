@extends('backendtemplate')
@section('content')
<div class="row adddiv">
  <div class="col-sm-12 mb-4  mb-4">
      <h4 class="font-weight-bold text-dark">Upload an Item to {{$category->name}}</h4>
    </div>

    @if(session('msg'))
    <div class="alert alert_msg alert-success col-sm-12 mb-4 mx-auto mb-4 col-md-10">
      {{session('msg')}}
    </div>
    @endif
    
      <div class="col-lg-10 grid-margin stretch-card mx-auto">
        <div class="card">
          <div class="card-body">

            <div>
              <form class="forms-sample" action="{{route('itemtype')}}" method="post">
                @csrf
                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="name" style="font-size: 20px">Name</label>
                      </div>
                      <div class="col-6">
                        <input type="text" name="name" class="form-control" id="name">
                      </div>
                      <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>
                    </div>

                  </div>

                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="file" style="font-size: 20px">File</label>
                      </div>
                      <div class="col-6">
                        <input type="file" name="file" class="form-control-file" id="file">
                      </div>
                      <div class="form-control-feedback text-danger"> {{$errors->first('file') }} </div>
                    </div>

                  </div>

                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="thumbnail" style="font-size: 20px;">Thumbnail</label>
                      </div>
                      <div class="col-6">
                        <select name="thumbnail" class="form-control">
                          <option></option>
                        </select>
                      </div>
                    </div>
                  </div>


                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="preview" style="font-size: 20px">Preview</label>
                      </div>
                      <div class="col-6">
                        <select name="preview" class="form-control">
                          <option></option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="subcategory" style="font-size: 20px;">Subcategory</label>
                      </div>
                      <div class="col-6">
                        <select name="subcategory" class="form-control">
                          <option></option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="genre" style="font-size: 20px">Genre</label>
                      </div>
                      <div class="col-6">
                        <select name="genre" class="form-control">
                          <option></option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="version" style="font-size: 20px">Software Version</label>
                      </div>
                      <div class="col-6">
                        <input type="text" name="version" id="version" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="url" style="font-size: 20px">Demo URL</label>
                      </div>
                      <div class="col-6">
                        <input type="text" name="url" id="url" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="layout" style="font-size: 20px">Layout</label>
                      </div>
                      <div class="col-6">
                        <select name="layout" class="form-control">
                          <option></option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="tag" style="font-size: 20px">Tag</label>
                      </div>
                      <div class="col-6">
                        <textarea name="tag" class="form-control" cols="20" rows="10"></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="genre" style="font-size: 20px">Genre</label>
                      </div>
                      <div class="col-6">
                        <select name="genre" class="form-control">
                          <option></option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="genre" style="font-size: 20px">Genre</label>
                      </div>
                      <div class="col-6">
                        <select name="genre" class="form-control">
                          <option></option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="price" style="font-size: 20px">Price</label>
                      </div>
                      <div class="col-6">
                        <input type="number" name="price" id="price" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="pricetype" style="font-size: 20px">Price Type</label>
                      </div>
                      <div class="col-6">
                        <select name="pricetype" class="form-control">
                          <option></option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="message" style="font-size: 20px">Message</label>
                      </div>
                      <div class="col-6">
                        <textarea name="message" class="form-control" cols="10" rows="10"></textarea>
                      </div>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <div class="row">
                      <div class="offset-1">
                        <button type="submit" class="btn btn-primary ml-5">Submit</button> 
                      </div>
                    </div>
                  </div>   
              </form>
            </div>

          </div>
      </div>
      </div>
   
</div>
@endsection
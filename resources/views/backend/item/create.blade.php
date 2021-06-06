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
              
              <div class="form-group">
                <label for="exampleInputUsername1">Category</label>
                <select name="type" class="form-control" id="changecategory">
                  <option selected disabled>Select Category</option>
                  @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
                <div class="form-control-feedback text-danger"> {{$errors->first('type') }} </div>

              </div>
                 
             
            </div>

          </div>
      </div>
      </div>
   
</div>

<div class="row addiv m-3">
  <div class="col-sm-12 mb-4  mb-4">
    <h4 class="font-weight-bold text-dark">Upload an Item to {{$category->name}}</h4>
  </div>
    
  <div class="col-lg-10 grid-margin stretch-card mx-auto">
    <div class="card">
      <div class="card-body">

        <div>
          <form class="forms-sample" action="{{route('item.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group m-5">
              <div class="row">
                <div class="offset-1 col-2">
                  <label for="name" style="font-size: 18px">Name</label>
                </div>
                <div class="col-6">
                  <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
                  <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>
                </div>
               
              </div>

            </div>

            <div class="form-group m-5">
              <div class="row">
                <div class="offset-1 col-2">
                  <label for="file" style="font-size: 18px">File</label>
                </div>
                <div class="col-6">
                  <input type="file" name="file" class="form-control-file" id="file" accept=".zip">
                  <div class="form-control-feedback text-danger"> {{$errors->first('file') }} </div>
                </div>
              </div>

            </div>

            <div class="form-group m-5">
              <div class="row">
                <div class="offset-1 col-2">
                  <label for="thumbnail" style="font-size: 18px;">Thumbnail</label>
                </div>
                <div class="col-6">
                  <input type="file" name="thumbnail" class="form-control-file" id="thumbnail" accept=".jpg,.jpeg,.bmp,.png">
                  <div class="form-control-feedback text-danger"> {{$errors->first('thumbnail') }} </div>
                </div>
              </div>
            </div>

            <div class="form-group m-5">
              <div class="row">
                <div class="offset-1 col-2">
                  <label for="preview" style="font-size: 18px">Preview</label>
                </div>
                <div class="col-6">
                  <input type="file" name="preview" class="form-control-file" id="preview" accept=".jpg,.jpeg,.bmp,.png">
                  <div class="form-control-feedback text-danger"> {{$errors->first('preview') }} </div>
                </div>
              </div>
            </div>

            <div class="form-group m-5">
              <div class="row">
                <div class="offset-1 col-2">
                  <label for="subcategory" style="font-size: 18px;">Subcategory</label>
                </div>
                <div class="col-6">
                  <select name="subcategory" class="form-control" id="allsubcategory">
                    <option selected="" disabled="">Choose Subcategory</option>
                    @foreach($subcategories as $subcategory)
                    <option value="{{$subcategory->id}}" {{ (old("subcategory") == "$subcategory->id" ? "selected":"") }}>{{$subcategory->name}}</option>
                    @endforeach
                  </select>
                  <select id="filtersubcategory" name="subcategory" class="form-control"></select>
                  <div class="form-control-feedback text-danger"> {{$errors->first('subcategory') }} </div>
                </div>
              </div>
            </div>

            <div class="form-group m-5">
              <div class="row">
                <div class="offset-1 col-2">
                  <label for="language" style="font-size: 18px">Language</label>
                </div>
                <div class="col-6">
                  <select name="languages[]" class="js-example-placeholder-multiple1 js-states form-control" multiple="multiple">
                    @foreach($languages as $language)
                    <option value="{{$language->id}}">{{$language->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group m-5">
              <div class="row">
                <div class="offset-1 col-2">
                  <label for="genre" style="font-size: 18px">Genre</label>
                </div>
                <div class="col-6">
                  <select name="genre" class="form-control">
                    <option selected disabled>Choose Genre</option>
                    @foreach($genres as $genre)
                    <option value="{{$genre->id}}" {{ (old("genre") == "$genre->id" ? "selected":"") }}>{{$genre->name}}</option>
                    @endforeach
                  </select>
                  <div class="form-control-feedback text-danger"> {{$errors->first('genre') }} </div>
                </div>
              </div>
            </div>


            <div class="form-group m-5">
              <div class="row">
                <div class="offset-1 col-2">
                  <label for="browser" style="font-size: 18px">Browser</label>
                </div>
                <div class="col-6">
                  <select name="browsers[]" class="js-example-placeholder-multiple js-states form-control" multiple="multiple">
                    @foreach($browsers as $browser)
                    <option value="{{$browser->id}}">{{$browser->name}}</option>
                    @endforeach
                  </select>

                </div>
              </div>
            </div>


            <div class="form-group m-5">
              <div class="row">
                <div class="offset-1 col-2">
                  <label for="version" style="font-size: 18px">Software Version</label>
                </div>
                <div class="col-6">
                  <input type="text" name="version" id="version" class="form-control" value="{{old('version')}}">
                  <div class="form-control-feedback text-danger"> {{$errors->first('version') }} </div>
                </div>
              </div>
            </div>

            <div class="form-group m-5">
              <div class="row">
                <div class="offset-1 col-2">
                  <label for="url" style="font-size: 18px">Demo URL</label>
                </div>
                <div class="col-6">
                  <input type="text" name="url" id="url" class="form-control" value="{{old('url')}}" placeholder="eg.https://www.facebook.com">

                  <div class="form-control-feedback text-danger"> {{$errors->first('url') }} </div>
                </div>
              </div>
            </div>

            <div class="form-group m-5">
              <div class="row">
                <div class="offset-1 col-2">
                  <label for="layout" style="font-size:18px">Responsive</label>
                </div>
                <div class="col-6">
                 
                  <input type="radio" name="responsive" value="yes" id="yes" {{ old("responsive") == 'yes' ? 'checked' : '' }}><label for="yes" style="margin-top: -3px; font-size: 15px" class="mr-5 ml-2">Yes</label>
                  <input type="radio" name="responsive" value="no" id="no" {{ old("responsive") == 'no' ? 'checked' : '' }}><label for="no" class="ml-2" style="margin-top: -3px;font-size: 15px">No</label>
                  <div class="form-control-feedback text-danger"> {{$errors->first('responsive') }} </div>
                </div>
              </div>
            </div>

            <div class="form-group m-5">
              <div class="row">
                <div class="offset-1 col-2">
                  <label for="tag" style="font-size: 18px">Tag</label>
                </div>
                <div class="col-6">
                  <textarea name="tag" class="form-control" placeholder="eg. Web, Design" cols="20" rows="10">{{old('tag')}}</textarea>
                  <div class="form-control-feedback text-danger"> {{$errors->first('tag') }} </div>
                </div>
              </div>
            </div>


            <div class="form-group m-5">
              <div class="row">
                <div class="offset-1 col-2">
                  <label for="status">Upload Type Status</label>
                </div>
                <div class="col-6">
                  <input type="radio" name="status" value="Free" id="free" {{old("status") == 'Free' ? 'checked' : ''}}><label for="free" style="margin-top: -3px; font-size: 15px" class="mr-5 ml-2">Free</label>
                  <input type="radio" name="status" value="Premium" id="premium" {{old("status") == 'Premium' ? 'checked' : ''}}><label for="premium" style="margin-top: -3px;font-size: 15px" class="mr-5 ml-2">Premium</label>
                </div>
              </div>
            </div>


            <div class="form-group m-5" id="notfree">
              <div class="row">
                <div class="offset-1 col-2">
                  <label for="pricetype" style="font-size: 18px">Price Type</label>
                </div>
                <div class="col-6">
                  <select name="pricetype" class="form-control">
                    <option selected="" disabled="">Choose Price Type:</option>
                    <option value="$" {{ (old("pricetype") == '$' ? "selected":"") }}>$</option>
                    <option value="mmk" {{ (old("pricetype") == 'mmk' ? "selected":"") }}>mmk</option>
                  </select>
                  <div class="form-control-feedback text-danger"> {{$errors->first('pricetype') }} </div>
                </div>
              </div>
            </div>

            <div class="form-group m-5" id="notfree1">
              <div class="row">
                <div class="offset-1 col-2">
                  <label for="price" style="font-size: 18px">Price</label>
                </div>
                <div class="col-6">
                  <input type="number" name="price" id="price" class="form-control" min="1" value="{{old('price')}}">
                  <div class="form-control-feedback text-danger"> {{$errors->first('price') }} </div>
                </div>
              </div>
            </div>

            <div class="form-group m-5">
              <div class="row">
                <div class="offset-1 col-2">
                  <label for="message" style="font-size: 18px">Message</label>
                </div>
                <div class="col-6">
                  <textarea name="message" class="form-control" cols="10" rows="10">{{old('message')}}</textarea>
                  <div class="form-control-feedback text-danger"> {{$errors->first('message') }} </div>
                </div>
              </div>
            </div>
               
            <div class="form-group">
              <div class="row">
                <div class="offset-1">
                  <button type="submit" class="btn btn-primary ml-5">Upload <i class="icon-cloud-upload menu-icon"></i></button> 
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

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $('#filtersubcategory').hide();
    $('#notfree').hide();
    $('#notfree1').hide();
    $('#premium').on('click',function(){
      $('#notfree').show();
      $('#notfree1').show();
    })

    $('#free').on('click',function(){
      $('#notfree').hide();
      $('#notfree1').hide();
    })

    $(".js-example-placeholder-multiple").select2({
    placeholder: "Select at least one browser"
    });

    $(".js-example-placeholder-multiple1").select2({
    placeholder: "Select at least one language"
    });

    $('#changecategory').on('change',function(){
      var categoryid = $(this).val();
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $.ajax({
              url: "{{ route('itemtype') }}",
              type:'GET',
              data: {categoryid:categoryid},
              success: function(data) {
                if(data){
                  var html='';
                  html+=`<option selected="" disabled="">Choose Subcategory</option>`;
                  $.each(data,function(i,v){
                    var old = v.id;
                    if (("old('subcategory')" == v.id)) {

                        $(this).prop("selected", "selected");
                    }
                    html+=`<option value="${v.id}">${v.name}</option>`;
                  })
                  $('#allsubcategory').hide();
                  $('#filtersubcategory').show();
                  $('#filtersubcategory').html(html);
                }
              }
                
            }); 
    })
  })
</script>
@endsection
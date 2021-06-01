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
              @if(empty($item))
                <form class="forms-sample" action="{{route('item.update',$itemid->id)}}" method="post" enctype="multipart/form-data">
              @else
                <form class="forms-sample" action="{{route('item.update',$item->id)}}" method="post" enctype="multipart/form-data">
              @endif
              
                @csrf
                @method('PUT')
                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="name" style="font-size: 18px">Name</label>
                      </div>
                      <div class="col-6">
                        @if(empty($item))
                        <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
                        @else
                        <input type="text" name="name" class="form-control" id="name" value="{{$item->name}}">
                        @endif
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
                        @if(empty($item))
                          <input type="file" name="file" class="form-control-file" id="file" accept=".zip">
                        @else
                          <input type="file" name="file" class="form-control-file" id="file" accept=".zip">
                          <p class="text-danger">{{$item->zipfile}}</p>
                          <input type="hidden" name="oldfile" value="{{$item->zipfile}}">
                        @endif
                        
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
                        @if(empty($item))
                          <input type="file" name="thumbnail" id="thumbnail" accept=".jpg,.jpeg,.bmp,.png" class="form-control-file">
                        @else
                          <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <a class="nav-item nav-link active" id="nav-oldthumbnail-tab" data-toggle="tab" href="#nav-oldthumbnail" role="tab" aria-controls="nav-oldthumbnail" aria-selected="true">Old Thumbnail</a>
                              <a class="nav-item nav-link" id="nav-newthumbnail-tab" data-toggle="tab" href="#nav-newthumbnail" role="tab" aria-controls="nav-newthumbnail" aria-selected="false">New Thumbnail</a>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-oldthumbnail" role="tabpanel" aria-labelledby="nav-oldthumbnail-tab">
                              <img src="{{asset($item->thumbnail)}}" width="200px" height="200px">
                              <input type="hidden" name="oldthumbnail" class="form-control" id="oldthumbnail" accept=".jpg,.jpeg,.bmp,.png" value="{{asset($item->thumbnail)}}">
                            </div>
                            <div class="tab-pane fade" id="nav-newthumbnail" role="tabpanel" aria-labelledby="nav-newthumbnail-tab">
                              <input type="file" name="thumbnail" class="form-control-file" id="newthumbnail" accept=".jpg,.jpeg,.bmp,.png">
                            </div>
                          </div>
                        @endif
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
                        @if(empty($item))
                          <input type="file" name="preview" class="form-control-file" id="preview" accept=".jpg,.jpeg,.bmp,.png">
                        @else
                          <nav>
                            <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                              <a class="nav-item nav-link active" id="nav-oldpreview-tab" data-toggle="tab" href="#nav-oldpreview" role="tab" aria-controls="nav-oldpreview" aria-selected="true">Old Preview</a>
                              <a class="nav-item nav-link" id="nav-newpreview-tab" data-toggle="tab" href="#nav-newpreview" role="tab" aria-controls="nav-newpreview" aria-selected="false">New Preview</a>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent1">
                            <div class="tab-pane fade show active" id="nav-oldpreview" role="tabpanel" aria-labelledby="nav-oldpreview-tab">
                              <img src="{{asset($item->previews)}}" width="200px" height="200px">
                              <input type="hidden" name="oldpreview" class="form-control-file" id="oldpreview" accept=".jpg,.jpeg,.bmp,.png" value="{{asset($item->previews)}}">
                            </div>
                            <div class="tab-pane fade" id="nav-newpreview" role="tabpanel" aria-labelledby="nav-newpreview-tab">
                              <input type="file" name="preview" class="form-control-file" id="newpreview" accept=".jpg,.jpeg,.bmp,.png">
                            </div>
                          </div>
                        @endif
                        
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
                        <select name="subcategory" class="form-control">
                          <option selected="" disabled="">Choose Subcategory</option>
                          @if(empty($item))
                            @foreach($subcategories as $subcategory)
                            <option value="{{$subcategory->id}}" {{ (old("subcategory") == "$subcategory->id" ? "selected":"") }}>{{$subcategory->name}}</option>
                            @endforeach
                          @else
                            @foreach($subcategories as $subcategory)
                            <option value="{{$subcategory->id}}" {{ ($item->subcategory_id == "$subcategory->id" ? "selected":"") }}>{{$subcategory->name}}</option>
                            @endforeach
                          @endif
                        </select>
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
                          <option value="{{$language->id}}" @foreach($item->languages as $lang) <?php if($language->id == $lang->id) { ?> selected <?php };?> @endforeach>{{$language->name}}</option>
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
                          @if(empty($item))
                            @foreach($genres as $genre)
                              <option value="{{$genre->id}}" {{ (old("genre") == "$genre->id" ? "selected":"") }}>{{$genre->name}}</option>
                            @endforeach
                          @else
                            @foreach($genres as $genre)
                              <option value="{{$genre->id}}" {{ ($item->genre_id == "$genre->id" ? "selected":"") }}>{{$genre->name}}</option>
                            @endforeach
                          @endif
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
                          <option value="{{$browser->id}}" @foreach($item->browsers as $brow) <?php if($browser->id == $brow->id) { ?> selected <?php };?> @endforeach>{{$browser->name}}</option>
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
                        @if(empty($item))
                          <input type="text" name="version" id="version" class="form-control" value="{{old('version')}}">
                        @else
                          <input type="text" name="version" id="version" class="form-control" value="{{$item->version}}">
                        @endif
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
                        @if(empty($item))
                          <input type="text" name="url" id="url" class="form-control" value="{{old('url')}}" placeholder="eg.https://www.facebook.com">
                        @else
                          <input type="text" name="url" id="url" class="form-control" value="{{$item->demoUrl}}" placeholder="eg.https://www.facebook.com">
                        @endif
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
                        @if(empty($item))
                          <input type="radio" name="responsive" value="yes" id="yes" {{ old("responsive") == 'yes' ? 'checked' : '' }}><label for="yes" style="margin-top: -3px; font-size: 15px" class="mr-5 ml-2">Yes</label>
                          <input type="radio" name="responsive" value="no" id="no" {{ old("responsive") == 'no' ? 'checked' : '' }}><label for="no" class="ml-2" style="margin-top: -3px;font-size: 15px">No</label>
                        @else
                          <input type="radio" name="responsive" value="yes" id="yes" {{ $item->responsive == 'yes' ? 'checked' : '' }}><label for="yes" style="margin-top: -3px; font-size: 15px" class="mr-5 ml-2">Yes</label>
                          <input type="radio" name="responsive" value="no" id="no" {{ $item->responsive == 'no' ? 'checked' : '' }}><label for="no" class="ml-2" style="margin-top: -3px;font-size: 15px">No</label>
                        @endif
                        
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
                        @if(empty($item))
                          <textarea name="tag" class="form-control" cols="20" rows="10">{{old('tag')}}</textarea>
                        @else
                          <textarea name="tag" class="form-control" cols="20" rows="10">{{$item->tag}}</textarea>
                        @endif
                        
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
                        @if(empty($item))
                          <input type="radio" name="status" value="Free" id="free" {{old("status") == 'Free' ? 'checked' : ''}}><label for="free" style="margin-top: -3px; font-size: 15px" class="mr-5 ml-2">Free</label>
                          <input type="radio" name="status" value="Premium" id="premium" {{old("status") == 'Premium' ? 'checked' : ''}}><label for="premium" style="margin-top: -3px;font-size: 15px" class="mr-5 ml-2">Premium</label>
                        @else
                          <input type="radio" name="status" value="Free" id="free" {{$item->status == 'Free' ? 'checked' : ''}}><label for="free" style="margin-top: -3px; font-size: 15px" class="mr-5 ml-2">Free</label>
                          <input type="radio" name="status" value="Premium" id="premium" {{$item->status == 'Premium' ? 'checked' : ''}}><label for="premium" style="margin-top: -3px;font-size: 15px" class="mr-5 ml-2">Premium</label>
                        @endif
                        
                      </div>
                    </div>
                  </div>

                  @if(empty($item))
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
                  @else
                    @if($item->status == 'Free')
                    @else
                      <div class="form-group m-5" id="notfree2">
                        <div class="row">
                          <div class="offset-1 col-2">
                            <label for="pricetype" style="font-size: 18px">Price Type</label>
                          </div>
                          <div class="col-6">
                            <select name="pricetype" class="form-control">
                              <option selected="" disabled="">Choose Price Type:</option>
                              <option value="$" {{ ($item->price_type == '$' ? "selected":"") }}>$</option>
                              <option value="mmk" {{ ($item->price_type == 'mmk' ? "selected":"") }}>mmk</option>
                            </select>
                            <div class="form-control-feedback text-danger"> {{$errors->first('pricetype') }} </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group m-5" id="notfree3">
                        <div class="row">
                          <div class="offset-1 col-2">
                            <label for="price" style="font-size: 18px">Price</label>
                          </div>
                          <div class="col-6">
                            <input type="number" name="price" id="price" class="form-control" min="1" value="{{$item->price}}">
                            <div class="form-control-feedback text-danger"> {{$errors->first('price') }} </div>
                          </div>
                        </div>
                      </div>
                    @endif
                  @endif
            

                  <div class="form-group m-5">
                    <div class="row">
                      <div class="offset-1 col-2">
                        <label for="message" style="font-size: 18px">Message</label>
                      </div>
                      <div class="col-6">
                        @if(empty($item))
                          <textarea name="message" class="form-control" cols="10" rows="10">{{old('message')}}</textarea>
                        @else
                          <textarea name="message" class="form-control" cols="10" rows="10">{{$item->message}}</textarea>
                        @endif
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
    $('#notfree').hide();
    $('#notfree1').hide();
    $('#premium').on('click',function(){
      $('#notfree').show();
      $('#notfree1').show();
    })

    $('#free').on('click',function(){
      $('#notfree').hide();
      $('#notfree2').hide();
      $('#notfree3').hide();
      $('#notfree1').hide();
    })

    $(".js-example-placeholder-multiple").select2({
    placeholder: "Select at least one browser"
    });

    $(".js-example-placeholder-multiple1").select2({
    placeholder: "Select at least one language"
    });
  })
</script>
@endsection
@extends('backendtemplate')
@section('content')


{{-- create div --}}
<div class="row adddiv">
	<div class="col-sm-12 mb-4  mb-4">
      <h4 class="font-weight-bold text-dark">Country</h4>
    </div>

   	@if(session('msg'))
    <div class="alert alert_msg alert-success col-sm-12 mb-4 mx-auto mb-4 col-md-10">
    	{{session('msg')}}
    </div>
    @endif
    
    	<div class="col-lg-10 grid-margin stretch-card mx-auto">
		  	<div class="card">
			    <div class="card-body">
			      <h4 class="card-title">Create New</h4>


			      <div>
			      	<form class="forms-sample" action="{{route('country.store')}}" method="post" enctype="multipart/form-data">
			      		@csrf
	                    <div class="form-group">
	                      <label for="exampleInputUsername1">Name</label>
	                      <input type="text" class="form-control" id="exampleInputUsername1" name="name" placeholder="Country name " value="{{old('name')}}">
                    		<div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>

	                    </div>

	                    <div class="form-group">
	                      <label>Logo</label>
	                      <input type="file" name="logo" class="file-upload-default">
	                      <div class="input-group col-xs-12">
	                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
	                        <span class="input-group-append">
	                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
	                        </span>
	                      </div>
	                    </div>
	                    
	                   
	                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
	                   
	                  </form>
			      </div>

			  	</div>
			</div>
    	</div>
   
</div>

{{-- edit div --}}
<div class="row editdiv">
	
    	<div class="col-lg-10 grid-margin stretch-card mx-auto">
		  	<div class="card">
			    <div class="card-body">
			      <h4 class="card-title">Edit Existing data</h4>
			      <div>
			      	<form enctype="multipart/form-data" id="country_update">
			      		<input type="hidden" name="id" class="edit_id">
			      		<input type="hidden" name="oldphoto" class="oldlogovalue">
	                    <div class="form-group form-group-name">
	                      <label for="exampleInputUsername1">Name</label>
	                      <input type="text" class="form-control edit_name" id="exampleInputUsername1" name="name" placeholder="Category name " value="{{old('name')}}">
                    		<span class="show-error text-danger"></span>
                    		

	                    </div>
	                    <div class="form-group">
	                    	<label>Logo</label>
	                    	<nav>
							  <div class="nav nav-tabs" id="nav-tab" role="tablist">
							    <button class="nav-link active btn_old" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Old Logo</button>

							    <button class="nav-link btn_new" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">New Logo</button>
							    
							</nav>
							<div class="tab-content" id="nav-tabContent">

							  <div class="tab-pane fade show active oldlogo" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							  	<img src="" class="oldlogo w-25 h-25 mt-2">
							  </div>

							  <div class="tab-pane fade newlogo " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							  	<input type="file" name="newlogo" class="file-upload-default newlogovalue">
			                      <div class="input-group col-xs-12 mt-2">
			                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
			                        <span class="input-group-append">
			                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
			                        </span>
			                      </div>
							  </div>
							  
							</div>
	                    	
	                    </div>
	                    
	                    <button type="button" class="btn btn-primary mr-2 btn_update">Update</button>
	                    <button type="button" class="btn btn-secondary mr-2 btn_cancel">Cancel</button>
	                </form>
	                  
			      </div>

			  	</div>
			</div>
    	</div>
   
</div>

{{-- data show --}}
<div class="row">
	
    
	<div class="col-lg-10 grid-margin stretch-card mx-auto">
	  <div class="card">
	    <div class="card-body">
	      <h4 class="card-title">Country Table</h4>
	      
	      <div class="table-responsive">
	        <table class="table" id="datatable">
	          <thead>
	            <tr>
	              <th>#</th>
	              <th>Name</th>
	              <th>Logo</th>
	              <th>Action</th>
	            </tr>
	          </thead>
	          <tbody class="index_table">
	          	@php
	          		$i=1;
	          	@endphp
	          	@foreach($countries as $country)
	            <tr>
	              <td>{{$i++}}</td>
	              <td>
	              	<img src="{{asset($country->logo)}}" class="img-fluid rounded-circle" alt="logo">
	              </td>
	              <td>{{$country->name}}</td>
	             
	              <td>
	              	<button class="btn btn-warning btn-sm text-white btn_edit" data-id="{{$country->id}}" data-name="{{$country->name}}" data-logo = "{{$country->logo}}"><i class="fa fa-edit"></i></button>
	              	<form action="{{route('country.destroy',$country->id)}}" method="post" class="d-inline-block" onclick="return confirm('Are you sure to delete?')">
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
		

		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

		$('.editdiv').hide();
		$('.adddiv').show();

		$('.btn_cancel').click(function() {
			$('.editdiv').hide(1000);
			$('.adddiv').show(1000);
		})

		$('.btn_edit').click(function(){
			var id = $(this).data('id');
			var name = $(this).data('name');
			var oldlogo = $(this).data('logo');
			$('.edit_id').val(id);
			$('.edit_name').val(name);
			$('.oldlogo').attr('src',oldlogo);
			$('.oldlogovalue').val(oldlogo);
			$('.editdiv').show(1000);
			$('.adddiv').hide(1000);

		})

		$('.btn_old').click(function(){
			$('.btn_new').removeClass('active');
			$('.btn_old').addClass('active');
			$('.newlogo').hide();
			$('.oldlogo').show();

			$('.oldlogo').addClass('active');
			$('.oldlogo').addClass('show');

			$('.newlogo').removeClass('active');
			$('.newlogo').removeClass('show');

		});

		$('.btn_new').click(function(){
			$('.btn_new').addClass('active');
			$('.btn_old').removeClass('active');
			$('.oldlogo').hide();
			$('.newlogo').show();
			$('.oldlogo').removeClass('active');
			$('.oldlogo').removeClass('show');
			$('.newlogo').addClass('active');
			$('.newlogo').addClass('show');

		});



		function showValidationErrors(name, error) {
	        var group = $(".form-group-" + name);
	        group.addClass('has-error');
	        group.find('.show-error').text(error);
	    }

	    function clearValidationError(name) {
	        console.log(name);
	        var group = $(".form-group-" + name);
	        group.removeClass('has-error');
	        group.find('.show-error').text('');
	    }

	 // $('#post_pone_insert').submit(function(event){
     //            event.preventDefault();
     //            var postpone_data = new FormData(this);
     //        }

	    $('.btn_update').click(function(){
	    	var id = $('.edit_id').val();
	    	var name = $('.edit_name').val();
	    	var oldlogo = $('.oldlogovalue').val();
	    	var newlogo = $('.newlogovalue').val();
	    	var route = "{{route('country.update',':id')}}";
	    	route = route.replace(':id', id);
	    	$.ajax({
	    		url : route,
	    		type : 'PUT',
	    		data : {id:id,name:name,oldlogo,newlogo},
	    		success: function(data){
                    if(data){
                        // location.reload();
                    }
                },
                error: function(error) {
                    if(error.status == 422){
                        var errors = error.responseJSON;
                        var data = errors.errors;
            			console.log(data);
                        $.each(data,function(i,v){
                            showValidationErrors(i,v);
                        })
                        $('.editdiv').show();
						$('.adddiv').hide();
                       
                    }
          
                }
	    	})
	    })
	})
</script>
@endsection

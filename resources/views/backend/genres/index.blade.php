@extends('backendtemplate')
@section('content')


{{-- create div --}}
<div class="row adddiv">
	<div class="col-sm-12 mb-4  mb-4">
      <h4 class="font-weight-bold text-dark">Geners</h4>
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
			      	<form class="forms-sample" action="{{route('genres.store')}}" method="post">
			      		@csrf
	                    <div class="form-group">
	                      <label for="exampleInputUsername1">Name</label>
	                      <input type="text" class="form-control" id="exampleInputUsername1" name="name" placeholder="Geners name " value="{{old('name')}}">
                    		<div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>

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
			      	
			      		<input type="hidden" name="id" class="edit_id">
	                    <div class="form-group form-group-name">
	                      <label for="exampleInputUsername1">Name</label>
	                      <input type="text" class="form-control edit_name" id="exampleInputUsername1" name="name" placeholder="Category name " value="{{old('name')}}">
                    		<span class="show-error text-danger"></span>
                    		

	                    </div>
	                    
	                    <button type="button" class="btn btn-primary mr-2 btn_update">Update</button>
	                    <button type="button" class="btn btn-secondary mr-2 btn_cancel">Cancel</button>
	                 
	                  
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
	      <h4 class="card-title">Browser Table</h4>
	      
	      <div class="table-responsive">
	        <table class="table" id="datatable">
	          <thead>
	            <tr>
	              <th>#</th>
	              <th>Name</th>
	              
	              <th>Action</th>
	            </tr>
	          </thead>
	          <tbody class="index_table">
	          	@php
	          		$i=1;
	          	@endphp
	          	@foreach($genres as $genre)
	            <tr>
	              <td>{{$i++}}</td>
	              <td>{{$genre->name}}</td>
	             
	              <td>
	              	<button class="btn btn-warning btn-sm text-white btn_edit" data-id="{{$genre->id}}" data-name="{{$genre->name}}"><i class="fa fa-edit"></i></button>
	              	<form action="{{route('genres.destroy',$genre->id)}}" method="post" class="d-inline-block" onclick="return confirm('Are you sure to delete?')">
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
			$('.edit_id').val(id);
			$('.edit_name').val(name);

			$('.editdiv').show(1000);
			$('.adddiv').hide(1000);

		})


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

	    $('.btn_update').click(function(){
	    	var id = $('.edit_id').val();
	    	var regularfee = $('.edit_regularfee').val();
	    	var name = $('.edit_name').val();
	    	var route = "{{route('genres.update',':id')}}";
	    	route = route.replace(':id', id);
	    	$.ajax({
	    		url : route,
	    		type : 'PUT',
	    		data : {id:id,name:name},
	    		success: function(data){
                    if(data){
                        location.reload();
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

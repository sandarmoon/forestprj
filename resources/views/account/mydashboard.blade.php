@extends('frontendtemplate')
@section('content')
 <!-- ======= Header ======= -->
    <!-- End Header -->

   
    <main id="main">
       
        <!-- ======= Popular Section ======= -->
        <section id="team" class="team portfolio">
           
            <div class="container">

                <div class="section-title mt-5 " data-aos="zoom-out">
                    
                    <p> My dashboard</p>

                </div>

                <div class="row">
                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">

                        <button class="nav-link " id="nav-wishlist-tab" data-bs-toggle="tab" data-bs-target="#nav-wishlist" type="button" role="tab" aria-controls="nav-wishlist" aria-selected="true">Wishlist</button>

                        <button class="nav-link" id="nav-collection-tab" data-bs-toggle="tab" data-bs-target="#nav-collection" type="button" role="tab" aria-controls="nav-collection" aria-selected="false">Collection</button>

                        <button class="nav-link" id="nav-purchased-tab" data-bs-toggle="tab" data-bs-target="#nav-purchased" type="button" role="tab" aria-controls="nav-purchased" aria-selected="false">Purchased</button>

                      </div>


                    </nav>

                    
                    <div class="tab-content" id="nav-tabContent">
                       {{-- wishlist --}}
                       <div class="tab-pane fade show active" id="nav-wishlist" role="tabpanel" aria-labelledby="nav-wishlist-tab">

                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-5"></div>

                                <div class="col-md-3 my-3">
                                    <div class="input-group">
                                       
                                        <input type="text" name="" class="form-control rounded circle" placeholder="Search your wishlist">
                                      
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="row mt-3 wishlist_data">
                                
                                {{-- show wishlist data --}}
                            </div>  

                       </div>

                       {{-- collection --}}
                        <div class="tab-pane fade" id="nav-collection" role="tabpanel" aria-labelledby="nav-collection-tab">
                        
                            @if(count($collections)>0)
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                                    <a href="javascript:void(0)" class="btn custom_primary_btnColor  btn_collection_modal"> Create New Collection </a>
                                </div>
                            @else
                            <div class="row">
                                <div class="col-md-4 d-grid gap-2 mx-auto">
                                    <div class="d-grid gap-2 d-md-flex justify-content-center mt-3">
                                        <a href="javascript:void(0)" class="btn custom_primary_btnColor btn_collection_modal"> Create New Collection </a>
                                    </div>
                                </div>
                            </div>
                            
                            @endif

                            @foreach($collections as $collection)
                            <div class="row mt-3">
                                <div class="col-md-8 mx-auto ">
                                    <div class="card bg-light shadow">
                                        
                                        
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="{{route('mycollection.show',$collection->id)}}" class="img_hover" data-id = {{$collection->id}}>
                                                    @if(count($collection->items) >0 )
                                                        
                                                        @php
                                                           $data = last($collection->items);
                                                           $val = last($data);
                                                        @endphp

                                                            <img src="{{asset($val->thumbnail)}}" class="img-fluid img_hover_photo{{$collection->id}}">
                                                        
                                                    @else
                                                            <img src="{{asset('frontend/assets/plugin/folder2.jpeg')}}" class="img-fluid img_hover_photo{{$collection->id}}">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h5 class="d-inline d-inline-block">
                                                                {{$collection->title}}
                                                            </h5>
                                                        </div>
                                                        
                                                        <div class="col-md-4">
                                                            <p class="float-right justify-content-end d-inline d-inline-block">
                                                                @if(count($collection->items) >0 )
                                                               
                                                                @if(count($collection->items)>0)
                                                                    {{count($collection->items)}} 
                                                                    @if(count($collection->items)>1)
                                                                    items
                                                                    @else
                                                                    item
                                                                    @endif
                                                                @endif
                                                               
                                                                @else
                                                                0 item
                                                                @endif
                                                            </p> 
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <p>{{$collection->description}}</p>
                                                    </div>

                                                        <button class="btn btn-danger btn-sm mt-2 btn_delete" data-id = "{{$collection->id}}">
                                                        <i class="bi bi-trash-fill"></i>

                                                        </button>
                                                        
                                                        <button class="btn btn-secondary btn-sm  mt-2 dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-gear"></i>
                                                        </button>

                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <li><a class="dropdown-item btn_collection_edit" href="javascript:void(0)" data-id="{{$collection->id}}" data-name = "{{$collection->title}}" data-description = "{{$collection->description}}">
                                                                <i class="bi bi-pencil-square"></i>
                                                                Edit</a>
                                                            </li>
                                                            <li><button class="dropdown-item btn btn-success" >
                                                                <i class="bi bi-plus-circle"></i>
                                                                Add Template</button>
                                                            </li>
                                                            
                                                          </ul>
                                                       
                                             
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           

                        </div>

                        <div class="tab-pane fade" id="nav-purchased" role="tabpanel" aria-labelledby="nav-purchased-tab">...</div>
                    </div>
                </div>

                

            </div>
        </section>
        
            
        
        <!-- End Popular Section -->



        {{-- collection modal --}}

        <div class="modal fade" id="collection_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <form id="collection_store">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Collection</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              
                  
              
              <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        Name
                    </div>
                    <div class="col-md-8 form-group-name">
                        <input type="text" name="collection_name" placeholder="Colleciton name" class="form-control collection_name">
                        <span class="show-error text-danger"></span>
                    </div>
                    
                </div>

                <div class=" row mt-3">
                    <div class="col-md-4 text-center">
                        Description
                    </div>
                    <div class="col-md-8 form-group-description">
                        <textarea name="collection_description" placeholder="Description" class="form-control collection_description"></textarea>
                        <span class="show-error text-danger"></span>
                    </div>
                    
                </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn custom_primary_btnColor btn_save">Save</button>
              </div>
            </div>
            </form>
          </div>
        </div>



        {{-- collection edit modal --}}

        <div class="modal fade" id="update_collection_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <form id="collection_update">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update your Collection</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <input type="hidden" name="id" class="edit_collection_id">
              
                  
              
              <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        Name
                    </div>
                    <div class="col-md-8 form-group-name">
                        <input type="text" name="collection_name" placeholder="Colleciton name" class="form-control collection_name edit_collection_name">
                        <span class="show-error text-danger"></span>
                    </div>
                    
                </div>

                <div class=" row mt-3">
                    <div class="col-md-4 text-center">
                        Description
                    </div>
                    <div class="col-md-8 form-group-description">
                        <textarea name="collection_description" placeholder="Description" class="form-control collection_description edit_collection_description"></textarea>
                        <span class="show-error text-danger"></span>
                    </div>
                    
                </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" style="" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn custom_primary_btnColor btn_update">Update</button>
              </div>
            </div>
            </form>
          </div>
        </div>


    </main><!-- End #main -->
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function(){

        showdata();
        showtab();

        $('button[data-bs-toggle="tab"]').click(function (e) {
            
            e.preventDefault();
            $(this).tab('show');
        });

        $('button[data-bs-toggle="tab"]').on("shown.bs.tab", function (e) {
            var id = $(e.target).attr("id");
            localStorage.setItem('selectedTab', id);
        });

        var selectedTab = localStorage.getItem('selectedTab');
       
        if (selectedTab) {
            $('#' + selectedTab).tab('show');    
            if(selectedTab == "nav-wishlist-tab"){
                data = 1;
                showtab(data);
            }else if(selectedTab == "nav-collection-tab"){
                data = 2;
                showtab(data);

            }else{
                data = 3;
                showtab(data);

            }
        }


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        
        var html = '';
        var price = '';
        var user_id = {{Auth::id()}};
        
        function showdata(){

        $.get('getwishlist',function(v){
            console.log(v);
           
         if(v){
            $.each(v,function(i,v){
                if(v.item.status == "Free"){
                    price = "Free"
                }else{
                    price = v.item.price + v.item.price_type;
                }
            
               html += `<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    <img src="${v.item.thumbnail}" class="img-fluid websiteImg" alt="">
                                    <div class="social">
                                        <a href="${v.item.demoUrl}" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview" target="_blank">
                                            <i class='bx bx-laptop' ></i>
                                        </a>
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist" class="btn_heart" data-item_id = '${v.item.id}' data-id = "${v.id}">
                                            
                                            <i class="bi bi-heart-fill heart_1 text-danger"

                                            ></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <a href="template.html"> <h4> ${v.item.name}</h4> </a>
                                    <span>
                                        By <a href="" class="mulish_bold"> ${v.item.author.user.name}} </a>
                                        in <a href="" class="mulish_bold"> ${v.item.subcategory.name} </a>
                                    </span>
                                    <div class="my-2">
                                        <p class="d-inline-block fst-normal"> <i class='bx bxs-download' ></i> 1,000  </p>
                                        <p class="d-inline-block float-end text-danger fw-bold mulish_bold"> 
                                        ${price}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>`;
                })

                $('.wishlist_data').html(html);
            }else{
                $('.wishlist_data').html('');
            }
           })
        }
        

        function showtab(data){
           if(!data){
            var tab = {{$tab}};
           }else{
            tab = data;
           }

            if(tab == 1){
                $('#nav-wishlist-tab').addClass('active show');
                $('#nav-wishlist').addClass('active show');

                $('#nav-collection-tab').removeClass('active show');
                $('#nav-collection').removeClass('active show');

                $('#nav-purchased-tab').removeClass('active show');
                $('#nav-purchased').removeClass('active show');

            }else if(tab == 2){

                $('#nav-collection-tab').addClass('active show');
                $('#nav-collection').addClass('active show');

                $('#nav-wishlist-tab').removeClass('active show');
                $('#nav-wishlist').removeClass('active show');

                $('#nav-purchased-tab').removeClass('active show');
                $('#nav-purchased').removeClass('active show');
            }else{

                $('#nav-purchased-tab').addClass('active show');
                $('#nav-purchased').addClass('active show');

                $('#nav-collection-tab').removeClass('active show');
                $('#nav-collection').removeClass('active show');

                $('#nav-wishlist-tab').removeClass('active show');
                $('#nav-wishlist').removeClass('active show');

                
            }

        }

        $('.btn_collection_modal').click(function(){
            $('#collection_modal').modal('show');
        });


        function showValidationErrors(name, error) {
            var group = $(".form-group-" + name);
            group.addClass('has-error');
            group.find('.show-error').text(error);
        };

        function clearValidationError(name) {
            console.log(name);
            var group = $(".form-group-" + name);
            group.removeClass('has-error');
            group.find('.show-error').text('');
        };



        $('.btn_delete').click(function() {
            var id = $(this).data('id');
            var url = "{{route('mycollection.destroy',':id')}}";
            url=url.replace(':id',id);
            $.ajax({
                url : url,
                type : 'DELETE',
                data : {id:id},
                success: function(data){
                    if(data){
                        // location.reload();
                    }
                },
            })
        })

        $(".btn_save").click(function(){
            var name = $('.collection_name').val();
            var description = $('.collection_description').val();
            var route = "{{route('mycollection.store')}}";
            console.log(name,description);
            $.ajax({
                    url : route,
                    type : 'POST',
                    data : {name:name,description:description},
                    success: function(data){
                        if(data){
                           location.reload();
                           showtab(data);
                        }
                    },
                    error: function(error) {
                        if(error.status == 422){
                            var errors = error.vponseJSON;
                            var data = errors.errors;
                            console.log(data);
                            $.each(data,function(i,v){
                                showValidationErrors(i,v);
                            })
                           
                        }
              
                    }
                })
        })


        $(".btn_collection_edit").click(function(){
            var id = $(this).data('id');
            var name = $(this).data('name');
            var description = $(this).data('description');

            $('.edit_collection_id').val(id);
            $('.edit_collection_name').val(name);
            $('.edit_collection_description').html(description);

            $('#update_collection_modal').modal('show');

        })

        $('.btn_update').click(function(){
            var id = $('.edit_collection_id').val();
            var name = $('.edit_collection_name').val();
            var description = $('.edit_collection_description').val();
            route = "{{route('mycollection.update',':id')}}";
            route=route.replace(':id',id);
            $.ajax({
                url : route,
                data : {id:id,name:name,description:description},
                type : "PUT",
                success:function(res){
                    location.reload();
                    showtab(data);
                },error:function(error) {
                        if(error.status == 422){
                            var errors = error.vponseJSON;
                            var data = errors.errors;
                            console.log(data);
                            $.each(data,function(i,v){
                                showValidationErrors(i,v);
                            })
                           
                        }
              
                    }
            })
        })

        var audio = $("#mysoundclip")[0];

        $('.wishlist_data').on('click','.btn_heart',function(){

            var item_id = $(this).data('item_id');
            var id = $(this).data('id');
            
            audio.play();
            var route = "{{route('mywishlist.destroy',':id')}}";
            route=route.replace(':id',id);
            var html = '';
            $.ajax({
                url : route,
                type : 'DELETE',
                data : {item_id:item_id,id:id},
                success:function(v){
                    $.each(v,function(i,v){
                    if(v.item.status == "Free"){
                        price = "Free"
                    }else{
                        price = v.item.price + v.item.price_type;
                    }
                
                   html += `<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member-img">
                                        <img src="${v.item.thumbnail}" class="img-fluid websiteImg" alt="">
                                        <div class="social">
                                            <a href="${v.item.demoUrl}" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview" target="_blank">
                                                <i class='bx bx-laptop' ></i>
                                            </a>
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist" class="btn_heart" data-item_id = '${v.item.id}' data-id = "${v.id}">
                                                
                                                <i class="bi bi-heart-fill heart_1 text-danger"

                                                ></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <a href="template.html"> <h4> ${v.item.name}</h4> </a>
                                        <span>
                                            By <a href="" class="mulish_bold"> ${v.item.author.user.name}} </a>
                                            in <a href="" class="mulish_bold"> ${v.item.subcategory.name} </a>
                                        </span>
                                        <div class="my-2">
                                            <p class="d-inline-block fst-normal"> <i class='bx bxs-download' ></i> 1,000  </p>
                                            <p class="d-inline-block float-end text-danger fw-bold mulish_bold"> 
                                            ${price}
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>`;
                    })

                    $('.wishlist_data').html(html);
                },
                error: function(error) {
                    console.log(error);
                }
            })
            
        })

        $('.img_hover').hover(function(){
            var id = $(this).data('id');
            $('.img_hover_photo'+id).attr("style","opacity : 70%");

        });


        $('.img_hover').mouseleave(function(){
            var id = $(this).data('id');
            $('.img_hover_photo'+id).attr("style","opacity : 100%");
        });




    })

</script>
@endsection
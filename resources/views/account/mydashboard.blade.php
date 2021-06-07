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

                        <button class="nav-link active " id="nav-wishlist-tab" data-bs-toggle="tab" data-bs-target="#nav-wishlist" type="button" role="tab" aria-controls="nav-wishlist" aria-selected="true">Wishlist</button>

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
                            
                            <div class="row mt-3">

                                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                    <div class="member" data-aos="fade-up">
                                        <div class="member-img">
                                            <img src="{{asset('frontend/assets/img/website/w1.png')}}" class="img-fluid websiteImg" alt="">
                                            <div class="social">
                                                <a href="template.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                                    <i class='bx bx-laptop' ></i>
                                                </a>
                                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                                    <i class='bx bx-heart' ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="member-info">
                                            <a href="template.html"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
                                            <span>
                                                By <a href="" class="mulish_bold"> Admin </a>
                                                in <a href="" class="mulish_bold"> Education </a>
                                            </span>
                                            <div class="my-2">
                                                <p class="d-inline-block fst-normal"> <i class='bx bxs-download' ></i> 1,000  </p>
                                                <p class="d-inline-block float-end text-primary fw-bold mulish_bold"> Free  </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                                        <div class="member-img">
                                            <img src="{{asset('frontend/assets/img/website/w2.jpeg')}}" class="img-fluid websiteImg" alt="">
                                            <div class="social">
                                                <a href="template.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                                    <i class='bx bx-laptop' ></i>
                                                </a>
                                                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist" class="btn_heart" data-item_id = '1'>
                                                    <audio id="mysoundclip" preload="auto">
                                                        <source src="{{asset('frontend/assets/plugin/zapsplat_multimedia_cell_phone_smart_screen_button_press_click_feedback_003_60932.mp3')}}"></source>
                                                    </audio>
                                                    <i class="bi bi-heart-fill heart_1 
                                                    @foreach($wishlists as $wishlist)
                                                        @if($wishlist->item_id == 1 && $wishlist->user_id == Auth::id())
                                                        text-danger
                                                        @endif
                                                    @endforeach"

                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="member-info">
                                            <a href="template.html"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
                                            <span>
                                                By <a href="" class="mulish_bold"> Admin </a>
                                                in <a href="" class="mulish_bold"> Education </a>
                                            </span>
                                            <div class="my-2">
                                                <p class="d-inline-block fst-normal"> <i class='bx bxs-download' ></i> 1,000  </p>
                                                <p class="d-inline-block float-end text-danger fw-bold mulish_bold"> $39  </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                                        <div class="member-img">
                                            <img src="{{asset('frontend/assets/img/website/w3.jpeg')}}" class="img-fluid websiteImg" alt="">
                                            <div class="social">
                                                <a href="template.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                                    <i class='bx bx-laptop' ></i>
                                                </a>
                                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                                    <i class='bx bx-heart' ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="member-info">
                                            <a href="template.html"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
                                            <span>
                                                By <a href="" class="mulish_bold"> Admin </a>
                                                in <a href="" class="mulish_bold"> Education </a>
                                            </span>
                                            <div class="my-2">
                                                <p class="d-inline-block fst-normal"> <i class='bx bxs-download' ></i> 1,000  </p>
                                                <p class="d-inline-block float-end text-danger fw-bold mulish_bold"> 5,000 MMK  </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                                        <div class="member-img">
                                            <img src="{{asset('frontend/assets/img/website/w4.png')}}" class="img-fluid websiteImg" alt="">
                                            <div class="social">
                                                <a href="template.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                                    <i class='bx bx-laptop' ></i>
                                                </a>
                                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                                    <i class='bx bx-heart' ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="member-info">
                                            <a href="template.html"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
                                            <span>
                                                By <a href="" class="mulish_bold"> Admin </a>
                                                in <a href="" class="mulish_bold"> Education </a>
                                            </span>
                                            <div class="my-2">
                                                <p class="d-inline-block fst-normal"> <i class='bx bxs-download' ></i> 1,000  </p>
                                                <p class="d-inline-block float-end text-primary fw-bold mulish_bold"> Free  </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-grid gap-2 col-3 mx-auto mt-3 " data-aos="fade-up" data-aos-delay="300">
                                    <a href="#" class="custombtn_outline"> View More </a>
                                </div>
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
                                                @if(count($collection->items) >0 )
                                                    
                                                    @php
                                                       $data = last($collection->items);
                                                       $val = last($data);
                                                    @endphp
                                                        <img src="{{asset($val->thumbnail)}}" width="250px" height="190px">
                                                    
                                                @else
                                                        <img src="{{asset('frontend/assets/plugin/folder2.jpeg')}}" width="250px" height="190px">
                                                @endif
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

                                                        <button class="btn btn-secondary btn-sm  mt-2">
                                                            <i class="bi bi-gear"></i>
                                                        </button>
                                                       
                                             
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


    </main><!-- End #main -->
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var tab = {{$tab}};

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
                               
                            }
                  
                        }
                    })
        })


        var audio = $("#mysoundclip")[0];
        $('.btn_heart').click(function(){
            var item_id = $(this).data('item_id');

            audio.play();
            var route = "{{route('mywishlist.store')}}";
            $.post(route,{item_id,item_id},function(res){
                if(res == 'ok'){
                    $('.heart_1').addClass('text-danger');
                }else if(res == 'delete'){

                    $('.heart_1').removeClass('text-danger');
                    
                }
            })

            
        })
    })
</script>
@endsection
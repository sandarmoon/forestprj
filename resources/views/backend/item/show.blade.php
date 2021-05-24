@extends('backendtemplate')
@section('content')
<div class="row mt-3 mb-5">
  <div class="col-sm-12">
    <h4 class="d-inline-block">Show Detail Information</h4>
    <a href="{{route('item.index')}}" class="btn btn-primary float-right">Go Back</a>
  </div>
</div>

<div class="row" style="margin-top: 100px;">
    <div class="offset-1 col-lg-7">
        <div class="portfolio-details-slider swiper-container">
            <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                    <img src="{{asset($item->thumbnail)}}" alt="" height="400px">
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="portfolio-info" style="padding: 30px;box-shadow: 0 2.8px 2.2px rgba(0, 0, 0, 0.034),0 6.7px 5.3px rgba(0, 0, 0, 0.048), 0 12.5px 10px rgba(0, 0, 0, 0.06),0 22.3px 17.9px rgba(0, 0, 0, 0.072),0 41.8px 33.4px rgba(0, 0, 0, 0.086),0 100px 80px rgba(0, 0, 0, 0.12); background: white;border-radius: 5px;  min-height: 400px;">
            <h3 style="font-size: 22px;font-weight: 700;margin-bottom: 20px;padding-bottom: 20px;border-bottom: 1px solid #eee;">Theme Information</h3>
            <ul style="list-style: none;padding: 0;font-size: 15px;">
                <li class="d-flex justify-content-between align-items-center">
                    <strong>Template Version : </strong>
                    <span class="text-secondary" style="color: #6c757d!important;">  {{$item->version}} </span>
                </li>

                <li class="d-flex justify-content-between align-items-center">
                    <strong> Downloads : </strong>
                    <span class="text-secondary" style="color: #6c757d!important;">  33,417 </span>
                </li>
                <li class="d-flex justify-content-between align-items-center">
                    <strong>Category : </strong>
                    <a href="templates.html" style="color: #ffa681; text-decoration: none;"> {{$item->subcategory->category->name}}</a> 
                </li>
                <li class="d-flex justify-content-between align-items-center">
                    <strong>Creator : </strong> 
                    <a href="author.html" style="color: #ffa681;text-decoration: none;"> {{$item->author->user->name}} </a>  
                </li>
                <li class="d-flex justify-content-between align-items-center">
                    <strong>Layout : </strong>
                    <span class="text-secondary" style="color: #6c757d!important;"> @if($item->responsive == 'yes') Responsive @else Not Responsive @endif </span>
                </li>

                <li class="d-flex justify-content-between align-items-center">
                    <strong>Compatible Browsers : </strong>
                    <span class="text-secondary text-end" style="color: #6c757d!important;"> Firefox, Chrome, Opera, Chrome, Edge </span>
                </li>

                
                <li class="d-flex justify-content-between align-items-center">
                    <strong>Created : </strong>
                    <span class="text-secondary" style="color: #6c757d!important;"> {{date('d M,Y', strtotime($item->created_at))}}</span>
                </li>
            </ul>

            <div class="d-grid gap-2" style="display: grid !important;">
                <a href="{{asset($item->demoUrl)}}" class="custombtn_fill_sandybeach" style="display: inline-block;padding: 10px 32px;border-radius: 5px;text-decoration: none;margin-top: 6px;border: 2px solid #F9D6B6;text-align: center;background-color: #F9D6B6;color: #323232;font-size: 16px;"> 
                    <span class="align-middle">
                        <i class='bx bx-desktop' style="font-size:18px;"></i> Live Demo 
                    </span>
                </a>

            

                <!-- <button class="btn custombtn_fill" type="button"> 
                    <span class="align-middle">
                        <i class='bx bx-download' style="font-size:18px"></i> Free Download
                    </span>
                </button> -->

                
            </div>
        </div>
    </div>

</div>
        
@endsection
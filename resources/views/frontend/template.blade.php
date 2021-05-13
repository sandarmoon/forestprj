@extends('frontendtemplate')
@section('content')
<!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2> CSS Template </h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html">Freebies</a></li>
                        <li> CSS Template </li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper-container">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{asset('frontend/assets/img/website/w1.png')}}" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{asset('frontend/assets/img/website/w2.jpeg')}}" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{asset('frontend/assets/img/website/w3.jpeg')}}" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Theme Information</h3>
                            <ul>
                                <li class="d-flex justify-content-between align-items-center">
                                    <strong>Template Version : </strong>
                                    <span class="text-secondary">  1.0 </span>
                                </li>

                                <li class="d-flex justify-content-between align-items-center">
                                    <strong> Downloads : </strong>
                                    <span class="text-secondary">  33,417 </span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <strong>Category : </strong>
                                    <a href="templates.html"> Education</a> 
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <strong>Creator : </strong> 
                                    <a href="author.html"> Kyaw Kyaw </a>  
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <strong>Layout : </strong>
                                    <span class="text-secondary"> Responsive </span>
                                </li>

                                <li class="d-flex justify-content-between align-items-center">
                                    <strong>Compatible Browsers : </strong>
                                    <span class="text-secondary text-end"> Firefox, Chrome, Opera, Chrome, Edge </span>
                                </li>

                                
                                <li class="d-flex justify-content-between align-items-center">
                                    <strong>Created : </strong>
                                    <span class="text-secondary"> 01 March, 2020 </span>
                                </li>
                            </ul>

                            <div class="d-grid gap-2">
                                <button class="custombtn_fill_sandybeach" type="button"> 
                                    <span class="align-middle">
                                        <i class='bx bx-desktop' style="font-size:18px"></i> Live Demo 
                                    </span>
                                </button>

                                <button class="btn custombtn_fill" type="button"> 
                                    <span class="align-middle">
                                        <i class='bx bxs-cart' style="font-size:18px"></i> Add to Cart 
                                    </span>
                                </button>

                                <!-- <button class="btn custombtn_fill" type="button"> 
                                    <span class="align-middle">
                                        <i class='bx bx-download' style="font-size:18px"></i> Free Download
                                    </span>
                                </button> -->

                                
                            </div>
                        </div>
                    </div>

                    <div class="col-12 faq">
                        <h2> Introduction </h2>

                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

                        <p> <i class='bx bxs-check-circle position-static txt_pancho' ></i> Light and Dark version </p>
                        <p> <i class='bx bxs-check-circle position-static txt_pancho' ></i> Ready for Ghost 4.0 </p>
                        <p> <i class='bx bxs-check-circle position-static txt_pancho' ></i> Compatible with Ghost 3.25.0 or later </p>
                        <p> <i class='bx bxs-check-circle position-static txt_pancho' ></i> Clean design </p>
                        <p> <i class='bx bxs-check-circle position-static txt_pancho' ></i> Lightweight and minimal </p>
                        <p> <i class='bx bxs-check-circle position-static txt_pancho' ></i> Super fast </p>
                        <p> <i class='bx bxs-check-circle position-static txt_pancho' ></i> Fully responsive </p>
                        <p> <i class='bx bxs-check-circle position-static txt_pancho' ></i> Compatible with modern browsers </p>
                        <p> <i class='bx bxs-check-circle position-static txt_pancho' ></i> Updated regularly </p>
                        <p> <i class='bx bxs-check-circle position-static txt_pancho' ></i> Fast support</p>
                        
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main>
@endsection
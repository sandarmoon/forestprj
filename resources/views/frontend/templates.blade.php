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
                        <li><a href="{{route('frontend.index')}}">Home</a></li>
                        <li><a href="{{route('frontend.index')}}">Freebies</a></li>
                        <li> CSS Template </li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page team">
            <div class="container">
                <div class="row gy-5">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="{{asset('frontend/assets/img/website/w1.png')}}" class="img-fluid websiteImg" alt="">
                                <div class="social">
                                    <a href="{{route('frontend.template')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                        <i class='bx bx-laptop' ></i>
                                    </a>
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                        <i class='bx bx-heart' ></i>
                                    </a>
                                </div>
                            </div>
                            <div class="member-info">
                                <a href="{{route('frontend.template')}}"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
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
                                    <a href="{{route('frontend.template')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                        <i class='bx bx-laptop' ></i>
                                    </a>
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                        <i class='bx bx-heart' ></i>
                                    </a>
                                </div>
                            </div>
                            <div class="member-info">
                                <a href="{{route('frontend.template')}}"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
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
                                    <a href="{{route('frontend.template')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                        <i class='bx bx-laptop' ></i>
                                    </a>
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                        <i class='bx bx-heart' ></i>
                                    </a>
                                </div>
                            </div>
                            <div class="member-info">
                                <a href="{{route('frontend.template')}}"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
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
                                    <a href="{{route('frontend.template')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                        <i class='bx bx-laptop' ></i>
                                    </a>
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                        <i class='bx bx-heart' ></i>
                                    </a>
                                </div>
                            </div>
                            <div class="member-info">
                                <a href="{{route('frontend.template')}}"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
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
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="{{asset('frontend/assets/img/website/w1.png')}}" class="img-fluid websiteImg" alt="">
                                <div class="social">
                                    <a href="{{route('frontend.template')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                        <i class='bx bx-laptop' ></i>
                                    </a>
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                        <i class='bx bx-heart' ></i>
                                    </a>
                                </div>
                            </div>
                            <div class="member-info">
                                <a href="{{route('frontend.template')}}"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
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
                                    <a href="{{route('frontend.template')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                        <i class='bx bx-laptop' ></i>
                                    </a>
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                        <i class='bx bx-heart' ></i>
                                    </a>
                                </div>
                            </div>
                            <div class="member-info">
                                <a href="{{route('frontend.template')}}"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
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
                                    <a href="{{route('frontend.template')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                        <i class='bx bx-laptop' ></i>
                                    </a>
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                        <i class='bx bx-heart' ></i>
                                    </a>
                                </div>
                            </div>
                            <div class="member-info">
                                <a href="{{route('frontend.template')}}"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
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
                                    <a href="{{route('frontend.template')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Demo Preview">
                                        <i class='bx bx-laptop' ></i>
                                    </a>
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection">
                                        <i class='bx bx-heart' ></i>
                                    </a>
                                </div>
                            </div>
                            <div class="member-info">
                                <a href="{{route('frontend.template')}}"> <h4> GutenWP - Free Gutenberg Co...</h4> </a>
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

                    <div class="col-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i class='bx bxs-chevron-left py-1'></i>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link " href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class='bx bxs-chevron-right py-1' ></i>
                                    </a>
                                </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
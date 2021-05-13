@extends('frontendtemplate')
@section('content')
 
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

        <section class="inner-page team portfolio">
            <div class="container">
                <div class="row portfolio-container gy-3" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img">
                            <img src="{{asset('frontend/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <a class="portfolio-info portfolio-lightbox preview-link" href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" title="App 1">
                            <h4>App 1</h4>
                            <p>App</p>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img">
                            <img src="{{asset('frontend/assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox preview-link" title="Web 3">
                            <h4>Web 3</h4>
                            <p>Web</p>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img">
                            <img src="{{asset('frontend/assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link portfolio-info" title="App 2">
                            <h4>App 2</h4>
                            <p>App</p>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img">
                            <img src="{{asset('frontend/assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
                        </div>
                        
                        <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox preview-link" title="Card 2">
                            <h4>Card 2</h4>
                            <p>Card</p>
                        </a>
                    </div>

          
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img">
                            <img src="{{asset('frontend/assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox preview-link" title="Web 2">
                            <h4>Web 2</h4>
                            <p>Web</p>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img">
                            <img src="{{asset('frontend/assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox preview-link" title="App 3">
                            <h4>App 3</h4>
                            <p>App</p>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img">
                            <img src="{{asset('frontend/assets/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox preview-link" title="Card 1">
                            <h4>Card 1</h4>
                            <p>Card</p>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img">
                            <img src="{{asset('frontend/assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox preview-link" title="Card 3">
                        
                            <h4>Card 3</h4>
                            <p>Card</p>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img">
                            <img src="{{asset('frontend/assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt="">
                        </div>
                    
                        <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox preview-link" title="Web 3">
                            <h4>Web 3</h4>
                            <p>Web</p>
                      
                        </a>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
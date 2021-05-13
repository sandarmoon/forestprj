@extends('frontendtemplate')
@section('content')
<!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2> Shopping Cart </h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li> Shopping Cart </li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <div class="portfolio-info">
                            <div class="table-responsive shopping-cart ">
                                <table class="table mb-0 align-middle">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Product</th>
                                            <th class="border-top-0">Price</th>
                                            <th class="border-top-0">Quantity</th>
                                            <th class="border-top-0">Total</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{asset('frontend/assets/img/website/w1.png')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="template.html" class="d-inline-block align-middle mb-0 f_s_16 f_w_600 color_theme2">Reebok Beg</a><br>
                                                </p>
                                            </td>
                                            <td>$99</td>
                                            <td>
                                                <input class="form-control w-25" type="number" value="2" id="example-number-input1">
                                            </td>
                                            <td>$198</td>
                                            <td>
                                                <a href="" class="btn btn-outline-danger rounded-circle btn-sm">
                                                    <i class='bx bx-x bx-sm' style="line-height: normal;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('frontend/assets/img/website/w2.jpeg')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="template.html" class="d-inline-block align-middle mb-0 f_s_16 f_w_600 color_theme2">Reebok Beg</a><br>
                                                </p>
                                            </td>
                                            <td>$99</td>
                                            <td>
                                                <input class="form-control w-25" type="number" value="2" id="example-number-input1">
                                            </td>
                                            <td>$198</td>
                                            <td>
                                                <a href="" class="btn btn-outline-danger rounded-circle btn-sm">
                                                    <i class='bx bx-x bx-sm' style="line-height: normal;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3"> <span class="float-end fs-5">  Total : </span> </td>
                                            <td colspan="2"> <span class="text-danger mulish_bold"> $491.00 </span>   </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td colspan="2">
                                                <div class="d-grid gap-2">
                                                    <a href="checkout.html" class="custombtn_fill"> Checkout </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main>
@endsection
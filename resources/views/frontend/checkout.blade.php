@extends('frontendtemplate')
@section('content')
<!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2> Checkout </h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="cart.html">Shopping Cart</a></li>
                        <li> Checkout </li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5">
                        <div class="portfolio-info">
                            <div class="table-responsive shopping-cart ">
                                <table class="table mb-0 align-middle">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Product</th>
                                            <th class="border-top-0">Quantity</th>
                                            <th class="border-top-0">Total</th>
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
                                            <td>
                                                2
                                            </td>
                                            <td>$198</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('frontend/assets/img/website/w2.jpeg')}}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="template.html" class="d-inline-block align-middle mb-0 f_s_16 f_w_600 color_theme2">Reebok Beg</a><br>
                                                </p>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                            <td>$198</td>
                                        </tr>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2"> <span class="float-end fs-5">  Total : </span> </td>
                                            <td> <span class="text-danger mulish_bold"> $491.00 </span>   </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="portfolio-info contact">
                            <h3> Choose Payment Method </h3>

                            <nav class="mb-3">
                                <div class="nav nav-tabs nav-fill align-middle" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"> <i class='bx bx-credit-card-front' ></i> Credit Card</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"> <i class='bx bx-credit-card' ></i>MPU Card</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"> <i class='bx bx-transfer' ></i> Bank Transfer</button>
                              </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <form class="php-email-form row g-3">

                                        <div class="form-group col-12">
                                            <label for="name" class="form-label"> Please Select Your Card </label>
                                            <select id="inputState" class="form-select payment">
                                                <option value="visa" data-img_src="{{asset('frontend/assets/img/payment/visa.png')}}"> VISA </option>
                                                <option value="master" data-img_src="{{asset('frontend/assets/img/payment/master.png')}}"> Master </option>
                                                <option value="visa" data-img_src="{{asset('frontend/assets/img/payment/paypal.png')}}"> Paypal </option>
                                            </select>
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="name" class="form-label"> Card Holder Name </label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="e.g. Richard Bovell">
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="cardNumber" class="form-label"> Card Number </label>
                                            <input type="number" name="cardnumber" class="form-control" id="cardNumber" placeholder="1234-5678-9123-4567">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label for="name" class="form-label"> Expiry </label>
                                                <input type="text" name="name" class="form-control" id="name" placeholder="MM / YYYY ">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label for="name" class="form-label"> CVC / CVV </label>
                                                <input type="text" name="name" class="form-control" id="name" placeholder="123">
                                            </div>
                                        </div> 

                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button class="custombtn_fill" type="button"> Purchase </button>
                                        </div>                                       
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <form class="php-email-form row g-3">
                                        <div class="form-group col-12">
                                            <label for="name" class="form-label"> Please Select Your Card </label>
                                            <select id="inputState" class="form-select mpu_payment">
                                                <option value="visa" data-mpu_img_src="assets/img/payment/aya_bank.png"> AYA Bank </option>
                                                <option value="master" data-mpu_img_src="assets/img/payment/kbz_bank.png"> KBZ Bank </option>
                                                <option value="visa" data-mpu_img_src="assets/img/payment/cb_bank.png"> CB Bank </option>
                                            </select>
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="name" class="form-label"> Card Holder Name </label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="e.g. Richard Bovell">
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="cardNumber" class="form-label"> Card Number </label>
                                            <input type="number" name="cardnumber" class="form-control" id="cardNumber" placeholder="1234-5678-9123-4567">
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="name" class="form-label"> Expiry </label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="MM / YYYY ">
                                        </div>

                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button class="custombtn_fill" type="button"> Purchase </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <ul>
                                        <li> AYA Account - 
                                            <h3> 23-456-789-123-2131 </h3>
                                        </li>

                                        <li> KBZ Account - 
                                            <h3> 23-456-789-123-2131 </h3>
                                        </li>

                                        <li> CB Bank Account - 
                                            <h3> 23-456-789-123-2131 </h3>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main>
@endsection
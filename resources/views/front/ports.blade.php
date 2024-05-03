@include('front.layouts.header_link')
@include('front.layouts.header')
<!-- START SECTION BANNER -->
<section class="bg_gray breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="assets/images/breadcrumb_bg.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="heading_s2">
                    <h1>Ports</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ports</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION CHITTAGONG PORT -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-md-6 animation" data-animation="bounceInUp" data-animation-delay="0.3s">
                            <div class="about_img text-center">
                                <img style="border-radius: 15px" data-parallax='{"y": 30, "smoothness": 20}' src="{{ asset('storage/app/'.$chittagong_port->page_image) }}" alt="about_img" />
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-6 order-md-first animation" data-animation="bounceInUp" data-animation-delay="0.4s">
                            <div class="heading_s2">
                                <h2>Chittagong Port</h2>
                            </div>
                            {!! $chittagong_port->page_text !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CHITTAGONG PORT -->

<!-- START SECTION CHITTAGONG PORT -->
<section style="background-color: #0072c7">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about_wrap">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-md-6 animation" data-animation="bounceInUp" data-animation-delay="0.4s">
                            <div class="heading_s2">
                                <h2 class="text-white">Mongla Port</h2>
                            </div>
                            {!! $mongla_port->page_text !!}
                        </div>
                        <div class="col-xl-7 col-md-6 order-md-first animation" data-animation="bounceInUp" data-animation-delay="0.3s">
                            <div class="about_img text-center">
                                <img style="border-radius: 15px" data-parallax='{"y": 30, "smoothness": 20}' src="{{ asset('storage/app/'.$mongla_port->page_image) }}" alt="about_img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CHITTAGONG PORT -->

<!-- START SECTION CHITTAGONG PORT -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about_wrap">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-md-6 animation" data-animation="bounceInUp" data-animation-delay="0.3s">
                            <div class="about_img text-center">
                                <img style="border-radius: 15px" data-parallax='{"y": 30, "smoothness": 20}' src="{{ asset('storage/app/'.$payra_port->page_image) }}" alt="about_img" />
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-6 order-md-first animation" data-animation="bounceInUp" data-animation-delay="0.4s">
                            <div class="heading_s2">
                                <h2>Payra Port</h2>
                            </div>
                            {!! $payra_port->page_text !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CHITTAGONG PORT -->
@include('front.layouts.footer')
@include('front.layouts.footer_link')

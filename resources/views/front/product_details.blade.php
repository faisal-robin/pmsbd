@include('front.layouts.header_link')
@include('front.layouts.header')
<!-- START SECTION BANNER -->
<section class="bg_gray breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="assets/images/breadcrumb_bg.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="heading_s2">
                    <h1 class="text-uppercase">{{$product_info->product_main_category->category_name}} DETAILS</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$product_info->product_main_category->category_name}} Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION ABOUT US -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-md-6 animation" data-animation="bounceInUp" data-animation-delay="0.3s">
                            <div class="about_img text-center">
                                <img style="border-radius: 15px" data-parallax='{"y": 30, "smoothness": 20}' src="{{ $product_info->product_images->count() > 0  ? asset('storage/app/'.$product_info->product_images->first()->images_name) : '' }}" alt="product_img" />
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-6 order-md-first animation" data-animation="bounceInUp" data-animation-delay="0.4s">
                            <div class="heading_s2">
                                <h2>{{$product_info->name}}</h2>
                            </div>
                            {!! nl2br($product_info->description) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT US -->
@include('front.layouts.footer')
@include('front.layouts.footer_link')

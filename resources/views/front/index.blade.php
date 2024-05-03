@include('front.layouts.header_link')
@include('front.layouts.header')

<section class="banner_slider p-0">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($sliders as $key =>  $slider)
                <div style="height: 600px" class="carousel-item @if($key == 0) active @endif bg_light_green background_bg" data-img-src="{{ url('storage/app/'.$slider->slider_image) }}">
                    <div class="banner_slide_content">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 offset-xl-1 col-lg-9 offset-lg-1">
                                    <div class="banner_content banner_content_pad animation" data-animation="fadeIn" data-animation-delay="0.4s" data-parallax='{"y": 30, "smoothness": 10}'>
                                        <h2 style="font-size:45px;border-radius: 30px 150px;color: #fff;background-color: #0072c6;text-align: center;margin-bottom: 20px" class="animation" data-animation="fadeInRight" data-animation-delay="0.5s">
                                            {{$slider->slider_title}}
                                        </h2>
                                        <h2 style="font-size:40px;border-radius: 150px 30px;color: #fff;background-color: black;text-align: center" class="animation" data-animation="fadeInLeft" data-animation-delay="0.6s">
                                           {{$slider->slider_text}}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
    </div>
</section>

<section class="pt-5">
    <div class="container">
        <div class="row" style="padding-bottom: 20px">
            <div class="col-lg-12">
                <div class="heading_s2 animation text-center" data-animation="fadeInUp" data-animation-delay="0.02s">
                    <h2 class="text-uppercase">Featured Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($all_service as $service)
            <div class="col-md-4 animation" data-animation="bounceInUp" data-animation-delay="0.2s">
                <div class="banner_box box_shadow4 radius_all_10 mb-2">
                    <div>
                        <h6 class="text-center text-uppercase"><a style="font-family: 'Poppins', sans-serif" href="{{url('details/'.$service->slug)}}">{{$service->name}}</a></h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg_light_blue">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5">
                <div class="deal_img_wrap">
                    <img class="spin-img" src="{{ asset('public/front_asset/images/pms1.png') }}" alt="deal_img"/>
                </div>
                <div class="circle_bg1">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="deal_content text-center">
                    <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <h2>Place Some Text </br> Also this section</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim Nullam nunc varius.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background-color: #0072c7">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about_wrap">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-md-6 animation" data-animation="bounceInUp" data-animation-delay="0.3s">
                            <div class="about_img text-center">
                                <img style="border-radius: 15px" data-parallax='{"y": 30, "smoothness": 20}' src="{{ asset('storage/app/'.$about_us->page_image) }}" alt="about_img" />
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-6 order-md-first animation" data-animation="bounceInUp" data-animation-delay="0.4s">
                            <div class="heading_s2">
                                <h2 class="text-white text-uppercase">About Us</h2>
                            </div>
                            <span class="text-white">
                                {!! $about_us->page_text !!}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="small_pt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="text-center">
                    <div class="heading_s2 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <h2 class="text-uppercase">Our partner</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                <div class="carousel_slide5 owl-carousel owl-theme" data-margin="30" data-dots="false" data-loop="true" data-autoplay="true">
                    <div class="items">
                        <a href="#"><img src="{{ asset('storage/app/client/client-1.jpeg') }}" alt="cl_logo1"/></a>
                    </div>
                    <div class="items">
                        <a href="#"><img src="{{ asset('storage/app/client/client-2.jpeg') }}" alt="cl_logo2"/></a>
                    </div>
                    <div class="items">
                        <a href="#"><img src="{{ asset('storage/app/client/client-3.jpeg') }}" alt="cl_logo3"/></a>
                    </div>
                    <div class="items">
                        <a href="#"><img src="{{ asset('storage/app/client/client-4.jpeg') }}" alt="cl_logo4"/></a>
                    </div>
                    <div class="items">
                        <a href="#"><img src="{{ asset('storage/app/client/client-5.jpeg') }}" alt="cl_logo5"/></a>
                    </div>
                    <div class="items">
                        <a href="#"><img src="{{ asset('storage/app/client/client-6.jpeg') }}" alt="cl_logo5"/></a>
                    </div>
                    <div class="items">
                        <a href="#"><img src="{{ asset('storage/app/client/client-7.jpeg') }}" alt="cl_logo5"/></a>
                    </div>
                    <div class="items">
                        <a href="#"><img src="{{ asset('storage/app/client/client-8.jpeg') }}" alt="cl_logo5"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.layouts.footer')
@include('front.layouts.footer_link')

<script>
    window.onload = function() {
        loadSlider();
    };

    function loadSlider() {
            $.ajax({
                headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token-home"]').attr('content')
                 },
                 type: "GET",
                 url: "{{url("load-slider")}}",
                 data: {},
                 cache: false,
                 dataType: 'html',
                 success: function (data, textStatus, jqXHR) {
                     $('#load-slider').html(data);
                 }
            });
    }

    $('.category_id').click(function () {
        var category_id = $(this).data('id');
        var brand_id = $(this).data('brand');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token-home"]').attr('content')
            },
            type: "GET",
            url: "{{url("get_category_wise_product")}}",
            data: {category_id:category_id},
            cache: false,
            dataType: 'html',
            success: function (data, textStatus, jqXHR) {
                $('#brand_id'+brand_id).html(data);

                $('.cat_brand'+brand_id).removeClass('cat-active');
                $('#category_'+category_id).addClass('cat-active');

                $('.cat_brandp'+brand_id).removeClass('color-active');
                $('#category_p'+category_id).addClass('color-active');

            }
        });
    });
</script>


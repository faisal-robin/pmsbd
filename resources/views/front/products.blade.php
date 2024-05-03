@include('front.layouts.header_link')
@include('front.layouts.header')
<!-- START SECTION BANNER -->
<section class="bg_light_yellow breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="assets/images/breadcrumb_bg.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1>Our Products</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our Products</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->
<!-- START SECTION PRODUCT -->
<section class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="product_content">
                    <ul class="nav nav-tabs justify-content-center animation" data-animation="fadeInUp" data-animation-delay="0.04s" role="tablist">
                        @foreach($category_list as $category)
                            <li class="nav-item">
                                <a class="nav-link" id="tab{{$category->id}}" data-toggle="tab" href="#tab-{{$category->id}}" role="tab" aria-controls="tab-{{$category->id}}" aria-selected="false">
                                    <span class="pr_icon2"></span>
                                    {{$category->category_name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="small_divider clearfix"></div>
                    <div class="tab-content">
                        @foreach($category_list as $key =>  $category)
                            <div class="tab-pane fade @if($key == 0) show active @endif" id="tab-{{$category->id}}" role="tabpanel" aria-labelledby="{{$category->id}}">
                                <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                                    @foreach($category->cat_products as $porduct)
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="product">
                                                <div class="product_img">
                                                    <a href="#"><img style="height: 260px" src="{{ url('storage/app/'.$porduct->product_images->first()->images_name) }}" alt="product_img1"/></a>
                                                    <div class="product_action_box">
                                                        <ul class="list_none pr_action_btn">
                                                            <li><a href="#"><i class="ti-heart"></i></a></li>
                                                            <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                            <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product_info">
                                                    <h6><a href="#">{{$porduct->name}}</a></h6>
                                                    {{--                                                    <div class="rating"><div class="product_rate" style="width:80%"></div></div>--}}
                                                    {{--                                                    <span class="price">$35.00</span>--}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlap_shape">
        <div class="ol_shape8">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img data-parallax='{"y": -30, "smoothness": 20}' src="{{ asset('public/front_asset/images/shape25.png')}}" alt="shape25"/>
            </div>
        </div>
        <div class="ol_shape9">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img data-parallax='{"y": 30, "smoothness": 20}' src="{{ asset('public/front_asset/images/shape26.png')}}" alt="shape26"/>
            </div>
        </div>
        <div class="ol_shape10">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img data-parallax='{"y": 30, "smoothness": 20}' src="{{ asset('public/front_asset/images/shape27.png')}}" alt="shape27"/>
            </div>
        </div>
        <div class="ol_shape11">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s">
                <img data-parallax='{"y": 30, "smoothness": 20}' src="{{ asset('public/front_asset/images/shape28.png')}}" alt="shape28"/>
            </div>
        </div>
        <div class="ol_shape12">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s">
                <img data-parallax='{"y": 30, "smoothness": 20}' src="{{ asset('public/front_asset/images/shape29.png')}}" alt="shape29"/>
            </div>
        </div>
        <div class="ol_shape13">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s">
                <img data-parallax='{"y": 30, "smoothness": 20}' src="{{ asset('public/front_asset/images/shape30.png')}}" alt="shape30"/>
            </div>
        </div>
        <div class="ol_shape14">
            <div class="bounceimg" data-animation="fadeInRight" data-animation-delay="0.5s">
                <img data-parallax='{"y": 30, "smoothness": 20}' src="{{ asset('public/front_asset/images/shape31.png')}}" alt="shape31"/>
            </div>
        </div>
    </div>
</section>
<!-- START SECTION PRODUCT -->

@include('front.layouts.footer')
@include('front.layouts.footer_link')

<script>
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

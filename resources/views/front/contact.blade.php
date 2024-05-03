@include('front.layouts.header_link')
@include('front.layouts.header')
<!-- START SECTION BANNER -->
<section class="bg_gray breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="assets/images/breadcrumb_bg.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="heading_s2">
                    <h1>Contact Us</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION BANNER BOX -->
<section style="padding-top: 50px;padding-bottom: 50px">
    <div class="container">
        <div class="row">
            <div class="col-md-4 animation" data-animation="bounceInUp" data-animation-delay="0.2s">
                <div class="banner_box box_shadow4 radius_all_10 text-center">
                        <div class="contact_info contact_info_style2 list_none">
                            <li>
                                <span class="ti-mobile"></span>
                                <p>{{$company_info->phone_1}}</p>
                            </li>
                        </div>
                </div>
            </div>
            <div class="col-md-4 animation" data-animation="bounceInUp" data-animation-delay="0.3s">
                <div class="banner_box box_shadow4 radius_all_10">
                    <div class="contact_info contact_info_style2 list_none">
                        <li>
                            <span class="ti-email"></span>
                            <a href="mailto:info@yourmail.com">{{$company_info->email}}</a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animation" data-animation="bounceInUp" data-animation-delay="0.4s">
                <div class="banner_box box_shadow4 radius_all_10">
                    <div class="contact_info contact_info_style2 list_none">
                        <li>
                            <span class="ti-location-pin"></span>
                            <address>{{$company_info->address_1}}</address>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER BOX -->

<!-- START SECTION CONTACT -->
<section style="padding-top: 0px;padding-bottom: 50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mt-4 mt-lg-0">
                <div class="field_form animation" data-animation="fadeInLeft" data-animation-delay="0.1s">
                    <form method="post" name="enq">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input required="required" placeholder="Enter Name *" id="first-name" class="form-control" name="name" type="text">
                            </div>
                            <div class="form-group col-lg-6">
                                <input required="required" placeholder="Enter Email *" id="email" class="form-control" name="email" type="email">
                            </div>
                            <div class="form-group col-12">
                                <input placeholder="Enter Subject" id="subject" class="form-control" name="subject" type="text">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea required="required" placeholder="Message *" id="description" class="form-control" name="message" rows="5"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" title="Submit Your Message!" class="btn btn-default" id="submitButton" name="submit" value="Submit">Submit</button>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="p-0">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <div class="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.963281862617!2d91.822712314362!3d22.355015246557063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd95c9e7654b1%3A0xe74294564d792ccc!2sJumairah%20Raisa!5e0!3m2!1sen!2sbd!4v1623779971960!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CONTACT -->

<!-- START SECTION CLIENT LOGO -->
<section class="d-none">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="text-center">
                    <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <h2>Our partner</h2>
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
                        <a href="#"><img src="{{ asset('public/front_asset/images/cl_logo1.png')}}" alt="cl_logo1"/></a>
                    </div>
                    <div class="items">
                        <a href="#"><img src="{{ asset('public/front_asset/images/cl_logo2.png')}}" alt="cl_logo2"/></a>
                    </div>
                    <div class="items">
                        <a href="#"><img src="{{ asset('public/front_asset/images/cl_logo3.png')}}" alt="cl_logo3"/></a>
                    </div>
                    <div class="items">
                        <a href="#"><img src="{{ asset('public/front_asset/images/cl_logo4.png')}}" alt="cl_logo4"/></a>
                    </div>
                    <div class="items">
                        <a href="#"><img src="{{ asset('public/front_asset/images/cl_logo5.png')}}" alt="cl_logo5"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CLIENT LOGO -->
@include('front.layouts.footer')
@include('front.layouts.footer_link')

<script>
    $("#add_btn").click(function (){
        $(".error_msg").html('');
        var data = new FormData($('#add_form')[0]);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token-home"]').attr('content')
            },
            method: "POST",
            url: "{{ url('contact-details') }}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {

            }
        }).done(function() {
            $("#success_msg").html("Message Send Successfully");
            location.reload();
        }).fail(function(data, textStatus, jqXHR) {
            var json_data = JSON.parse(data.responseText);
            $.each(json_data.errors, function(key, value){
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
            });
        });
    });
</script>


<!-- START FOOTER -->
<footer class="footer_dark background_bg overlay_bg_80" data-img-src="assets/images/footer_bg.jpg">
    <div class="top_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer_logo">
                        <a href="{{url('/')}}"><img height="75px" alt="logo" src="{{ url('storage/app/'.$company_info->logo)}}"></a>
                    </div>
                    <div class="footer_desc">
                        <p>Phasellus blandit massa enim. elit id varius nunc. Lorems ipsum dolor sit consectetur industry. If you are going to use a passage of Lorem Ipsum.</p>
                    </div>
                    <ul class="contact_info contact_info_style1 list_none">
                        <li>
                            <span class="ti-mobile"></span>
                            <p>{{$company_info->phone_1}}</p>
                        </li>
                        <li>
                            <span class="ti-email"></span>
                            <a href="mailto:{{$company_info->email}}">{{$company_info->email}}</a>
                        </li>
                        <li>
                            <span class="ti-location-pin"></span>
                            <address>{{$company_info->address_1}}</address>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 text-center">
                    <h5 class="widget_title2">Information</h5>
                    <ul class="list_none widget_links">
                        <li><a  href="{{url('/')}}">Home</a></li>
                        <li><a  href="{{url('about-us')}}">About Us</a></li>
                        <li><a href="{{url('ports')}}">Ports</a></li>
                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="widget_title2">Follow Us</h5>
                    <ul class="list_none social_icons radius_social">
                        <li><a href="#" class="sc_facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="sc_twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="sc_google"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#" class="sc_instagram"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" class="sc_pinterest"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border_top_tran">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <p class="copyright m-lg-0">Copyright © 2019 All Rights Reserved </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

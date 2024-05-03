<!-- LOADER -->
<div id="preloader">
    <div class="line-scale">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>
<!-- END LOADER -->


<!-- START HEADER -->
<header class="header_wrap dark_skin main_menu_uppercase">
    <div class="top-header overlay_bg_80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <ul class="contact_detail border_list list_none text-center text-md-left">
                        <li><a class="text-white" href="#"><i class="ti-mobile"></i> <span class="text-white">{{$company_info->phone_1}}</span></a></li>

                    </ul>
                </div>
                <div class="col-md-5">
                    <ul class="header_list border_list list_none header_dropdown text-center text-md-right">
                      <li><a class="text-white" href="#"><i class="ti-email"></i> <span class="text-white">{{$company_info->email}}</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{url('/')}}">
                <img style="height: 75px" class="logo_light" src="{{ url('storage/app/'.$company_info->logo)}}" alt="logo" />
                <img style="height: 75px" class="logo_dark" src="{{ url('storage/app/'.$company_info->logo)}}" alt="logo" />
                <img style="height: 75px" class="logo_default" src="{{ url('storage/app/'.$company_info->logo)}}" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{url('about-us')}}">About Us</a>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Products</a>
                        <div class="dropdown-menu">
                            <ul>
                                @foreach($all_product as $product)
                                    <li><a class="dropdown-item nav-link nav_item" href="{{url('details/'.$product->slug)}}">{{$product->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu">
                            <ul>
                                <ul>
                                    @foreach($all_service as $service)
                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('details/'.$service->slug)}}">{{$service->name}} </a></li>
                                    @endforeach
                                </ul>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Ports</a>
                        <div class="dropdown-menu">
                            <ul>
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="{{url('ports')}}">Chittagong Ports</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="{{url('ports')}}">Mongla Ports</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="{{url('ports')}}">Payra Ports</a></li>
                                </ul>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('contact')}}" class="btn btn-outline-default" style="margin-top: 22px">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- END HEADER -->

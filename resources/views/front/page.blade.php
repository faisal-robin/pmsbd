@include('front.layouts.header_link')
@include('front.layouts.header')
    <div class="hero-wrap hero-bread"
    @if($page_info->page_tag == "about-jenwear")
        style="background-image: url({{ asset('public/front_asset/images/jenware-1.jpg')}});"
    @else
       style="background-image: url({{ asset('public/front_asset/images/bg_1.jpg')}});"
    @endif

    >
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
{{--          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>About us</span></p>--}}
            <h1 class="mb-0 bread">{{$page_info->page_title}}</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ url('storage/app/'.$page_info->page_image) }});">
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                        <div class="heading-section-bold mb-4 mt-md-5">
                        </div>
                        <div class="pb-md-5">
                            <p>{!! $page_info->page_text  !!}</p>
                        </div>
					</div>
				</div>
			</div>
    </section>
@include('front.layouts.footer')
@include('front.layouts.footer_link')

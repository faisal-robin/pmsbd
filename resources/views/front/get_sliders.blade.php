<section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
          @foreach($sliders as $slider)
              <div class="slider-item" style="background-image: url({{ url('storage/app/'.$slider->slider_image) }});">
                <div class="overlay"></div>
                <div class="container">
                  <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 ftco-animate text-center">
                      <h1 class="mb-2">{{$slider->slider_title}}</h1>
                      <h2 class="subheading mb-4">{{$slider->slider_text}}</h2>
                      <p><a href="{{url('product-quotation')}}" class="btn btn-primary">Get Quote</a></p>
                    </div>

                  </div>
                </div>
              </div>
          @endforeach
	    </div>
    </section>

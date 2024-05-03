
    		<div class="row">
                 @foreach($product_list as $porduct)
                        <div class="col-md-6 col-lg-3">
                            <div class="product">
                                <a href="{{url('product-details/'.$porduct->slug)}}" class="img-prod"><img class="img-fluid img_responsive" src="{{ url('storage/app/'.$porduct->product_images->first()->images_name) }}" alt="Product Image">
                                            <div class="overlay"></div>
                                </a>
                                <div class="text py-3 pb-4 px-3 text-center">
                                    <h3><a href="{{url('product-details/'.$porduct->slug)}}">{{$porduct->name}}</a></h3>
                                    <div class="bottom-area d-flex px-3">
                                        <div class="m-auto d-flex">
                                            <a href="{{url('product-details/'.$porduct->slug)}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                                <span><i class="ion-ios-menu"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
    		</div>


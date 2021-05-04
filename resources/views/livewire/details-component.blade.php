<main id="main" class="main-site" style="margin-top: 120px;">
		<div class="container">

			
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area ml-60">
					<div class="wrap-product-detail">
						<div class="detail-media">
							<div class="product-gallery">
							  <ul class="slides">
							    <li data-thumb="{{ asset('assets/images/products') }}/{{$product->image}}">
							    	<img src="{{ asset('assets/images/products') }}/{{$product->image}}" alt="{{$product->name}}" />
							    </li>
							  </ul>
							</div>
						</div>
						<div class="detail-info">
				
                            <h2 class="product-name">{{$product->name}}</h2>
                            <div class="short-desc">
                                <ul>
                                  <p>So how did the classical Latin become so incoherent? According to McClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order to provide placeholder text to mockup various fonts for a type specimen book.

									It's difficult to find examples of lorem ipsum in use before Letraset made it popular as a dummy text in the 1960s, although McClintock says he remembers coming across the lorem ipsum passage in a book of old metal type samples. So far he hasn't relocated where he once saw the passage, but the popularity of Cicero in the 15th century supports the theory that the filler text has been used for centuries.
									
									And anyways, as Cecil Adams reasoned, “[Do you really] think graphic arts supply houses were hiring classics scholars in the 1960s?” Perhaps. But it seems reasonable to imagine that there was a version in use far before the age of Letraset.
									
									McClintock wrote to Before & After to explain his discovery;
									
									“What I find remarkable is that this text has been the industry's standard dummy text ever since some printer in the 1500s took a galley of type and scrambled it to make a type specimen book; it has survived not only four centuries of letter-by-letter resetting but even the leap into electronic typesetting, essentially unchanged except for an occasional 'ing' or 'y' thrown in. It's ironic that when the then-understood Latin was scrambled, it became as incomprehensible as Greek; the phrase 'it's Greek to me' and 'greeking' have common semantic roots!” (The editors published his letter in a correction headlined “Lorem Oopsum”).</p>
                                </ul>
                            </div>
                            <div class="wrap-social">
                            	<a class="link-socail" href="#"><img src="{{ asset('assets/images/social-list.png') }}" alt=""></a>
                            </div>
							
							<div class="wrap-butons">
								@if($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
									<a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}}, '{{$product->name}}')">more...</a>
                                @else
									<a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}}, '{{$product->name}}', {{$product->regular_price}})">more...</a>
								@endif
							
							</div>
						</div>
					
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					
					<div class="widget mercado-widget widget-product" style="    margin-top: 34px;">
						<h2 class="widget-title">Popular subjects</h2>
						<div class="widget-content">
							<ul class="products">
                                @foreach ($popular_products as $p_product)
                                    <li class="product-item">
                                        <div class="product product-widget-style">
                                            <div class="thumbnnail">
                                                <a href="{{route('product.details', ['slug'=>$p_product->slug])}}" title="{{$p_product->name}}">
                                                    <figure><img src="{{ asset('assets/images/products') }}/{{$p_product->image}}" alt="{{$p_product->name}}"></figure>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <a href="{{route('product.details', ['slug'=>$p_product->slug])}}" title="{{$p_product->name}}" class="product-name"><span>{{$p_product->name}}</span></a>
                                              
                                            </div>
                                        </div>
                                    </li>
                                @endforeach				
							</ul>
						</div>
					
					</div>

				</div><!--end sitebar-->

				<div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wrap-show-advance-info-box style-1 box-in-site">
						<h3 class="title-box" style="background-color: #ff6666;">Related Products</h3>
						<div class="wrap-products">
							<div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false"  -nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
                                @foreach ($related_products as $r_product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('product.details', ['slug'=>$r_product->slug])}}" title="{{$r_product->name}}">
                                                <figure><img src="{{ asset('assets/images/products') }}/{{$r_product->image}}" width="214" height="214" alt="{{$r_product->name}}"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details', ['slug'=>$r_product->slug])}}" class="product-name"><span>{{$r_product->name}}</span></a>
                                          
                                        </div>
                                    </div>
                                @endforeach							
							</div>
						</div><!--End wrap-products-->
					</div>
				</div>

			</div><!--end row-->

		</div><!--end container-->

	</main>

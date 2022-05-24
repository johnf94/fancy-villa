@extends('layouts.master')

@section('content')

<section class="templatemo-about tm-section" id="about">
    <img src="images/tm-border-black-top.png" alt="Border" class="tm-border">	
    <div class="container">
        <div class="row">				
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img id="member1" class="hide" src="images/team/1.jpg" alt="Member 1" width="228" height="385">
                <div class="canvas-wrap">						
                    <div class="canvas-overlay">
                        <div class="tm-member-info absolute-center">
                            <p class="member-name text-center text-uppercase">Mary</p>
                            <p class="member-title text-center text-uppercase">Web designer</p>
                            <div class="tm-member-social-info text-center">
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-linkedin"></a>	
                            </div>								
                        </div>							
                        <canvas id="member1_canvas_overlay" width="228" height="385"></canvas>
                    </div>
                    <canvas id="member1_canvas" width="228" height="405"></canvas>	
                </div>					
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img id="member2" class="hide" src="images/team/2.jpg" alt="Member 2" width="228" height="385">
                <div class="canvas-wrap canvas-lines">					
                    <div class="canvas-overlay">
                        <div class="tm-member-info absolute-center">
                            <p class="member-name text-center text-uppercase">Kate</p>
                            <p class="member-title text-center text-uppercase">Graphic designer</p>
                            <div class="tm-member-social-info text-center">
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-linkedin"></a>	
                            </div>								
                        </div>							
                        <canvas id="member2_canvas_overlay" width="228" height="385"></canvas>
                    </div>
                    <canvas id="member2_canvas" width="228" height="405"></canvas>	
                </div>					
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img id="member3" class="hide" src="images/team/3.jpg" alt="Member 3" width="228" height="385">
                <div class="canvas-wrap">						
                    <div class="canvas-overlay">
                        <div class="tm-member-info absolute-center">
                            <p class="member-name text-center text-uppercase">Jess</p>
                            <p class="member-title text-center text-uppercase">Web developer</p>
                            <div class="tm-member-social-info text-center">
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-linkedin"></a>	
                            </div>								
                        </div>							
                        <canvas id="member3_canvas_overlay" width="228" height="385"></canvas>
                    </div>
                    <canvas id="member3_canvas" width="228" height="405"></canvas>	
                </div>					
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tm-about-right">
                    <h1 class="tm-about-title text-uppercase">Meet</h1>
                    <h2 class="tm-about-subtitle tm-orange-text text-uppercase">Our Team</h2>
                    <h3 class="tm-about-subtitle-2 text-uppercase">Consectetur Deostrla</h3>
                    <div class="tm-about-description">
                        <ul>
                            <li>Pellentesque aliquam nisi</li>
                            <li>Rondimentum nulla sagittis ura</li>
                            <li>Gconsectetur imperdiet</li>
                            <li>Dconsect condimentum etur</li>
                            <li>Praesent consectur mulla</li>
                            <li>Sdui accumsan pharetra</li>
                            <li>Dconsect condimentum etur</li>
                            <li>Gconsectetur imperdiet</li>
                        </ul>
                    </div>					
                    <h3 class="tm-about-subtitle-2">Lorem Ipsums</h3>
                </div>					
            </div>				
        </div>			
    </div>		
</section> <!-- about -->
    
@endsection


@section('home-content')
<section class="templatemo-services tm-section tm-orange-bg-transparent" id="services">
    <img src="images/tm-border-white-top.png" alt="Border" class="tm-border">
    <div class="container text-center">
        <div class="tm-pricing-table-container">
            <div class="tm-pricing-table tm-dark-bg">
                <h2 class="tm-pricing-header tm-orange-text text-center text-uppercase">Starter</h2>				
                <div class="tm-pricing-details text-center tm-light-gray-text">
                    <div class="price-tag">
                        <div class="price-tag-inner">
                            <span class="dollar">$</span>
                            <span class="price">25</span>
                            <span class="month text-uppercase">/month</span>						
                        </div>						
                    </div>
                    <ul class="text-center tm-light-gray-text">
                        <li>Pellentesque 2x</li>
                        <li>Raugue blandit</li>
                        <li>Mcondimentum</li>	
                        <li>Curabitur deroemet</li>
                        <li>Rsconsectetur</li>
                        <li>Dimperdiet</li>
                        <li>Praesent sagittis</li>
                    </ul>
                </div>				
            </div>
            <a href="#">
                <div class="canvas-wrap">
                    <canvas id="canvas1" width="260" height="80" ></canvas>
                    <div class="overlay">
                        <p class="tm-dark-text text-uppercase">Sign up</p>
                    </div>	
                </div>
            </a>
        </div>
        <div class="tm-pricing-table-container">
            <div class="tm-pricing-table table-big tm-dark-bg">
                <h2 class="tm-pricing-header tm-orange-text text-center text-uppercase">Pro</h2>
                <div class="tm-pricing-details text-center tm-light-gray-text">
                    <div class="price-tag">
                        <div class="price-tag-inner">
                            <span class="dollar">$</span>
                            <span class="price">50</span>
                            <span class="month text-uppercase">/month</span>							
                        </div>						
                    </div>
                    <ul class="text-center tm-light-gray-text">
                        <li>Pellentesque 4x</li>
                        <li>Raugue blandit</li>
                        <li>Mcondimentum</li>	
                        <li>Curabitur deroemet</li>
                        <li>Rsconsectetur</li>
                        <li>Dimperdiet</li>
                        <li>Praesent sagittis</li>
                    </ul>
                </div>
            </div>
            <a href="#">
                <div class="canvas-wrap">
                    <canvas id="canvas2" width="300" height="80" ></canvas>
                    <div class="overlay overlay-big">
                        <p class="tm-dark-text text-uppercase">Sign up</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="tm-pricing-table-container">
            <div class="tm-pricing-table tm-dark-bg">
                <h2 class="tm-pricing-header tm-orange-text text-center text-uppercase">Advanced</h2>
                <div class="tm-pricing-details text-center tm-light-gray-text">
                    <div class="price-tag">
                        <div class="price-tag-inner">
                            <span class="dollar">$</span>
                            <span class="price">75</span>
                            <span class="month text-uppercase">/month</span>						
                        </div>						
                    </div>
                    <ul class="text-center tm-light-gray-text">
                        <li>Pellentesque 8x</li>
                        <li>Raugue blandit</li>
                        <li>Mcondimentum</li>	
                        <li>Curabitur deroemet</li>
                        <li>Rsconsectetur</li>
                        <li>Dimperdiet</li>
                        <li>Praesent sagittis</li>
                    </ul>
                </div>
            </div>
            <a href="#">
                <div class="canvas-wrap">
                    <canvas id="canvas3" width="260" height="80" ></canvas>
                    <div class="overlay">
                        <p class="tm-dark-text text-uppercase">Sign up</p>
                    </div>	
                </div>
            </a>
        </div>	
    </div>
    
</section> <!-- services -->

<section class="tm-section" id="blog">
    <img src="images/tm-border-yellow-top.png" alt="Border" class="tm-border">
    <div class="container">
        <h1 class="text-uppercase text-center">blog</h1>
        <div class="text-center margin-top-50 tm-testimonial-images-container">
            <div class="img-container">				
                <div class="tm-img-circle-border absolute-center" data-comment="Sed velit elit, ornare cursus ex ac, tempor viverra mi. Vestibulum tincidunt egestas tellus, vel pharetra ante tincidunt sit amet. Vestibulum vitae velit eget metus interdum interdum." data-author="Jennifer Ves Tin" id="author1">
                    <img src="images/testimonials/1.jpg" alt="Testimonial 1" class="img-circle tm-img-testimonial">
                </div>	
            </div>			
            <div class="img-container">
                <div class="tm-img-circle-border absolute-center" data-comment="Morbi posuere metus quam, vitae tempus nulla vehicula eu. Etiam vitae nunc faucibus, iaculis tellus eu, molestie turpis. Nam quis consequat leo. Nulla ac erat in libero porta commodo. Phasellus fringilla pharetra ullamcorper." data-author="Alicia Nulla Act" id="author2">
                    <img src="images/testimonials/2.jpg" alt="Testimonial 2" class="img-circle tm-img-testimonial">	
                </div>					
            </div>
            <div class="img-container">
                <div class="tm-img-circle-border absolute-center active" data-comment="Suspendisse a maximus sem. Pellentesque consequat finibus metus a varius. Morbi placerat suscipit mi, in tincidunt ligula lobortis porttitor. Mauris mollis, ex sit amet sagittis elementum, tellus quam vestibulum ex, vitae cursus massa tortor et tortor." data-author="Dacilisis Luctus" id="author3">
                    <img src="images/testimonials/3.jpg" alt="Testimonial 3" class="img-circle tm-img-testimonial">
                </div>
                
            </div>
            <div class="img-container">
                <div class="tm-img-circle-border absolute-center" data-comment="Donec laoreet nisl vel nisi posuere tempus quis at tortor. Curabitur egestas elementum est sit amet gravida. Quisque maximus diam eu turpis malesuada, in interdum massa efficitur. Vestibulum blandit pellentesque ipsum a fermentum. Duis id rutrum leo." data-author="Jessica Nisi Vel" id="author4">
                    <img src="images/testimonials/4.jpg" alt="Testimonial 4" class="img-circle tm-img-testimonial">
                </div>					
            </div>
            <div class="img-container">
                <div class="tm-img-circle-border absolute-center" data-comment="Integer aliquam nibh nulla, id elementum purus tempus quis. Etiam eu massa condimentum, consectetur turpis et, semper diam. Vivamus mauris ipsum, bibendum non tempor nec, ultricies a leo. Fusce eu efficitur diam. Praesent vel mi viverra leo finibus maximus sed in ipsum." data-author="Malicia Viva Fusce" id="author5">
                    <img src="images/testimonials/5.jpg" alt="Testimonial 5" class="img-circle tm-img-testimonial">
                </div>					
            </div>
        </div>
        <p class="text-center margin-top-50 tm-comment"><em>This is a place holder for different description text.</em></p>
        <p class="text-uppercase text-center tm-author tm-orange-text">Author Name</p>
        <hr class="tm-author-name-underline">
    </div>
</section> 
@endsection
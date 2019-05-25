@include('frontend.header')

<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="content">
			    <div class="document-title" style="background-image: url('{{ url("public/img/painter_front/procor-about.jpg") }}'); margin:-80px -750px 0px -750px !important">
			        <h1>Our Services</h1>
			    </div><!-- /.document-title -->
			    <div class="block background-white fullwidth">
					<div class="page-header">
                        <h1>Residential Painters</h1>
                        <p>Are you looking for trustworthy painters? With experienced painters and a real focus on customer satisfaction, you can rely on us for your next house painting services. Our interior house painting service provides a fresh look that your friends and neighbors will love. Our exterior house painting services help to add value and curb appeal to your home. We walk with you step by step from beginning to end with your home painting service. Also, since we are professional painters, we provide all types of services including commercial painting for businesses. </p>
                    </div><!-- /.page-header -->
                    <div class="cards-simple-wrapper">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="card-simple" data-background-image="{{ url('public/img/gallery/griffin_interior_7.jpg') }}">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <div class="card-simple-actions detail-gallery-preview">
                                                <a href="{{ url('public/img/gallery/griffin_interior_7.jpg') }}" class="fa fa-search"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->
                                        <div class="card-simple-label">Interior</div>
                                        
                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->
                            <div class="col-sm-6 col-md-4">
                                <div class="card-simple" data-background-image="{{ url('public/img/gallery/gallery-1.jpg') }}">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <div class="card-simple-actions detail-gallery-preview">
                                                <a href="{{ url('public/img/gallery/gallery-1.jpg') }}" class="fa fa-search"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">Exterior</div>                                        
                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->
                            <div class="col-sm-6 col-md-4">
                                <div class="card-simple" data-background-image="{{ url('public/img/gallery/griffin_interior_3.jpg') }}">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <div class="card-simple-actions detail-gallery-preview">
                                                <a href="{{ url('public/img/gallery/griffin_interior_3.jpg') }}" class="fa fa-search"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">Interior</div>
                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->
                        </div><!-- /.row -->
                    </div><!-- /.cards-simple-wrapper -->
				</div>
				<div class="block background-white background-transparent-image fullwidth">
					<div class="page-header">
                        <h1 class="text-left">Commercial Painters</h1>
                        <p class="text-left">Procor Painting can tackle small to medium-sized commercial painting projects, both interior, and exterior. We are excelent at client communication, will stay on schedule, and promise competitive pricing. Our painters have extensive experience with painting all surfaces, including stucco, siding, brick, wood, concrete, and even metal buildings! 
                        <br /><br />
                        Give visitors and employees at your facility the right impression of your business with a superior exterior and interior paint job by a professional commercial painting contractor. The color of your interior and the condition of your exterior are essential to projecting the desired image of your company. We provide both interior painting and exterior painting. Call Procor Painting today to discuss the paint products and colors that are right for your business and request a free quote.
                        <br />
                        </p>
                        <h2 class="text-left"> Our commercial services include the following: </h2>

                        <div class="row">
                            <div class="col-sm-6 col-md-3 col-lg-2">
                                <li>Apartment complexes and other multifamily housing facilities</li>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-2">
                                <li>Office buildings </li>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-2">
                                <li>Retail stores</li>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-2">
                                <li>Restaurants</li>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-2">
                                <li>Churches</li>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-2">
                                <li>Industrial properties</li>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-2">
                                <li>Medical office spaces</li>
                            </div>
                        </div>
                    </div><!-- /.page-header -->
                    @php /*
                    <div class="cards-simple-wrapper">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="card-simple" data-background-image="assets/img/tmp/product-2.jpg">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <div class="card-simple-actions">
                                                <a href="#" class="fa fa-search"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->
                                        <div class="card-simple-label">Commercial</div>
                                        
                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->
                            <div class="col-sm-6 col-md-4">
                                <div class="card-simple" data-background-image="assets/img/tmp/product-3.jpg">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <div class="card-simple-actions">
                                                <a href="#" class="fa fa-search"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">Commercial</div>                                        
                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->
                            <div class="col-sm-6 col-md-4">
                                <div class="card-simple" data-background-image="assets/img/tmp/product-4.jpg">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <div class="card-simple-actions">
                                                <a href="#" class="fa fa-search"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">Commercial</div>
                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->
                        </div><!-- /.row -->
                    </div><!-- /.cards-simple-wrapper -->
                    */ @endphp  
				</div>
            </div><!-- /.content -->
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->

@include('frontend.footer')
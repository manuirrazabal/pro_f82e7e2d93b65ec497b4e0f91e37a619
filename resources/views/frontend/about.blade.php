@include('frontend.header')

<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="content">
			    <div class="document-title" style="background-image: url('{{ url("public/img/painter_front/procor-about.jpg") }}'); margin:-80px -750px 0px -750px !important">
			        <h1>About Us</h1>
			    </div><!-- /.document-title -->
			    <div class="block background-white fullwidth">
					<div class="row">
						<div class="posts post-detail">
						    <div class="col-sm-7">
						    	<h3>Our Experience</h3>
						        We are a local residential and commercial painting company. 
						        We have 20 yrs experience providing families and businesses with expert painting service.
						        <br /><br />
						        Trust the professionals at Procor Painting painting for your next painting job.
						        
						    </div>
		 					<div class="col-sm-5">
						        <img src="{{ url('public/img/our-experience.jpg') }}" alt="" width="90%">
						    </div>
						</div>
					</div><!-- /.row -->
				</div>
				<div class="block background-white background-transparent-image fullwidth">
					<div class="row">
						<div class="posts post-detail">
		 					<div class="col-sm-5">
						        <img src="{{ url('public/img/why-choose-us.jpg') }}" alt="" width="90%">
						    </div>
						    <div class="col-sm-7">
						    	<h3>Why Choose us?</h3>
						        <br />
						        <p> High quality premium products</p>
						        <ul> 
						        	<li>Fast</li>
						        	<li>Friendly</li>
						        	<li>Dependable</li>
						        	<li>Never cuts corners</li>
						        </ul>
						    </div>
						</div>
					</div><!-- /.row -->
				</div>

				<div class="block background-white fullwidth">
                    @include('frontend.recent-projects-block')
                </div>

                <div class="block background-white background-transparent-image fullwidth">
                    @include('frontend.testimonials-block')
                </div>

            </div><!-- /.content -->
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->

@include('frontend.footer')
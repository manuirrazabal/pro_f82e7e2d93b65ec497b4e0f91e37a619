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
						        We are a local residential and commercial painting company. After starting in 2017, we’ve grown quickly across the lower mainland painting hundreds of homes. Procor Painting is a premier painting contractor in Vancouver. We have built a strong reputation based on our quality of work and our customer service.
						        <br /><br />
						         When you hire Procor Painting for your residential or commercial painting project, we will not leave your project until you are satisfied. Each job and each client are important to us from the preparation to the conclusion of your service. If you are looking for painting contractors in the lower mainland, then give us a call for a free painting estimate.
						    </div>
		 					<div class="col-sm-5">
		 						<h3>&nbsp;</h3>
						        <img src="{{ url('public/img/tmp/product-3.jpg') }}" alt="" width="90%">
						    </div>
						</div>
					</div><!-- /.row -->
				</div>
				<div class="block background-white background-transparent-image fullwidth">
					<div class="row">
						<div class="posts post-detail">
		 					<div class="col-sm-5">
		 						<h3>&nbsp;</h3>
						        <img src="{{ url('public/img/tmp/product-2.jpg') }}" alt="" width="90%">
						    </div>
						    <div class="col-sm-7">
						    	<h3>Why Choose us?</h3>
						        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						        <br ><br >
						        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
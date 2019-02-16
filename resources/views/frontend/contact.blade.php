@include('frontend.header')

<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="content">
			    <div class="document-title" style="background-image: url('{{ url("public/img/painter_front/procor-contact.jpg") }}');">
			        <h1>Contact Us</h1>
			    </div><!-- /.document-title -->


			    <div class="background-white p30 mb30">
				    <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;aq=t&amp;sll=49.3062942,-122.7576058&amp;sspn=60.376022,92.460937&amp;ie=UTF8&amp;t=m&amp;ll=49.3062942,-122.7576058&amp;spn=0.011000,0.011000&amp;output=embed" width="100%" height="350" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
				</div>

				<div class="row">
				    <div class="col-sm-6">
				    	@include('frontend.messages')

				        <div class="contact-form-wrapper clearfix">
				            <form class="contact-form" method="post" action="?">
				            	@csrf
			                    <div class="form-group">
			                        <label for="contact-form-name">Name</label>
			                        <input type="text" name="contactName" id="contactName" class="form-control">
			                    </div><!-- /.form-group -->

			                    <div class="form-group">
			                        <label for="contact-form-subject">Phone Number</label>
			                        <input type="text" name="contactPhone" id="contactPhone" class="form-control">
			                    </div><!-- /.form-group -->

			                    <div class="form-group">
			                        <label for="contact-form-email">E-mail</label>
			                        <input type="text" name="contactEmail" id="contactEmail" class="form-control">
			                    </div><!-- /.form-group -->

			                    <div class="form-group">
				                    <label for="contact-form-message">Type of Message</label>
				                    <select class="form-control" title="Select Option" name="contactOption">
			                            <option value="1">Estimate</option>
			                            <option value="2">General Question</option>
			                            <option value="3">Feedback</option>
			                        </select>
				                </div><!-- /.form-group -->

				                <div class="form-group">
				                    <label for="contact-form-message">Message</label>
				                    <textarea class="form-control" id="contactMessage" name="contactMessage" rows="6"></textarea>
				                </div><!-- /.form-group -->

				                <div class="form-group">
				                    <label for="contact-form-email">Resolve This = {{ $sum_nunber1 }} + {{ $sum_nunber2 }}</label>
				                    <input type="text" name="contactRequest" id="contactRequest" class="form-control">
				                </div><!-- /.form-group -->
				                <button class="btn btn-primary pull-right">Send</button>
				            </form><!-- /.contact-form -->
				        </div><!-- /.contact-form-wrapper -->
				    </div>

				    <div class="col-sm-6">
				        <h3>We’d love to hear from you</h3>
				        <p>
				            Procor Painting is here to help you. If you have any questions or need a consultation about painting or to request a quote, then we would be glad to help.
				        </p>


				        <div class="row">
				            <div class="col-sm-6">
				                <h3>Address</h3>

				                <p>
				                    1511 Coast Meridian rd. 
									Coquitlam, British Columbia 
									- V3E 3H3 
				                </p>
				            </div><!-- /.col-* -->

				            <div class="col-sm-6">
				                <h3>Contacts</h3>

				                <p>
				                    +1 778 987 0309<br>
				                </p>
				            </div><!-- /.col-* -->
				        </div><!-- /.row -->
				    </div><!-- /.col-* -->
				</div><!-- /.row -->
            </div><!-- /.content -->
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->

@include('frontend.footer')
@include('frontend.header')
<div class="main">
    <div>
        <div class="content">
            <div class="mt-80">
                <div class="hero-image">
                    <div class="hero-image-inner" style="background-image: url('{{ url("public/img/painter_front/main-image1.jpg") }}');">
                        
                        <div class="hero-image-content">
                            <div class="container">
                                <h1>Need your house painted?</h1>
                                <p>Request a free estimate today!</p>

                                <!-- <a href="listing-row.html" class="btn btn-secondary btn-lg">Check Here</a> -->
                            </div><!-- /.container -->
                        </div><!-- /.hero-image-content -->

                    </div><!-- /.hero-image-inner -->
                </div><!-- /.hero-image -->
            </div>

            <div class="container">
                <div class="block background-secondary fullwidth">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact-info-wrapper">
                                <h2>Questions?</h2>

                                <div class="contact-info">
                                    <span class="contact-info-item">
                                        <i class="fa fa-at"></i>
                                        <span>dana.procor@gmail.com </span>
                                    </span><!-- /.contact-info-item -->
                                    <span class="contact-info-item">
                                        <i class="fa fa-phone"></i>
                                        <span>+1 778 987 0309</span>
                                    </span><!-- /.contact-info-item -->
                                </div><!-- /.contact-info-->
                            </div><!-- /.contact-info-wrapper -->
                        </div><!-- /.col-* -->
                    </div><!-- /.row -->
                </div>

                <div class="block background-white fullwidth">
                    @include('frontend.recent-projects-block')
                </div>

                <div class="block background-black-light fullwidth">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="box">
                                <div class="box-icon">
                                    <i class="fa fa-life-ring"></i>
                                </div><!-- /.box-icon -->

                                <div class="box-content">
                                    <h2>Excelent Communication</h2>
                                    <p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker</p>
                                </div><!-- /.box-content -->
                            </div>
                        </div><!-- /.col-sm-4 -->

                        <div class="col-sm-4">
                            <div class="box">
                                <div class="box-icon">
                                    <i class="fa fa-flask"></i>
                                </div><!-- /.box-icon -->

                                <div class="box-content">
                                    <h2>Always Improving</h2>
                                    <p>pLetraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker</p>
                                </div><!-- /.box-content -->
                            </div>
                        </div><!-- /.col-sm-4 -->

                        <div class="col-sm-4">
                            <div class="box">
                                <div class="box-icon">
                                    <i class="fa fa-thumbs-o-up"></i>
                                </div><!-- /.box-icon -->

                                <div class="box-content">
                                    <h2>Flexible and Reliable</h2>
                                    <p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker</p>
                                </div><!-- /.box-content -->
                            </div>
                        </div><!-- /.col-sm-4 -->
                    </div><!-- /.row -->
                </div><!-- /.block -->

                <div class="block background-white fullwidth">
                    @include('frontend.testimonials-block')
                </div>

            </div><!-- /.container -->
        </div><!-- /.content -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->

@include('frontend.footer')
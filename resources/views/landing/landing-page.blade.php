<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Brian">

    <title>BCMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- <link href="{{ asset('css/landing.min.css') }}" rel="stylesheet"> --}}


    <!-- Custom CSS -->
    <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body name="top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav smoothScroll" href="#top">BCMS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about" class="smoothScroll">About</a>
                    </li>
                    <li>
                        <a href="#classes" class="smoothScroll">Classes</a>
                    </li>
                    <li>
                        <a class="smoothScroll" href="#pricing">Pricing</a>
                    </li>
                    <li>
                        <a class="smoothScroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="smoothScroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="home"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Baraton Community Music School</h1>
                        <h3><i>Learning music made simple,fun and affordable.</i></h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="{{ url('/register') }}" class="btn btn-default btn-lg"><i class=""></i> <span class="network-name"><b>Enroll now</b></span></a>
                            </li>                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a name="classes"></a>
    <div class="content-section-b">
    <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="service-heading">Classes</h2>
                    <h3 class="section-subheading text-muted"><i>We offer music classes for:</i></h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service1-heading">Instruments</h4>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service1-heading">Voice</h4>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-music fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service1-heading">Sight reading and music arrangment</h4>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content-section-a -->

    <a name="about"></a>
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="service-heading">About BCMS</h2>
                    <p class="lead">Founded back in 2014, BCMS is a music program initiated by the  <a target="_blank" href="http://www.ueab.ac.ke/">University of Eastern Africa, Baraton</a>'s music department.<br>It seeks to teach music, both theory and practical, to the community especially to those with no prior music knowledge or want to upgrade.</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/dog.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <a name="pricing"></a>
    
    <div class="banner-2">
        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Kshs 5,000 only</h2><br>
                    <h3 class="lead">For <b class="service1-heading">10 lessons</b>, per instrument, which are to be completed in approximately 3 months or less...</h3>
                </div>
                {{-- <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/phones.png" alt="">
                </div> --}}
            </div>

        </div>
        <!-- /.container -->
        </div> <!--banner-2-->
        
    <!-- /.content-section-a-->

    <a name="team"></a>
    <div class="content-section-a">    
    <div class="container">
    <div class="row centered">

                <h2 class="service-heading">Our Awesome Team</h2><br>
                    
                    <div class="col-lg-3 centered">
                    <img class="img img-circle" src="{{ url('/img/team/team01.jpg') }}" height="120px" width="120px" alt="">
                    <br>
                    <h4><b>Jessee Wanderi</b></h4>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="icon icon-flickr"></a>
                    <p class="lead">Mike combines an expert technical knowledge with a real eye for design. Working with clients from a wide range of industries, he fully understands client objectives when working on a project, large or small.</p>
                </div><!-- col-lg-3 -->
                
                <div class="col-lg-3 centered">
                    <img class="img img-circle" src="{{ url('/img/team/team02.jpg') }}" height="120px" width="120px" alt="">
                    <br>
                    <h4><b>Jack Oyiengo</b></h4>
                    <a href="#" class="icon icon-twitter"></a>
                    <a href="#" class="icon icon-facebook"></a>
                    <a href="#" class="icon icon-flickr"></a>
                    <p class="lead">Tim is an experienced marcoms practitioner and manages projects from inception to delivery. He understands the synergy between great design and commercial effectiveness which shines through on every project.</p>
                </div><!-- col-lg-3 -->
                
                <div class="col-lg-3 centered">
                    <img class="img img-circle" src="{{ url('/img/team/team03.jpg') }}" height="120px" width="120px" alt="">
                    <br>
                    <h4><b>Azariah Kitur</b></h4>
                    <a href="#" class="icon icon-twitter"></a>
                    <a href="#" class="icon icon-facebook"></a>
                    <a href="#" class="icon icon-flickr"></a>
                    <p class="lead">Be a creative director is a hard task, but Michele loves what she does. Her combination of knowledge and expertise is an important pillar in our agency.</p>
                </div><!-- col-lg-3 -->
                
                <div class="col-lg-3 centered">
                    <img class="img img-circle" src="{{ url('/img/team/team04.jpg') }}" height="120px" width="120px" alt="">
                    <br>
                    <h4><b>Brian Mecha</b></h4>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="icon icon-facebook"></a>
                    <a href="#" class="icon icon-flickr"></a>
                    <p class="lead">Jaye began making websites when animated logos and scrolling text were cool, but has since found a love for simplicity, creating websites that are a pleasure to browse. Monkey Island Fan.</p>
                </div><!-- col-lg-3 -->

                </div>
            </div>
        </div>
    

	<a name="contact"></a>
    <div class="section translucent-bg bg-image-2 pb-clear">
        <div class="container">
            <div class="row">
            <div class="col-lg-5">
                <h3>Address</a></h3>
                <p>
                    <a href="http://www.ueab.ac.ke" target="_">University of Eastern Africa, Baraton</a><br/>
                    Box 2500-30100,<br/>
                    Kapsabet,<br/>
                    Kenya<br/><br>
                    <i class="fa fa-envelope" aria-hidden="true">&nbsp; info@bcms.ac.ke</i><br>
                    <br><i class="fa fa-phone" aria-hidden="true">  &nbsp;+254 720 543974</i>     </p>
                
                <div>
                <ul class="social-links">
                                    <li class="facebook"><a target="_blank" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                                    <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
                                    <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
                                    <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
                
                <div class="col-lg-7">
                <h3>Talk to us</h3>
                <br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                {!! Form::open(array('url' => 'contacts_store', 'class' => 'form')) !!}

                <div class="form-group">
                    {!! Form::label('Your Name') !!}
                    {!! Form::text('name', null, 
                        array('required', 
                              'class'=>'form-control', 
                              'placeholder'=>'Your name')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Your E-mail Address') !!}
                    {!! Form::text('email', null, 
                        array('required', 
                              'class'=>'form-control', 
                              'placeholder'=>'Your e-mail address')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Your Message') !!}
                    {!! Form::textarea('message', null, 
                        array('required', 
                              'class'=>'form-control', 
                              'placeholder'=>'Your message')) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Contact Us!', 
                      array('class'=>'btn btn-success')) !!}
                </div>
                {!! Form::close() !!}
            </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">                    
                    <p class="copyright lead small">Copyright &copy; BCMS 2017. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>


</body>

</html>

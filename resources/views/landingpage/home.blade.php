<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <link rel="icon" href="{{ asset('landingpage/images/lakon_head.png') }}">
    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('landingpage/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('landingpage/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('landingpage/css/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('landingpage/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('landingpage/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('landingpage/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('landingpage/css/magnific-popup.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('landingpage/css/responsive.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>Lakon</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <div id="home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>

    <section id="slider" class="slider-element slider-parallax full-screen with-header swiper_wrapper clearfix">

        <div class="slider-parallax-inner">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">Welcome to <img src="{{ asset('landingpage/images/lakon_title.png')}}" alt="Lakon Logo"></h2>
                                {{--<p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>--}}
                            </div>
                        </div>
                        <div class="video-wrap">
                            <video poster="{{ asset('landingpage/images/videos/explore.jpg')}}" preload="auto" loop autoplay muted>
                                <source src="{{ asset('landingpage/images/videos/explore.mp4')}}" type='video/mp4' />
                                <source src="{{ asset('landingpage/images/videos/explore.webm')}}" type='video/webm' />
                            </video>
                            <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- Header
    ============================================= -->
    <header id="header" class="full-header">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>



                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu">

                    <ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
                        {{--<li><a href="#" data-href="#home"><div>Home</div></a></li>--}}
                        <li><a href="#" data-href="#section-about"><div>About</div></a></li>
                        <li><a href="#" data-href="#section-work"><div>Work</div></a></li>
                        <li><a href="#" data-href="#section-team"><div>Team</div></a></li>
                        <li><a href="#"><div>Careers</div></a></li>
                        <li><a href="#" data-href="#section-contact"><div>Contact</div></a></li>
                    </ul>

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search">
                        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                        <form action="" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Search...">
                        </form>
                    </div><!-- #top-search end -->

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

    <div class="clear"></div>

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <section id="section-about" class="page-section">

                <div class="container clearfix">

                    <div class="heading-block center">
                        <h2>We are <span>Lakon</span></h2>
                        <span>Your best IT Consultant.</span>
                    </div>

                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="{{ asset('landingpage/images/services/1.jpg')}}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
                                <p>More than 3 years experiences on software development. Web and mobile applications are our expertise.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="{{ asset('landingpage/images/services/2.jpg')}}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>Our Mission.<span class="subtitle">Being Top IT Consultant in the world.</span></h3>
                                <p>Being up to date with new technologies and improve our team skills, we believe we will be one of top IT Consultant in the world.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col_one_third nobottommargin col_last">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="{{ asset('landingpage/images/services/3.jpg')}}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
                                <p>Delivery a software with good quality and on time is our priority to make customer happy.</p>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>

                </div>

            </section>

            <section id="section-work" class="page-section topmargin-lg">

                <div class="heading-block center">
                    <h2>Our Works</h2>
                    <span>Some of the Awesome Projects we've worked on.</span>
                </div>

                <div class="container clearfix center">

                    <!-- Portfolio Items
                    ============================================= -->
                    <div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix">

                        <article class="portfolio-item pf-media pf-icons">
                            <div class="portfolio-image">
                                <a href="*">
                                    <img src="{{ asset('landingpage/images/portfolio/4/1.jpg')}}" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="{{ asset('landingpage/images/portfolio/full/1.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="*" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="*">MAPI</a></h3>
                                <span>Management API</span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-media pf-icons">
                            <div class="portfolio-image">
                                <a href="*">
                                    <img src="{{ asset('landingpage/images/portfolio/4/2.jpg')}}" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="{{ asset('landingpage/images/portfolio/full/2.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="*" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="*">MARSS</a></h3>
                                <span>Management RSS</span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-media pf-icons">
                            <div class="portfolio-image">
                                <a href="*">
                                    <img src="{{ asset('landingpage/images/portfolio/4/3.jpg')}}" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="{{ asset('landingpage/images/portfolio/full/3.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="*" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="*">RTO Application</a></h3>
                                <span>Well Real Time Operation</span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-media pf-icons">
                            <div class="portfolio-image">
                                <a href="*">
                                    <img src="{{ asset('landingpage/images/portfolio/4/4.jpg')}}" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="{{ asset('landingpage/images/portfolio/full/4.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="*" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="*">Semantic Analysis</a></h3>
                                <span>Our product for analyze content in text.</span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-media pf-icons">
                            <div class="portfolio-image">
                                <a href="*">
                                    <img src="{{ asset('landingpage/images/portfolio/4/5.jpg')}}" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="{{ asset('landingpage/images/portfolio/full/5.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="*" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="*">Company Profile CMS</a></h3>
                                <span>CMS for build company profile easier.</span>
                            </div>
                        </article>

                    </div><!-- #portfolio end -->

                </div>

            </section>

            <section id="section-team" class="page-section topmargin-lg">

                <div class="heading-block center">
                    <h2>Our Team</h2>
                    <span>People who have contributed enormously to our Company.</span>
                </div>

                <div class="container clearfix">

                    <div class="row">
                        <div class="col-lg-6 bottommargin">

                            <div class="team team-list clearfix">
                                <div class="team-image">
                                    <img src="{{ asset('landingpage/images/lakon_head.png') }}">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title"><h4>Randy Ashary Budiman</h4><span>CEO</span></div>
                                    <div class="team-content">Custom bike is my hobby.</div>
                                    <a href="#" class="social-icon si-rounded si-small si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-rounded si-small si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-rounded si-small si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 bottommargin">

                            <div class="team team-list clearfix">
                                <div class="team-image">
                                    <img src="https://avatars0.githubusercontent.com/u/3633802?v=4" alt="Nix Maxwell">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title"><h4>Indra Permana</h4><span>Co-Founder</span></div>
                                    <div class="team-content">A Father with high interest on blockchain technology.</div>
                                    <a href="#" class="social-icon si-rounded si-small si-forrst">
                                        <i class="icon-forrst"></i>
                                        <i class="icon-forrst"></i>
                                    </a>
                                    <a href="#" class="social-icon si-rounded si-small si-skype">
                                        <i class="icon-skype"></i>
                                        <i class="icon-skype"></i>
                                    </a>
                                    <a href="#" class="social-icon si-rounded si-small si-flickr">
                                        <i class="icon-flickr"></i>
                                        <i class="icon-flickr"></i>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="w-100"></div>

                        <div class="col-lg-6 bottommargin">

                            <div class="team team-list clearfix">
                                <div class="team-image">
                                    <img src="https://avatars2.githubusercontent.com/u/4028451?v=4">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title"><h4>Yoga Adhi Pradana</h4><span>Co-founder</span></div>
                                    <div class="team-content">None.</div>
                                    <a href="#" class="social-icon si-rounded si-small si-dribbble">
                                        <i class="icon-dribbble"></i>
                                        <i class="icon-dribbble"></i>
                                    </a>
                                    <a href="#" class="social-icon si-rounded si-small si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-rounded si-small si-github">
                                        <i class="icon-github"></i>
                                        <i class="icon-github"></i>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 bottommargin">

                            <div class="team team-list clearfix">
                                <div class="team-image">
                                    <img src="{{ asset('landingpage/images/lakon_head.png') }}">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title"><h4>Denny Chandra</h4><span>Software Architect</span></div>
                                    <div class="team-content">None.</div>
                                    <a href="#" class="social-icon si-rounded si-small si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-rounded si-small si-linkedin">
                                        <i class="icon-linkedin"></i>
                                        <i class="icon-linkedin"></i>
                                    </a>
                                    <a href="#" class="social-icon si-rounded si-small si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="fancy-title title-border title-center topmargin-sm">
                        <h4>Skills we are Perfect in</h4>
                    </div>

                    <div class="col_one_fourth nobottommargin center">
                        <div class="rounded-skill" data-color="#D01C1C" data-size="150" data-percent="90" data-width="2" data-animate="3000">
                            <div class="counter counter-inherit"><span data-from="1" data-to="90" data-refresh-interval="50" data-speed="3000"></span>%</div>
                        </div>
                        <h5>.NET Framework</h5>
                    </div>

                    <div class="col_one_fourth nobottommargin center">
                        <div class="rounded-skill" data-color="#1770A4" data-size="150" data-percent="85" data-width="2" data-animate="3000">
                            <div class="counter counter-inherit"><span data-from="1" data-to="75" data-refresh-interval="50" data-speed="3000"></span>%</div>
                        </div>
                        <h5>JAVA</h5>
                    </div>

                    <div class="col_one_fourth nobottommargin center">
                        <div class="rounded-skill" data-color="#6A89AA" data-size="150" data-percent="85" data-width="2" data-animate="3000">
                            <div class="counter counter-inherit"><span data-from="1" data-to="85" data-refresh-interval="50" data-speed="3000"></span>%</div>
                        </div>
                        <h5>PHP</h5>
                    </div>

                    <div class="col_one_fourth nobottommargin center col_last">
                        <div class="rounded-skill" data-color="#248673" data-size="150" data-percent="80" data-width="2" data-animate="3000">
                            <div class="counter counter-inherit"><span data-from="1" data-to="80" data-refresh-interval="50" data-speed="3000"></span>%</div>
                        </div>
                        <h5>Blockchain</h5>
                    </div>

                </div>

            </section>

            <section id="section-contact" class="page-section">

                <div class="heading-block title-center">
                    <h2>Get in Touch with us</h2>
                    <span>Still have Questions? Contact Us using the Form below.</span>
                </div>

                <div class="container clearfix">

                    <!-- Contact Form
                    ============================================= -->
                    <div class="col_half">

                        <div class="fancy-title title-dotted-border">
                            <h3>Send us an Email</h3>
                        </div>

                        <div class="contact-widget">

                            <div class="contact-form-result"></div>

                            <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

                                <div class="form-process"></div>

                                <div class="col_full">
                                    <label for="template-contactform-email">Email <small>*</small></label>
                                    <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                                </div>

                                <div class="clear"></div>

                                <div class="col_full">
                                    <label for="template-contactform-message">Message <small>*</small></label>
                                    <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                                </div>

                                <div class="col_full hidden">
                                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                </div>

                                <div class="col_full">
                                    <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                                </div>

                            </form>

                        </div>


                    </div><!-- Contact Form End -->

                    <!-- Google Map
                    ============================================= -->
                    <div class="col_half col_last">

                        <section id="google-map" class="gmap" style="height: 410px;"></section>


                    </div><!-- Google Map End -->

                </div>

            </section>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix">

                <div class="col_two_third">

                    <div class="col_one_third">

                        <div class="widget clearfix">

                            <img src="{{ asset('landingpage/images/lakon_title.png')}}" alt="Lakon Logo" class="footer-logo">

                            <p>Your best IT Consultant.</p>

                        </div>

                    </div>

                    <div class="col_one_third">

                        <div class="widget clearfix">

                            <div style="background: url({{ asset('landingpage/images/world-map.png')}}) no-repeat center center; background-size: 100%;">
                                <address>
                                    <strong>Headquarters:</strong><br>
                                    Jl. Cikambuy Tengah No. 24<br>
                                    Katapang, Bandung, Indonesia<br>
                                </address>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (+62) 8522 0583 936<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> info@lakon.in
                            </div>

                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    Copyrights &copy; 2018 All Rights Reserved by PT Lakon Teknologi Dwipantara.<br>
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script src="{{ asset('landingpage/js/jquery.js')}}"></script>
<script src="{{ asset('landingpage/js/plugins.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{ asset('landingpage/js/functions.js')}}"></script>

<script src="https://maps.google.com/maps/api/js?key=AIzaSyCyxGKMh0oA45q0EpnfqRJN6RERXW_Fq7Q"></script>
<script src="{{ asset('landingpage/js/jquery.gmap.js') }}"></script>

<script>

    jQuery('#google-map').gMap({

        address: 'Bandung, Indonesia',
        maptype: 'ROADMAP',
        zoom: 14,
        markers: [
            {
                address: "Bandung, Indonesia",
                html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
                icon: {
                    image: "{{ asset('landingpage/images/icons/map-icon-red.png') }}",
                    iconsize: [32, 39],
                    iconanchor: [32,39]
                }
            }
        ],
        doubleclickzoom: false,
        controls: {
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false
        }

    });
</script>

</body>
</html>
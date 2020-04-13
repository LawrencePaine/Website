<html class="no-js gr__lawrencepaine_eng" lang="en"><!--<![endif]--><head>
<meta charset="utf-8">
@extends('layouts.app')

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        #navbar {
            overflow: hidden;
            background-color: #333;
            }

        /* Navbar links */
        #navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px;
        text-decoration: none;
        }

        /* Page content */
        .content {
        padding: 16px;
        }

        /* The sticky class is added to the navbar with JS when it reaches its scroll position */
        .sticky {
        position: fixed;
        top: 0;
        width: 100%;
        }

        /* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
        .sticky + .content {
        padding-top: 60px;
        }

        .navbar-sticky-top
        {
            position: fixed;
            z-index: 999;
            opacity:1;
            width: 100%;
        }
    </style>

@section('content')
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="66" data-gr-c-s-loaded="true" style="display: block;">
    <header id="home" class="hero">
        <div class="hero-body">
            <div class="hero-text text-center">
                <h1>
                    Lawrence <strong>Paine</strong> <span class="blinker"></span>
                </h1>

                <h2 style="text-transform: uppercase; padding-top: 40px"><div><strong>Website</strong> Developer</div> <div style="padding-top: 10px">Certified <strong>Laravel</strong> Developer</div><div style="padding-top: 10px"><strong>PHP</strong> Developer</div></h2>

                <p class="uppercase" style="padding-top: 10px">Remote / Hull, England</p>

                <div class="page-scroll">
                    <a href="#profile" class="btn btn-lg btn-custom">
                        Know Me Better
                    </a>
                </div>
                <!-- // .page-scroll -->
            </div>
            <!-- // .hero-text -->
        </div>
        <!-- // .hero-body -->
    </header>

    <!-- NAVIGATION START -->
<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="page-scroll active"><a href="#home">Home</a></li>
        <li class="page-scroll"><a href="#profile">Profile</a></li>
        <li class="page-scroll"><a href="#portfolio">Portfolio</a></li>
        <li class="page-scroll"><a href="#achievements">Achievements</a></li>
        <li class="page-scroll"><a href="#portal">Portal</a></li>
        <li class="page-scroll"><a href="#contact">Contact</a></li>
    </ul>
  </div>
</nav>
    <!-- // NAVIGATION END -->

    <!-- PROFILE SECTION START -->
    <section id="profile" class="section" style="background-color: #222">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-7 match-height" style="height: 893px;">
                        <!-- PROFILE TEXT START -->
                        <div class="profile-text padding-right-yes">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="section-title">Hello, I'm Lawrence <strong>Paine</strong>.</h2>

                                    <p>Based in <strong>Hull, England</strong>, a freelance <strong><a href="/assets/docs/laravel-certificate-fraser-murray-2018-04-16.pdf">Laravel Certified</a> PHP developer</strong> with varied client portfolio from 19 years in commercial, academic and charity sectors.</p>

                                    <h4 style="padding-top: 30px; margin-bottom: 15px; font-size: 18px; text-transform: uppercase; font-weight: bold;">Availability</h4>

                                    <p>I have availability from mid-April 2020 for additional work on remote <strong>Laravel</strong>  or <strong>PHP</strong> website work, code auditing or mentoring to complement existing long-term projects that have variable but predictable monthly commitments.</p>

                                    <ul>
                                        <li>For an ongoing relationship on a part-time basis, from a few hours per month up to ~500 hours per year, or</li>
                                        <li>on a short-term contract, up to ~25 hours per week</li>
                                    </ul>

                                    <p>Hourly rate: £54</p>

                                    <p>Usual working hours: 9:30-5 (Tues), 9:30-3 (Mon, Fri), 9:30-11:30 (Wed, Thurs), to fit around existing school drop-off/pick-ups, plus some additional evening/weekend hours if necessary.</p>

                                    <p>Current working hours: during the pandemic I likely won't be keeping consistent working hours and it may take longer to answer support tickets than normal.</p>

                                    <div class="contact-details">
                                        <h4 style="padding-top: 10px; font-weight: bold;">Contact Details</h4>

                                        <ul class="list-unstyled text-grey">
                                            <li>Lawrence Paine</li>
                                            <li>16 Yeoman Drive, Beverley, UK, HU17 8FG</li>
                                            <li><a href="tel:+447904343518">+44 7904 343 518</a></li>
                                            <li><a href="mailto:l.paine@hotmail.co.uk">l.paine@hotmail.co.uk</a></li>
                                            <li><a href="https://lawrencepaine.co.uk">lawrencepaine.co.uk</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1 hidden-xs hidden-sm match-height pp-wrapper" style="height: 893px;">
                        <div class="profile-picture style-one">
                            <img src="/assets/images/fraser.png" alt="profile picture" class="img-responsive">
                        </div>
                    </div>
                    <!-- //PROFILE PICTURE END -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    
    <!-- // PROFILE SECTION END -->

</body><html

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = {
            csrfToken: '{{ csrf_token() }}'
        }
    </script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <!-- <link href="/css/main.css" rel="stylesheet"> -->
    <!-- Styles -->
    <style>
        body,
        html {
            font-size: 100%;
            font-family: "Helvetica", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #636b6f;
            text-align: center;
        }

        main {
            height: 1000px;
        }

        h1 {
            text-align: center;
            color: white;
        }

        h2 {
            text-align: center;
            color: white
        }

        p {
            text-align: center;
            color: white;
        }

        #logo {
            font-size: 20px;
            font-weight: bold;
            float: left;
            padding: 15px 15px;
        }

        #nav {
            position: sticky;
            bottom: 0;
            color: #5e90d6;
            background-color: #5e90d6;
            border: 2px solid goldenrod;
            align-items: center;
        }

        .navbar-top {
            position: sticky;
            top: 0;
            color: black;
            background-color: #5e90d6;
            border: 2px solid goldenrod;
            align-items: center;
        }

        .profile-text {
            padding-top: 100px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            position: sticky;
            bottom: 0;
            align-items: center;
        }

        nav ul li a {
            color: #ddd;
            text-decoration: none;
            padding: .8rem 1rem;
            display: block;
            line-height: 1;
            text-align: center;
            border-color: goldenrod;
        }

        nav ul li {
            border-bottom: 1px dotted #ddd;
        }

        /*styling logo*/

        nav div:first-child {
            background: #5e90d6;
            border-color: goldenrod;
        }

        nav div:first-child h1 {
            line-height: 0;
            padding: .8rem 0rem;
            text-align: center;
        }

        nav div:first-child img {
            filter: contrast(0);
        }

        nav div:first-child h1,
        nav ul {
            margin: 0;
        }

        .skillsSection {
            display: flex;
            background-color: #242629;
            border-bottom: 3px solid #010101;
            border-top: 3px solid #010101;
            position: relative;
            z-index: 3;
            margin-top: 50px;
        }

        .skills {
            border-right: 1.5px solid #010101;
            width: 50%;
        }

        .tools {
            border-left: 1.5px solid #010101;
            width: 50%;
        }

        .socials {
            border-right: 1.5px solid #010101;
            width: 50%;
        }

        .skills img {
            vertical-align: middle;
            border-style: none;
            width: 11%;
            max-width: 130px;
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
            border: 3px solid #010101;
            border-radius: 5px;
            padding: 5px;
            background-color: white;
        }

        .tools img {
            vertical-align: middle;
            border-style: none;
            width: 11%;
            max-width: 130px;
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
            border: 3px solid #010101;
            border-radius: 5px;
            padding: 5px;
            background-color: white;
        }

        .socials img {
            vertical-align: middle;
            border-style: none;
            width: 11%;
            max-width: 130px;
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
            border: 3px solid #010101;
            border-radius: 5px;
            padding: 5px;
            background-color: white;
        }

        .Icons {
            margin-top: 50px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;
            margin-top: 10%;
            width: 60%;
            min-width: 500px;
            margin: 10% auto;
        }

        .section-title {
            color: #5e90d6;
        }

        /*Styling for larger devices*/

        @media only screen and (min-width: 30em) {
            #nav {
                display: flex;
                justify-content: space-between;
                background-color: #5e90d6;
                border: 2px solid goldenrod;
                align-items: center;
                position: sticky;
            }

            .navbar-top {
                position: sticky;
                top: 0;
                color: black;
                background-color: #5e90d6;
                border: 2px solid goldenrod;
                align-items: center;
            }

            nav ul {
                display: flex;
                align-items: center;
                background: none;
                flex-wrap: wrap;
            }

            nav div:first-child h1 {
                padding: 0;
                margin: 0 1rem;
            }

            nav div:first-child img {
                height: 40px;

            }

            nav ul li {
                border-bottom: none;
                flex: 1 0 auto;
                position: relative;
            }

            nav ul li a {
                padding: 1.2rem 1rem;
            }

            nav ul li a::before,
            nav ul li a::after {
                content: "";
                position: absolute;
                bottom: 0;
                right: 0;
                width: 0%;
                height: 2px;
                background: goldenrod;
                transition: .2s width ease-in-out;
            }

            nav ul li a::before {
                left: 0;
            }

            nav ul li a:hover::after,
            nav ul li a:hover::before {
                width: 50%;
            }

        }
    </style>
</head>

<body>
    <Header id="home" class="hero" style="background-color: #002c6a">
        <div class="hero-body">
            <div class="hero-text text-center">
                <h1><strong>Lawrence Paine</strong></h1>
                <h2 style="text-transform: uppercase; padding-top: 40px;">
                    <div><strong>Website and Software</strong> Developer</div>
                </h2>
                <p class="uppercase" style="padding-top: 10px">Beverley, England</p>
                <a href="#about" class="btn btn-lg btn-custom" style="color:goldenrod; border-color:goldenrod; background-color:white">
                    Know Me Better
                </a>
            </div>
    </header>

    <!-- about SECTION START -->
    <section id="about" class="section" style="text-align:center; background-color: white; border-color:goldenrod">
        <div class="container section-wrapper">
            <div class="section-content" style="border-color: #DAA520">
                <div class="row">
                    <div class="col-md-7 match-height" style="height: 430px;">
                        <!-- PROFILE TEXT START -->
                        <div class="profile-text padding-right-yes">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="section-title" style="color: #002c6a">Hello, I'm Lawrence <strong>Paine</strong>.</h2>
                                    <p style="color: #002c6a">I am a website developer Based in <strong>Hull, England</strong></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
        <!-- skills sections -->
    </section>

    <div id="app">
        <navbar></navbar>
        <script src="{{ asset('Utilities/navscroll.js') }}" defer></script>
        <div class="container">
            <header></header>
        </div>
    </div>

    <!-- skills SECTION START -->
    <section id="skills" class="skillsSection">
        <div class="skills">
            <h2>skills<i class="fas fa-laptop-code"></i></h2>
            <div class="skillIcons">
                <img src="https://d33wubrfki0l68.cloudfront.net/a0b457393dccfdd658d709b890a3fddd4ef5756c/e0e04/images/html-5.png" alt="HTML5" title="HTML">
                <img src="https://img.icons8.com/color/96/000000/css3.png" alt="CSS3" title="CSS">
                <img src="https://d33wubrfki0l68.cloudfront.net/e336e2d67b2b7ee10a5eda0a7f8774919d415b3b/195fb/images/javascript.svg" alt="Javascript" title="Javascript">
                <img src="https://d33wubrfki0l68.cloudfront.net/e336e2d67b2b7ee10a5eda0a7f8774919d415b3b/195fb/images/javascript.svg" alt="Vue.js" title="Vue.js">
                <img src="https://d33wubrfki0l68.cloudfront.net/b07d9965cb676ba5e2ec0f07920649daad9017fa/44776/images/bootstrap.svg" alt="Bootstrap" title="Bootstrap">
            </div>
        </div>
        <div class="tools">
            <h2>Tools<span><i class="fas fa-tools"></i></span></h2>
            <div class="toolIcons">
                <img src="https://d33wubrfki0l68.cloudfront.net/5cc94dbf3550367469e38ae50f07a2fe0e7b8bd4/bfd9e/images/github-icon.svg" alt="Github" title="Github">
                <img src="https://d33wubrfki0l68.cloudfront.net/96ffae14bb32bbf970892f78d77b3704f9104309/a9dae/images/visual-studio-code.svg" alt="Visual Studio Code" title="Visual Studio Code">
                <img src="https://img.icons8.com/windows/96/000000/laravel.png" alt="larvel" title="laravel">
            </div>
        </div>
    </section>

    <!-- skills SECTION START -->
    <section id="portfolio" class="portfolioSection">
        <div class="portfolio">
            <h2 style="color: #002c6a">portfolio<i class="fas fa-laptop-code"></i></h2>
        </div>
        <div class="currentProjects">
            <h2 style="color: #002c6a">Current Projects<span><i class="fas fa-tools"></i></span></h2>
            <h2 style="color: #002c6a">Coming soon<span><i class="fas fa-tools"></i></span></h2>
        </div>
    </section>

    <!-- contact SECTION START -->
    <section id="contact" class="section" style="background-color:#002c6a; border-color:goldenrod">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="hero-body">
                        <div class="hero-text text-center" style="height: 250px">
                            <div class="contact-details">
                                <h4 style="padding-top: 10px; font-weight: bold; color: goldenrod">Contact Details</h4>
                                <ul class="list-unstyled text-grey">
                                    <li style="color: goldenrod">Lawrence Paine</li>
                                    <li style="color: goldenrod">16 Yeoman Drive, Beverley, UK, HU17 8FG</li>
                                    <li><a href="tel:+447904343518" style="color: goldenrod">+44 7904 343 518</a></li>
                                    <li><a href="mailto:l.paine@hotmail.co.uk" style="color: goldenrod">l.paine@hotmail.co.uk</a></li>
                                    <li><a href="https://lawrencepaine.co.uk" style="color: goldenrod">lawrencepaine.co.uk</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="socials">
                            <div class="socialIcons">
                                <img src=https://img.icons8.com/color/144/000000/linkedin.png alt="LinkedIn" title="LinkedIn">
                                <img src="https://img.icons8.com/color/144/000000/twitter.png" alt="Twitter" data-title="Twitter">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
    </section>
    <script src="{{ asset('Utilities/navscroll.js') }}" defer></script>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
<!-- @section('content') -->

<!-- <nav id="nav" style="position: sticky" class="nav">
    <ul>
        <li class="page-scroll active"><a href="#home">Home</a></li>
        <li class="page-scroll active"><a href="#about">about</a></li>
        <li class="page-scroll active"><a href="#skills">skills</a></li>
        <li class="page-scroll active"><a href="#portfolio">Portfolio</a></li>
        <li class="page-scroll active"><a href="#achievements">Achievements</a></li>
        <li class="page-scroll active"><a href="#contact">Contact</a></li>
    </ul>
    <script src="{{ asset('Utilities/navscroll.js') }}" defer></script>
</nav> -->

</html>
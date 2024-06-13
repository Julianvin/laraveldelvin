<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shape &mdash; Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co">
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive">
    <meta name="author" content="FreeHTML5.co">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Add additional CSS files as needed -->

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>

    <!-- Respond.js for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
    
    <style>
        /* Custom styles to make profile section full width with clear background */
        body {
            overflow-x: hidden; /* Hide horizontal overflow */
            font-family: 'Work Sans', Arial, sans-serif; /* Use 'Work Sans' from Google Fonts */
        }

        #fh5co-header {
            background-image: url({{ asset('images/img_bg_1.jpg') }});
            background-size: cover;
            background-position: center center;
            height: 100vh; /* Adjust height as needed */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff; /* Text color */
            position: relative; /* Ensure position is relative for overlay */
        }

        #fh5co-header .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(63,74,78, 0.7); /* Adjust overlay color and opacity */
        }

        #fh5co-header h1 {
            font-size: 3.5em; /* Adjust font size */
            margin-bottom: 10px; /* Adjust margin */
            line-height: 1.2; /* Adjust line height */
        }

        #fh5co-header h3 {
            font-size: 1.5em; /* Adjust font size */
            max-width: 70%; /* Limit width to prevent too long lines */
            margin: 0 auto 30px; /* Adjust margins */
            line-height: 1.6; /* Adjust line height */
        }

        #fh5co-header .btn {
            font-size: 1.2em; /* Adjust button font size */
            padding: 12px 30px; /* Adjust button padding */
        }

        /* Additional custom styles as needed */
    </style>
    
</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center menu-1">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/work') }}">Work</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <header id="fh5co-header" class="fh5co-cover" role="banner">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeInUp">
                            <h1 class="mb30">MY PORTFOLIO</h1>
                            <h3>
                                Let me introduce myself, my name is M DELVIN JULIAN, I am a student at Wikrama Vocational School, Bogor. I am interested in learning more of front end web development.
                            </h3>
                            <p>
                                <a href="{{ url('/work') }}" class="btn btn-primary btn-lg">See My Work</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Other sections as needed -->

</div>

<!-- JS -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>

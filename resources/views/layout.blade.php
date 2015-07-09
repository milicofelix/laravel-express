<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Le styles -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
    <link href="{{ asset('/css/bootstrap-responsive.css') }}" rel="stylesheet">

</head>

<body>

<div class="navbar ">
    <div class="navbar-inner">
        <div class="container">
            <h3 class="brand">My first blog in Laravel</h3>
                <ul class="nav nav-pills" role="tablist">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>

        </div>
    </div>
</div>

<div class="container">

    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
        <h1>Hello, Everybody!</h1>
        <p>This is my first blog building in Laravel framework and I want share everything that I know and larning along the time.</p>
        <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
    </div>

    <!-- Example row of columns -->
    <div class="row">
        <div class="span4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
    </div>

    <hr>

    <footer>
        <p>&copy; Company 2013</p>
    </footer>

</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap-transition.js') }}"></script>
<script src="{{ asset('/js/bootstrap-alert.js') }}"></script>
<script src="{{ asset('/js/bootstrap-modal.js') }}"></script>
<script src="{{ asset('/js/bootstrap-dropdown.js') }}"></script>
<script src="{{ asset('/js/bootstrap-scrollspy.js') }}"></script>
<script src="{{ asset('/js/bootstrap-tab.js') }}"></script>
<script src="{{ asset('/js/bootstrap-tooltip.js') }}"></script>
<script src="{{ asset('/js/bootstrap-popover.js') }}"></script>
<script src="{{ asset('/js/bootstrap-button.js') }}"></script>
<script src="{{ asset('/js/bootstrap-collapse.js') }}"></script>
<script src="{{ asset('/js/bootstrap-carousel.js') }}"></script>
<script src="{{ asset('/js/bootstrap-typeahead.js') }}"></script>

</body>
</html>

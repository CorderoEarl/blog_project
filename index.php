<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="stylekoto.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>

<body style="background: silver;">
    <nav class="navbar navbar-custom">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">The BLOG</a>
            </div>

            <div class="nav navbar-nav form-inline navbar-right" style="padding: 10px">
                <div class="input-group">
                    <input type="text" class="form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </div>

                </div>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="post.php">Post</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>

        </div>

    </nav>

    <header style="background: url(images/header.jpg);">
        <div class="text-center">
            <h1>The Blog</h1>
            <div class="lead">Welcome to My Blog</div>    
        </div>
    </header>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div id="post">
                <h1><a href="#">My Topic on my Blog</a></h1>
                <p class="lead">Tell something about your blog goes here...</p>
                <p>04-23-2024</p>
            </div>

            <div id="post">
                <h1><a href="#">My Topic on my Blog</a></h1>
                <p class="lead">Tell something about your blog goes here...</p>
                <p>04-23-2024</p>
            </div>

            <div id="post">
                <h1><a href="#">My Topic on my Blog</a></h1>
                <p class="lead">Tell something about your blog goes here...</p>
                <p>04-23-2024</p>
            </div>

            <div id="post">
                <h1><a href="#">My Topic on my Blog</a></h1>
                <p class="lead">Tell something about your blog goes here...</p>
                <p>04-23-2024</p>
            </div>

            <div id="post">
                <h1><a href="#">My Topic on my Blog</a></h1>
                <p class="lead">Tell something about your blog goes here...</p>
                <p>04-23-2024</p>
            </div>

            <div class="down-btn text-right">
                <button class="btn btn-default btn-lg">Older Post</button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <ul class="nav navbar-nav nav-mycenter">
            <li><a href="">Home</a></li>
            <li><a href="#">Technology</a></li>
            <li><a href="#">Health</a></li>
            <li><a href="#">Science</a></li>
            <li><a href="#">Nature</a></li>
        </ul>
    </div>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="author" content="Martin Bean" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title_for_layout; ?> &middot; Bootstrap Generator</title>
    <link href="https://plus.google.com/110489464750063548232" rel="author" />
    <link href="/assets/ico/favicon.ico" rel="shortcut icon" />
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/application.css" rel="stylesheet" />
  </head>
  <body>
    <div class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="/" rel="home">Bootstrap Generator</a>
          <button class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse nav-collapse">
            <ul class="nav pull-left">
              <li><a href="/">Home</a></li>
              <li><a href="/themes/generate">Generate Theme</a></li>
            </ul>
            <ul class="nav pull-right">
              <li><a href="/login">Login</a></li>
              <li><a href="/register">Register</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <section class="main-wrapper" role="main">
<?php echo $content_for_layout; ?>
      </section>
    </div>
    <footer class="footer" role="contentinfo">
      <div class="container">
        <p>Bootstrap Generator developed by <a href="http://www.martinbean.co.uk/" rel="external">Martin Bean</a>.</p>
        <p>&copy; <?php echo date('Y'); ?> Martin Bean. All rights reserved.</p>
        <ul class="footer-links">
          <li><a href="https://github.com/martinbean/bootstrap-generator" rel="external">GitHub project</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/martinbean/bootstrap-generator/issues" rel="external">Issues</a></li>
        </ul>
      </div>
    </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/application.js"></script>
  </body>
</html>
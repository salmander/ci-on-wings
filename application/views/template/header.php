    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title><?= isset($heading) ? $heading : 'Did you forget to add "$heading"?' ?></title>

        <!-- Bootstrap core CSS -->
        <?php echo link_tag('/assets/bootstrap/bootstrap-3.3.5-dist/css/bootstrap.min.css', 'stylesheet', 'text/css'); ?>
        <?php echo link_tag('/assets/bootstrap/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css', 'stylesheet', 'text/css'); ?>

        <!-- Custom styles for this template -->
        <?php echo link_tag('/assets/bootstrap/bootstrap-3.3.5-dist/css/sticky-footer-navbar.css', 'stylesheet', 'text/css'); ?>

        <script type="text/javascript" src="/assets/bootstrap/bootstrap-3.3.5-dist/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

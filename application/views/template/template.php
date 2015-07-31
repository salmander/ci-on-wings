<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'header.php' ?>
    </head>
    <body>
        <?php require_once 'nav_bar.php' ?>

        <!-- Begin page content -->
        <div class="container">
          <div class="page-header">
            <h1><?= isset($heading) ? $heading : 'Did you forget to add "$heading" missing?' ?></h1>
          </div>
          <?= isset($main_content) ? $main_content : 'Missing body???' ?>
        </div>

        <footer class="footer">
            <?php require_once 'footer.php' ?>
        </footer>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/assets/bootstrap/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="/assets/bootstrap/bootstrap-3.3.5-dist/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>

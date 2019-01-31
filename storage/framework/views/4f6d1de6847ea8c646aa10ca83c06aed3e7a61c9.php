<!doctype>
<html>
    <head>
        <title>
            <?php echo $__env->yieldContent('title'); ?>
        </title>
        <link rel="stylesheet" href="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet" />
    </head>
    <body>
        <div class="background">
            <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
            </div>  
        </div>

        <footer>
          <center> &copy; Copyright </center>
        </footer>
    </body>
</html>
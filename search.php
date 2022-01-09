<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Grow faster with GrowByData">
    <title>Grow faster with GrowByData</title>

    <!-- Bootstrap -->

    <link href="components/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="components/assets/css/main.min.css" rel="stylesheet">
    <link href="components/assets/css/media.min.css" rel="stylesheet">


    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700,500' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicons
	================================================== -->
    <link rel="shortcut icon" type="image/jpeg" href="images/favicon.png">
</head>
<body>
<header class="gbd-main-wrap">
    <?php require_once "components/header/header.php"; ?>
</header>
<section class="gbd-content gbd-search-section">
    <div class="container">
        <div class="row vision-blocks">
            <div class="col-sm-6">
                <img src="components/assets/images/mac-ipad.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-sm-6">
                <h3>Search</h3>

                <form class="form-inline search-form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Search">
                    </div>

                    <button type="submit" class="btn red-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php require_once "components/footer/footer.php"; ?>

<style>
    .gbd-search-section{
        padding: 100px 0 0;
        background: #fbfbfb;
    }
    .form-inline.search-form {
        text-align: center;
        margin: 50px auto;
    }

    .form-inline.search-form .form-control {
        border-radius: 4px;
        min-width: 300px;
    }

    .form-inline.search-form button.btn {
        margin: 0 auto;
    }
</style>
</body>
</html>
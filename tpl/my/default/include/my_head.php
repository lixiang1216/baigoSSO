<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html lang="<?php echo substr($this->config['lang'], 0, 2); ?>">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $cfg['title']; ?> - <?php echo BG_SITE_NAME; ?></title>

    <!--jQuery 库-->
    <script src="<?php echo BG_URL_STATIC; ?>lib/jquery.min.js" type="text/javascript"></script>
    <link href="<?php echo BG_URL_STATIC; ?>lib/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo BG_URL_STATIC; ?>lib/baigoValidator/baigoValidator.css" type="text/css" rel="stylesheet">
    <link href="<?php echo BG_URL_STATIC; ?>lib/baigoSubmit/baigoSubmit.css" type="text/css" rel="stylesheet">

    <link href="<?php echo BG_URL_STATIC; ?>css/common.css" type="text/css" rel="stylesheet">
    <link href="<?php echo BG_URL_STATIC; ?>my/<?php echo BG_SITE_TPL; ?>/css/my.css" type="text/css" rel="stylesheet">

</head>
<body>

    <div class="container">
        <div class="bg-panel">
        <h3><?php echo BG_SITE_NAME; ?></h3>
            <div class="panel panel-success">
                <div class="panel-heading bg-panel-heading">
                    <img class="img-responsive center-block" src="<?php echo BG_URL_STATIC; ?>my/<?php echo BG_SITE_TPL; ?>/image/logo.png">
                </div>

                <div class="panel-body">
                    <h4>
                        <?php echo $cfg['title']; ?>
                    </h4>
                    <hr>
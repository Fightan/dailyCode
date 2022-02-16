<?php
    require "./core/rooter.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <title><?=$titre?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/reset.css">
        <link rel="stylesheet/less" href="style/<?= $cssJs ?>.less">
        <link rel="stylesheet/less" href="style/header.less">
        <link rel="stylesheet/less" href="style/footer.less">
        <script src="https://cdn.jsdelivr.net/npm/less@4.1.1"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <?= app::listRessources() ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
        <script src="js/<?= $cssJs ?>.js" async></script>
    </head>

    <body>
        <?php echo $content; ?> 
    </body>
</html>
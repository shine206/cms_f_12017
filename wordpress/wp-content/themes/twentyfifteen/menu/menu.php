<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('./7054/less/7054.less', 'css/7054.css');
    $less->compileFile('./7011/less/7011.less', 'css/7011.css');
    $less->compileFile('./7025/less/7025.less', 'css/7025.css');
    $less->compileFile('./7043/less/7043.less', 'css/7043.css');
    $less->compileFile('./7000/less/7000.less', 'css/7000.css');
    ?>
    <link href="css/7054.css" rel="stylesheet" type="text/css"/>
    <link href="css/7011.css" rel="stylesheet" type="text/css"/>
    <link href="css/7025.css" rel="stylesheet" type="text/css"/>
    <link href="css/7043.css" rel="stylesheet" type="text/css"/>
    <link href="css/7000.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" ></script>
    <script src="js/modul-0-splash.js" ></script>

</head>
<body>
    <?php include './7000/7000-content.php'; ?>
    <div id="menu-gallery" class="menu-gallery" style="display: none;">
        <?php include './7025/7025-content.php'; ?>
        <?php include './7054/7054-content.php'; ?>
        <?php include './7043/7043-content.php'; ?>
        <?php include './7054/7054-content.php'; ?>
        <?php include './7043/7043-content.php'; ?>
        <?php include './7054/7054-content.php'; ?>
        <?php include './7011/7011-content.php'; ?>
    </div>
    
</body>
</html>

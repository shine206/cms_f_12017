<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Module 7054</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/7054.less', 'css/7054.css');
    ?>
    <link href="css/7054.css" rel="stylesheet" type="text/css"/>


</head>
<body>
    <div style="height: 150px; background: #eee;"></div>
    <?php include '../7054/7054-content.php'; ?>
</body>
</html>





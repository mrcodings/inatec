<html>

<head>
    <title>Belajar Bootstrap v3.4.1</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Panel</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Carousel</a>
            </li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Modal</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Collapse</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home"><?php include("panel.php"); ?></div>
            <div role="tabpanel" class="tab-pane" id="profile"><?php include("carousel.php"); ?></div>
            <div role="tabpanel" class="tab-pane" id="messages"><?php include("modal.php"); ?></div>
            <div role="tabpanel" class="tab-pane" id="settings"><?php include("collapse.php"); ?></div>
        </div>
    </div>
</body>

</html>
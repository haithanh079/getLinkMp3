<html>
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<div class="container center">
    <h4>GetLink MP3.zing</h4>
    <h5>Copy and paste link here:</h5>
    <form role="form"
          action="index.php"
          method="POST" id="link">
        <input type="text" name="link" class="form-control" id="link" placeholder="Copy link here:" required>
        <button type="submit" class="btn waves-effect waves-red">GET LINK</button>
    </form>
    <?php
    define('PATH', __DIR__);
    require(PATH . '/getlink.php');
    //Kiểm tra tồn tại dữ liệu post
    if (isset($_POST['link']))
    {
        $mp3Link = $_POST['link'];

        $getLink = new getLink();
        //Lấy link api
        $apiLink = $getLink->mp3Link($mp3Link);
        //Lấy link lossless
        $jsonLink = $getLink->generatorLink($apiLink);
//        echo $getLink->getLink320($jsonLink);
        $mp3=$getLink->getLink320($jsonLink);
        echo "<br>";
//        echo $getLink->getLinkLossless($jsonLink);
        $flac=$getLink->getLinkLossless($jsonLink);

    echo '<ul class="collection with-header">
        <li class="collection-item">
            <div><span class="new badge" data-badge-caption="320Kbps"></span>Tải xuống bài hát<a
                        href="';
                        echo $mp3; 
                        echo '"
                        class="secondary-content"><i class="material-icons">download</i></a></div>
        </li>
        <li class="collection-item">
            <div><span class="new badge" data-badge-caption="Lossless"></span>Tải xuống bài hát<a href="';
            echo $flac; echo '"
                        class="secondary-content"><i class="material-icons">download</i></a></div>
        </li>
    </ul>';
    }
    ?>
</div>
</body>
</html>

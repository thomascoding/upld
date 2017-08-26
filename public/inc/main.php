<?php

if (!defined('IN_SCRIPT')) {
    header('location: ../index.php');
    exit;
}

$i = 0;
$allowed_size = ALLOWED_SIZE;

while ($allowed_size >= 1000) {
    $allowed_size = ($allowed_size / 1000);
    ++$i;
}

$units = array('', 'K', 'M');

$size = round($allowed_size, 1) . $units[$i];

?>

    <div class="box">
        МышкПик
    </div>


<div class="box">
<?php

if ((ANON_UPLOADS === true) || ((ANON_UPLOADS === false) && (isset($_SESSION['user'])))) {

    ?>

    <div id="select-image" class="box">
        Добавить картинку
    </div>

    <form id="upload-form" class="hidden" name="upload" method="POST" action="upload.php" enctype="multipart/form-data">
        <input id="image-input" name="image" type="file" onchange="this.form.submit()"/>
    </form>

    <div id="cancel-image" class="hidden">
        <span>wait, I want to upload something else!</span>
    </div>

    <?php

    if (ALLOW_REMOTE === true) {

        ?>

        <form id="url-form" name="remote-url" method="POST" action="upload.php">

            <div id="download-url" class="box">
                <input id="image-url-submit" type="submit" value="Скачать"/>
            </div>

            <div id="select-url" class="box">
                <input id="select-url-input" name="url" type="text"
                       placeholder="Скачать по ссылке"/>
            </div>
        </form>

        <?php

    }

} else {

    ?>

    <div class="box">Anonymous uploads have been disabled, please <a href="register.php">create an account</a> or <a
            href="login.php">log in</a> to upload
    </div>

    <?php

}

?>
    </div>

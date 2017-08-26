<?php

if (!defined('IN_SCRIPT')) {
    header('location: ../index.php');
    exit;
}

?>

<div id="sidebar">

    <ul id="links" class="box sidebar-box">

        <li>1. bb код большая картинка</li>
        <li><input type="text" size="25" value="[img]<?php echo IMAGES_URL . $id . '.' . $ext; ?>[/img]" readonly/></li>

        <li>2. bb код  картинка 600x600</li>
        <li><input type="text" size="25" value="[img]<?php echo SMALL_IMAGES_URL . $id . '.' . $ext; ?>[/img]" readonly/></li>

        <li>3. bb код большая картинка  со ссылкой</li>
        <li><input type="text" size="25"
                   value="[url=<?php echo VIEW_URL . $id; ?>][img]<?php echo IMAGES_URL . $id . '.' . $ext; ?>[/img][/url]"
                   readonly/></li>
        <li>4. bb код  картинка 600x600 со ссылкой</li>
        <li><input type="text" size="25"
                   value="[url=<?php echo VIEW_URL . $id; ?>][img]<?php echo SMALL_IMAGES_URL . $id . '.' . $ext; ?>[/img][/url]"
                   readonly/></li>

        <li style="margin-top: 20px">5. preview link (email &amp; chat)</li>
        <li><input type="text" value="<?php echo VIEW_URL . $id; ?>" readonly/></li>
        <li>6. direct link (websites &amp; backgrounds)</li>
        <li><input type="text" value="<?php echo IMAGES_URL . $id . '.' . $ext; ?>" readonly/></li>
        <li>7. html code (websites)</li>
        <li><input type="text" size="25"
                   value="<img src=&#34;<?php echo IMAGES_URL . $id . '.' . $ext; ?>&#34; alt=&#34;<?php echo $id; ?>&#34; />"
                   readonly/></li>

    </ul>

    <ul id="info" class="box sidebar-box">
        <li>image ID: <?php echo $id; ?></li>
        <li>image dimensions: <?php echo $dimensions[0] . 'x' . $dimensions[1]; ?></li>
        <li>image size: <?php echo($size > 1024 ? round(($size / 1024), 1) . 'MB' : round($size, 1) . 'KB'); ?></li>
        <li>image type: <?php echo $ext; ?></li>

        <?php

        if (isset($_SESSION['admin'])) {

            ?>

            <li>upload time: <?php echo $time; ?></li>
            <li>uploader IP: <?php echo $ip; ?></li>

            <?php

        }

        ?>

    </ul>

    <ul id="report">

        <?php

        if (isset($_SESSION['admin']) || (isset($_SESSION['user']) && ($_SESSION['user'] === $user))) {

            ?>

            <li><a class="delete" href="delete.php?id=<?php echo $id; ?>">DELETE this image</a></li>

            <?php

        } else {

            ?>

            <li><a href="report.php?id=<?php echo $id; ?>">report this image</a></li>

            <?php

        }

        if (isset($_SESSION['admin'])) {

            ?>

            <li><a id="ban" href="ban.php?id=<?php echo $user; ?>">BAN user and DELETE ALL IMAGES</a></li>

            <?php

        }

        ?>

    </ul>

</div>

<div id="image" class="box">
    <img src="<?php echo IMAGES_URL . $id . '.' . $ext; ?>"/>
</div>


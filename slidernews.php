<?php
$data = new MysqlClass();
$data->connetti();
?>

<div id="showcase" class="showcase" >
    <?php
    $SqlString = "select * from news order by data desc limit 5  ";
    $post_sql = $data->query($SqlString);
    if (trim($lingua) == "eng") {
        if (mysql_num_rows($post_sql) > 0) {
            while ($post_obj = $data->estrai($post_sql)) {
                ?>

                <div>
                    <a href="#s9" onclick="initjpages()">
                        <p class="titolo_news"><?= $post_obj->titolo_en ?></p>
                        <p class="data_news <?php if ($post_obj->foto == "") echo "no"; ?>"><?= $post_obj->data ?></p>
                        <p class="testo_news <?php if ($post_obj->foto == "") echo "noimg"; ?>"><?= $post_obj->descrizione_en ?></p>
                        <?php if (trim($post_obj->foto) != "") { ?><div class="img1" style="background: url('upload/<?= $post_obj->foto ?>') no-repeat center center;"  ></div><?php } ?>
                    </a>
                </div>
                <?php
            }
        }
    } else {
        if (mysql_num_rows($post_sql) > 0) {
            while ($post_obj = $data->estrai($post_sql)) {
                ?>
                <div>
                    <a href="#s9" onclick="initjpages()">
                        <p class="titolo_news"><?= $post_obj->titolo ?></p>
                        <p class="data_news <?php if ($post_obj->foto == "") echo "no"; ?>"><?= format_data($post_obj->data) ?></p>
                        <p class="testo_news <?php if ($post_obj->foto == "") echo "noimg"; ?>"><?= $post_obj->descrizione ?></p>
            <?php if (trim($post_obj->foto) != "") { ?><div class="img1" style="background: url('upload/<?= $post_obj->foto ?>') no-repeat center center;"  ></div><?php } ?>
                    </a>
                </div>
            <?php
        }
    }
}
?>


</div>

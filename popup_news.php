<?php
include 'lib/funzioni.php';
$data2 = new MysqlClass();
$data2->connetti();
$id = $_GET['id'];
?>

<div id="popup_news" >
    <?php
    $SqlString = "select * from news where id=" . $id;
    $post_sql = $data2->query($SqlString);
    if (mysql_num_rows($post_sql) > 0) {
        while ($post_obj = $data2->estrai($post_sql)) {
            ?>
            <?php if (trim($post_obj->foto) != "") { ?><div id="img_n" style="background:url('upload/<?= $post_obj->foto ?>') no-repeat center center;" ></div><?php } ?>
  <div id="titolo_news_in"><?= $post_obj->titolo ?></div>       

            <div id="testo_news_in"><?= $post_obj->descrizione ?></div>
            <p id="data_news_in"><?= $post_obj->data ?></p>
          


            <?php
        }
    }
    ?>


</div>

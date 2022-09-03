<?php

    $img = $_FILES['img'];
    $erorr = array();
    $img_name = $img['name'];
    $img_tmp = $img['tmp_name'];
    $img_size = $img['size'];
    $img_s = array("png","jpg","gif","jpeg");
    $img_t = strtolower(end(explode('.', $img_name)));
    if($img_size > 1000000){   
        $erorr[] = 'size erorr';
    }elseif(in_array($img_t, $img_s)){
        move_uploaded_file($img_tmp, './img/' .$img_name);
    }else{
        $erorr[] = "type erorr";
    }
    foreach ($erorr as $erorr) {
        echo $erorr;
    }


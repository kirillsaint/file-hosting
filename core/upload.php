<?php

$url = "https://example.com";

$image = $_FILES["image"];

if (!is_dir('../uploads')) {

    mkdir('../uploads', 0777, true);

}

$extension = pathinfo($image["name"], PATHINFO_EXTENSION);

time()

$fileName = time() . ".$extension";

if (!move_uploaded_file($image["tmp_name"], "../uploads/" . $fileName)) {

    die('Error upload file');

}

echo $url."/uploads/".$fileName;

<?php

$content = file_get_contents('https://tiki.vn/tai-nghe-nhac/c1804');

$partern = '/class="product-box-list".*>(.*).*class="list-pager"/imsxU';
preg_match_all($partern,$content,$matches);
// echo "<pre>";
// print_r($matches);
// echo "</pre>";

//name
preg_match_all('/class="title">(.*)<\/span>/imsxU',$matches[0][0],$name);

echo "<pre>";
print_r($name[1]);
echo "</pre>";

//image
preg_match_all('/class="product-image.*src="(.*)".*>/misU',$matches[0][0],$images);


echo "<pre>";
print_r($images[1]);
echo "</pre>";

//$sql = "INSERT INTO products(name,image) VALUES ('$name','$image')"

foreach($name[1] as $key=>$tensp){
    echo $tensp;
    echo "<br>";
    $img = $images[1][$key];
    echo "<img src='$img'>";
    echo "<hr>";

}

?>

<!-- <span class="title">(.*)</span> -->

<!-- class="product-box-list".*>(.*).*class="list-pager" -->

<!-- class="product-image img-responsive lazy".*src="(.*)".*> -->
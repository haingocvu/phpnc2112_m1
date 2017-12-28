<?php
$xml = simplexml_load_file('https://vnexpress.net/rss/suc-khoe.rss') 
        or die("Can not load xml");
// echo "<pre>";
// print_r($xml);
// echo "</pre>";
foreach($xml->channel->item as $item){
    echo $item->title;
    echo '<br>';
    $desc = $item->description;
    foreach($desc as $mota){
        echo "<pre>";
        echo($mota);
        echo "</pre>";
    }
    echo "<hr>";
}
?>
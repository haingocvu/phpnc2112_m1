<?php
$str = '<?xml version="1.0" encoding="UTF-8"?><books><book>
    <author dob="1999" DOB="2332">To Huu</author>
    <year>
        <day>10</day>
        <month>2</month>
        <year>2000</year>
    </year>
    <name>De Men phieu luu ki</name>
</book>
<book>
    <author dob="1999" DOB="2332">Tony</author>
    <year>
        <day>11</day>
        <month>2</month>
        <year>2000</year>
    </year>
    <name>Tren duong bang</name>
</book>
<book>
    <author dob="1999" DOB="2332">To Huu</author>
    <year>
        <day>12</day>
        <month>2</month>
        <year>2000</year>
    </year>
    <name>De Men phieu luu ki</name>
</book>
</books>';
//echo $str;
$xml = simplexml_load_string($str);
// echo "<pre>";
// print_r($xml);
// echo '</pre>';
// foreach($xml as $book){
//     echo $book->author;
//     echo "<br>";
// }

foreach($xml->children() as $book){
    foreach($book->year as $date){
        //print_r($date);
        echo $date->day.'/'.$date->month.'/'.$date->year;
    }
    echo "<br>";
}


echo "<hr>";
$xml = simplexml_load_file('demo.xml');

foreach($xml->children() as $book){
    foreach($book->year as $date){
        //print_r($date);
        echo $date->day.'/'.$date->month.'/'.$date->year;
    }
    echo "<br>";
}
?>
<?php

$str = "Hello World.";

/*

?: 0 or 1 world;
*: 0 or more
+: 1 or more
.: ki tu bat ki
\. dau cham (.)
\*
\/
\$
\^
[0-4] 
[a-d]
[A-Z]
[a-zA-Z0-9-_\.]
p+: php pp pho
p* p
p? php

*/
// $str = 'hhhh';
// $s = "/p+/";

/**
 * 
 * p{3} ppp
 * w{3}
 * w{2,3} 
 * w{2,}
 * p$ ket thuc ban p
 * ^p  bat dau bang p
 * [^a-z] 
 * 
 */


// $str = "hoc_php_nang_cao";
// //$pattern = '/^p/';
// $pattern = "/[^a-z_]/";

$str = "<b>Hello World!</b> 
        <i>Hello World!</i>
        <u>Hello World!</u>";

$pattern = "/<i\>([a-zA-Z! ]+)<\/i\>/";
$pattern2 = "/<i\>([a-zA-Z!\s]+)<\/i\>/";

/**
 * \s
 * \S
 * \w
 * \W
 * \A
 * ^
 * \z $
 * 
 * [abc]
 * \d
 * \D
 * (learning|learn|learner)
 */

$str = "Hello World.";
/**
 * .
 * \w
 * \w+
 * ^H
 * \.$
 * \s
 * (Hello\sWorld)
 * [a-zA-Z\.]
 * [^0-9]
 * \D
 * l{2}
 * \b 
 */

 $pattern = '/l{1}/';
$c = preg_match($pattern,$str,$match);

echo "<pre>";
print_r($match);
echo "</pre>";


// if(preg_match($pattern,$str)){
//     echo "match";
// }
// else echo "don't match";




//3.

// $num ="2345678";
// $pattern = "/\d{3,7}/";
// if(preg_match($pattern,$num)){
//     echo "match";
// }
// else echo "don't match";

/*
admin@yahoo.com
admin123@gmail.com
admin_123 
admin.123@gmail.com
*/
$email = "admin@1212@yahoo.com";

$pattern = "/[a-zA-Z0-9\._-]{3,50}\@{1,1}[a-zA-Z0-9]{3,10}\.[a-zA-Z]{2,10}/";

//$pattern = "/\w{3,50}\@\w{3,10}\.[a-zA-Z]+/";
if(preg_match($pattern,$email)){
    echo "match";
}
else echo "don't match";





?>
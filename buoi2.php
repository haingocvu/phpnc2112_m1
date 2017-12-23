<?php

// $str = "Luôn luôn lắng nghe";

// //preg_match('/luôn/i',$str,$matches);

// preg_match_all('/luôn/i',$str,$matches);

// echo "<pre>";
// print_r($matches);
// echo "</pre>";

// $str = '<form>
//   <div class="form-group">
//     <label for="exampleInputEmail1">Email address</label>
//     <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
//     <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
//   </div>
//   <div class="form-group">
//     <label for="exampleInputPassword1">Password 1</label>
//     <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
//   </div>
//   <div class="form-group">
//     <label for="exampleInputPassword1">Password 2</label>
//     <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
//   </div>
//   <div class="form-group">
//     <label for="exampleInputPassword1">Password 3</label>
//     <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
//   </div>
//   <div class="form-check">
//     <label class="form-check-label">
//       <input type="checkbox" class="form-check-input">
//       Check me out
//     </label>
//   </div>
//   <button type="submit" class="btn btn-primary">Submit</button>
// </form>';

// $partern ='/for="exampleInputPassword1">(\w+)*\s(\d)*<\/label>/';

// preg_match_all($partern,$str,$matches);

// echo "<pre>";
// print_r($matches);
// echo "</pre>";


// $str = "Luôn luôn lắng nghe";

// $newStr = preg_replace('/luôn/i',"lâu",$str, 1, $dem);
// echo $newStr;
// echo "<br>";
// echo $dem;


$name = "khoa pham training";

$partern = '/\b\w/';

preg_match_all($partern,$name,$matches);
echo "<pre>";
print_r($matches);
echo "</pre>";


function FirstToUpper(array $str){
    return strtoupper($str[0]);
}
// $str = "khoa";
// echo $str[0];

// echo strtoupper("khoa");
// echo FirstToUpper('khoa');

$newStr = preg_replace_callback($partern,"FirstToUpper",$name);
echo $newStr;







$name = "khoa pham training";
$name = "lê hoa";

$partern = '/^./';

preg_match_all($partern,$name,$matches);
echo "<pre>";
print_r($matches);
echo "</pre>";
$newStr = preg_replace_callback($partern,"FirstToUpper",$name);
echo $newStr;
?>
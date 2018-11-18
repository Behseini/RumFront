<?php
require_once("../../../../wp-load.php");
date_default_timezone_set('America/Vancouver');
$files = glob('img/*');
foreach($files as $file){
       if(is_file($file))
       unlink($file);
}
$today_day_number   = date('d');
$today_day_srting   = date('D');
$today_month_number = date('n');
$today_month_string = date('M');
$today_current_year = date('Y');
$days_in_today_month = cal_days_in_month(CAL_GREGORIAN, $today_month_number , $today_current_year);

$pre_days_array = [];

function zero_prefix($num)
{
     if($num <= 9)
     {
         return '0'.$num;
     }
     return $num;
}
// Populating $pre_days_arrayArray
for ($i = 1; $i <= $days_in_today_month; $i++) {
    $proper_format_number = zero_prefix($i);
    array_push($pre_days_array, $proper_format_number );
}
$pre_days_string_array = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
$pre_months_string_array = ["Jan", "Feb", "Mar","Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",  "Nov", "Dec"];

// Extracting current date from arrays
if (($key = array_search($today_day_number , $pre_days_array)) !== false) {
    unset($pre_days_array[$key]);
}
if (($key = array_search($today_day_srting, $pre_days_string_array )) !== false) {
    unset($pre_days_string_array[$key]);
}
if (($key = array_search($today_month_string, $pre_months_string_array)) !== false) {
    unset($pre_months_string_array[$key]);
}

$rand_days = array_rand($pre_days_array, 2);
$rand_weekdays = array_rand($pre_days_string_array, 2);
$rand_months = array_rand($pre_months_string_array, 2);
$days = [];
$weekdays = [];
$months = [];

foreach($rand_days as $key) {
    array_push($days, $pre_days_array[$key] );
}
foreach($rand_weekdays as $key) {
    array_push($weekdays , $pre_days_string_array[$key] );
}
foreach($rand_months as $key) {
    array_push($months, $pre_months_string_array[$key] );
}

array_push($days, $today_day_number);
array_push($weekdays, $today_day_srting);
array_push($months, $today_month_string);

$theDate = [];
array_push($theDate, $today_day_number);
array_push($theDate, $today_day_srting);
array_push($theDate, $today_month_string);

$day_str_img_name = [];
$day_num_img_name = [];
$month_str_img_name = [];
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
for ($i = 0; $i <= 2; $i++) {
    $day_random_string = '';
    for ($x = 0; $x < 5; $x++) {
         $day_random_string .= $characters[rand(0, $charactersLength - 1)];
    }
    array_push($day_str_img_name,  $day_random_string);
}
for ($i = 0; $i <= 2; $i++) {
    $day_random_number = '';
    for ($x = 0; $x < 5; $x++) {
        $day_random_number .= $characters[rand(0, $charactersLength - 1)];
    }
    array_push($day_num_img_name, $day_random_number);
}
for ($i = 0; $i <= 2; $i++) {
    $month_random_string = '';
    for ($x = 0; $x < 5; $x++) {
        $month_random_string .= $characters[rand(0, $charactersLength - 1)];
    }
    array_push($month_str_img_name, $month_random_string);
}

//$theDateCheck = [];
//  array_push($theDateCheck, $day_str_img_name[2]);
//  array_push($theDateCheck, $day_num_img_name[2]);
//  array_push($theDateCheck, $month_str_img_name[2]);

// Set Session vaiable for today date
 $_SESSION['captach_dates'] = $day_str_img_name[2].$day_num_img_name[2].$month_str_img_name[2];
 $font = 'OpenSans-SemiBold.ttf';
for ($i = 0; $i <= 2; $i++) {
    $img_day  = imagecreatetruecolor(32,16);
    $color  = imagecolorallocate($img_day, 255, 255, 255);
    $bg     = imagecolorallocate($img_day, 108, 117, 125);
    imagecolortransparent($img_day, $bg);
    imagefilledrectangle($img_day,0,0,200,100, $bg);
    imagettftext($img_day, 10, 0, 4 ,12, $color, $font, $weekdays[$i]);
    imagepng($img_day, 'img/daystr_'.$day_str_img_name[$i].'.png');
}
for ($i = 0; $i <= 2; $i++) {
    $img_day_num  = imagecreatetruecolor(32,16);
    $color  = imagecolorallocate($img_day_num, 255, 255, 255);
    $bg     = imagecolorallocate($img_day_num, 108, 117, 125);
    imagecolortransparent($img_day_num, $bg);
    imagefilledrectangle($img_day_num,0,0,200,100, $bg);
    imagettftext($img_day_num, 10, 0, 8 ,12, $color, $font, $days[$i]);
    imagepng($img_day_num, 'img/daynum_'.$day_num_img_name[$i].'.png');
}
for ($i = 0; $i <= 2; $i++) {
    $img_day_month  = imagecreatetruecolor(32,16);
    $color  = imagecolorallocate($img_day_month, 255, 255, 255);
    $bg     = imagecolorallocate($img_day_month, 108, 117, 125);
    imagecolortransparent($img_day_month, $bg);
    imagefilledrectangle($img_day_month,0,0,200,100, $bg);
    imagettftext($img_day_month, 10, 0, 5 ,12, $color, $font, $months[$i]);
    imagepng($img_day_month, 'img/daymon_'.$month_str_img_name[$i].'.png');
}

   $base_dir = trailingslashit(get_template_directory());
   $dir      = 'logins/img/';
//    $dirname = get_template_directory_uri() . '/logins/img/';
//    $images = glob($dirname."*.png");
$images   = glob($base_dir.$dir.'*.png');

echo '<div class=date-btns-box show-on"><div class="btn-group btn-group-toggle d-flex show-on" data-toggle="buttons">
      <a class="btn btn-secondary disabled w-100 show-on" style="min-width:72px; color:#fff;"> Day </a>';


foreach($images as $image) {
    $url = get_theme_file_uri($dir.basename($image));
        $filename = basename($image);
        if (startsWith($filename, "daystr")) {
      echo '<a class="btn btn-secondary w-100 show-on"> <input type="radio" name="days" value="'.substr($filename, 7, 5).'"><img src="'.$url.'" data-map="'.substr($filename, 7, 5).'" class="show-on" alt="s" /> </a>';
        }
    }
    echo '</div></div>';


echo '<div class=date-btns-box show-on" style="margin-top:5px;"><div class="btn-group btn-group-toggle d-flex show-on" data-toggle="buttons">
      <a class="btn btn-secondary disabled w-100 show-on" style="min-width:72px;color:#fff;"> Date </a>';
    foreach($images as $image) {
           $url = get_theme_file_uri($dir.basename($image));
        $filename = basename($image);
        if (startsWith($filename, "daynum")) {
      echo '<a class="btn btn-secondary w-100 show-on"> <input type="radio" name="dates" value="'.substr($filename, 7, 5).'"><img src="'.$url.'" data-map="'.substr($filename, 7, 5).'" class="show-on" alt="show-on" /> </a>';
        }
    }
    echo '</div></div>';


echo '<div class=date-btns-box show-on"  style="margin-top:5px;"><div class="btn-group btn-group-toggle d-flex show-on" data-toggle="buttons">
      <a class="btn btn-secondary disabled w-100 show-on" style="min-width:72px;color:#fff;"> Month </a>';
    foreach($images as $image) {
           $url = get_theme_file_uri($dir.basename($image));
        $filename = basename($image);
        if (startsWith($filename, "daymon")) {
      echo '<a class="btn btn-secondary w-100 show-on"> <input type="radio" name="months" value="'.substr($filename, 7, 5).'"><img src="'.$url.'" data-map="'.substr($filename, 7, 5).'" class="show-on" alt=""/> </a>';
        }
    }
    echo '</div></div>';


function startsWith($haystack, $needle) {
    // search backwards starting from haystack length characters from the end
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
}
         ?>

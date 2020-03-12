<?php
 
// namespace App\Helpers;

// class OluxHelpers{
  // public static 
  function randomstr() {
  $length = 8;
    $characters = '0123456789ABCDEFGHJKLMNPQRSTUVWXYZ';

    $charactersLength = strlen($characters);

    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
  }

  // public static 
  function capitalise($str,$omitWord=false){
    $arrWords = explode(" ",$str);
    $words = [];
    $wordsOmit = explode(" ","is,the,of,in,at,it,and,an");
    
    foreach ($arrWords as $key => $value) {
      if($omitWord){
        $dontOmit=true;
        foreach ($wordsOmit as $key2 => $omit) {
            if($omit===$value){
                $dontOmit = false;
            }
        }
        if ($dontOmit) {
            array_push($words,ucfirst($value));
        }
        else{
            array_push($words,$value);
        }
      }
      else{
          array_push($words,ucfirst($value));
      }
    }

    $newStr = implode(" ",$words);
    return ucfirst($newStr);
    // return $str;
  }


  // public static 
  function text($text){
    return $text;
  }

  // public static 
  function img($url,$desc="image description",$folder="images/"){
    return [
      "url"=>$folder.$url,
      "desc"=>capitalise($desc),
    ];
  }

  // public static 
  function alink($url, $label, $desc="link"){
    $site_name = env('SITE_NAME');
    if( $desc==="link"){
      $desc = $desc." to $site_name's $label";
    }
    return [
      "url"=>$url,
      "label"=>$label,
      "desc"=>capitalise($desc),
    ];
  }

  // public static 
  function icon_link($url,$label,$icon="fa",$desc="link"){
    $site_name = env('SITE_NAME');
    if( $desc==="link"){
      $desc = $desc." to $site_name's $label";
    }
    return [
      "url"=>$url,
      "label"=>$label,
      "icon"=>$icon,
      "desc"=>capitalise($desc),
    ];
  }

  // public static 
  function currency($value,$symbol="$"){
    return $value.$symbol;
  }
// }
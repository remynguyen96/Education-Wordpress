<?php
function Service()
{
  global $golf;
  if(!$golf["service-introduce"])
  {
    $service1 =  $golf["service-introduce1"];
    $service2 =  $golf["service-introduce2"];
    $service3 =  $golf["service-introduce3"];
  }
  return $list = array($service1,$service2,$service3);
}
function Introduce1()
{
  global $golf;
  if(!$golf["header-introduce1"])
  {
    $introduce1 = $golf["text-introduce1-1"];
    $introduce2  = $golf["text-introduce1-2"];
  }
  return $list = array($introduce1,$introduce2);
}
function Introduce2()
{
  global $golf;
  if(!$golf["header-introduce1"])
  {
    $introduce1 =  $golf["text-introduce2"];
    $introduce2  = $golf["text-introduce3"];
    $introduce3  = $golf["text-introduce4"];
    $introduce4  = $golf["text-introduce5"];
    $introduce5  = $golf["text-introduce6"];
  }
  return $list = array($introduce1,$introduce2,$introduce3,$introduce4,$introduce5);
}
function Introduce3()
{
  global $golf;
  if(!$golf["header-introduce7"])
  {
    $introduce1 =  $golf["text-introduce7-1"];
    $introduce2 =  $golf["text-introduce7-2"];
  }
  return $list = array($introduce1,$introduce2);
}
function Introduce4()
{
  global $golf;
  if(!$golf["header-introduce8"])
  {
    $introduce1 =  $golf["text-introduce8"];
  }
  return $introduce1;
}
function Introduce5()
{
  global $golf;
  if(!$golf["header-introduce9"])
  {
    $introduce1 =  $golf["text-introduce9-1"];
    $introduce2 =  $golf["text-introduce9-2"];
  }
  return $list = array($introduce1,$introduce2);
}
// social
function Link_Social()
{
  global $golf;
  if(!$golf["social-network"])
  {
    $link1 = $golf["facebook-api"];
    $link2 = $golf["twitter-api"];
    $link3 = $golf["google-api"];
    $link4 = $golf["linkedin-api"];
    $link5 = $golf["paypal-api"];
  }
  return $list = array($link1,$link2,$link3,$link4,$link5);
}


function a_download(){
    global $golf;
    if(!$golf["download_guide"])
   {
       return $a_download ='<div id="download_a" class="hide">'.$golf['a-download'].'</div>';
   }
}
function courses_golf(){
    global $golf;
    if(!$golf["courses_golf"])
   {
       $courses_golf =$golf['div_courses_golf'];
       $img_golf =$golf['img_banner_page']['url'];
   }
   return array($courses_golf,$img_golf);
}
function img_download(){
    global $golf;
    if(!$golf["download_guide"])
   {
       return $img_download = $golf['img-download']['url'];
   }
}
function Slider_Header()
{
  global $golf;
   if(!$golf["slider-header"])
  {
    if($golf['SLIDER1-on'] == 1)
    {
       $img1 = "<div class='item'><img src='".$golf['slider-image1']['url']."' alt='Slider1 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER2-on'] == 1)
    {
      $img2 = "<div class='item'><img src='".$golf['slider-image2']['url']."' alt='Slider2 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER3-on'] == 1)
    {
      $img3 = "<div class='item'><img src='".$golf['slider-image3']['url']."' alt='Slider3 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER4-on'] == 1)
    {
       $img4 = "<div class='item'><img src='".$golf['slider-image4']['url']."' alt='Slider4 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER5-on'] == 1)
    {
       $img5 = "<div class='item'><img src='".$golf['slider-image5']['url']."' alt='Slider5 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER6-on'] == 1)
    {
       $img6 = "<div class='item'><img src='".$golf['slider-image6']['url']."' alt='Slider6 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER7-on'] == 1)
    {
       $img7 = "<div class='item'><img src='".$golf['slider-image7']['url']."' alt='Slider7 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER8-on'] == 1)
    {
       $img8 = "<div class='item'><img src='".$golf['slider-image8']['url']."' alt='Slider8 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER9-on'] == 1)
    {
       $img9 = "<div class='item'><img src='".$golf['slider-image9']['url']."' alt='Slider9 Golf' class='w100 img-responsive'></div>" ;
    }
    if($golf['SLIDER10-on'] == 1)
    {
       $img10 = "<div class='item'><img src='".$golf['slider-image10']['url']."' alt='Slider10 Golf' class='w100 img-responsive'></div>" ;
    }
  }
  $array = array($img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8,$img9,$img10);
  return $array;
}


// Slider Partners
function Slider_Partner()
{
  global $golf;
   if(!$golf["slider-footer"])
  {
    if($golf['partner_1'] == 1)
    {
       $img1 = "<div class='item'><img src='".$golf['slider-partner1']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_2'] == 1)
    {
      $img2 = "<div class='item'><img src='".$golf['slider-partner2']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_3'] == 1)
    {
      $img3 = "<div class='item'><img src='".$golf['slider-partner3']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_4'] == 1)
    {
       $img4 = "<div class='item'><img src='".$golf['slider-partner4']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_5'] == 1)
    {
       $img5 = "<div class='item'><img src='".$golf['slider-partner5']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_6'] == 1)
    {
       $img6 = "<div class='item'><img src='".$golf['slider-partner6']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_7'] == 1)
    {
       $img7 = "<div class='item'><img src='".$golf['slider-partner7']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_8'] == 1)
    {
       $img8 = "<div class='item'><img src='".$golf['slider-partner8']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_9'] == 1)
    {
       $img9 = "<div class='item'><img src='".$golf['slider-partner9']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
    if($golf['partner_10'] == 1)
    {
       $img10 = "<div class='item'><img src='".$golf['slider-partner10']['url']."' alt='Slider Partners Golf' class='img-responsive'></div>" ;
    }
  }
  $array = array($img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8,$img9,$img10);
  return $array;
}
// All Images Home
function Img_home()
{
  global $golf;
   if(!$golf["img-home"])
  {
    if($golf['home1'] == 1)
    {
       $img_home1 = "<img src='".$golf['img-home1']['url']."' alt='Create Your Trip' class='img-responsive'>" ;
    }
    if($golf['home2'] == 1)
    {
       $img_home2 = "<img src='".$golf['img-home2']['url']."' alt='Golf Holidays' class='img-responsive'>" ;
    }
    if($golf['home3'] == 1)
    {
       $img_home3 = "<img src='".$golf['img-home3']['url']."' alt='Book Your Teetimes' class='img-responsive'>" ;
    }
    if($golf['home4'] == 1)
    {
       $img_home4 = "<img src='".$golf['img-home4']['url']."' alt='Images Home Middle' class='img-responsive'>" ;
    }
    if($golf['home6'] == 1)
    {
       $img_home5 = "<img src='".$golf['img-home6']['url']."' alt='Images Home Footer' class='img-responsive'>" ;
    }
  }
  $array = array($img_home1,$img_home2,$img_home3,$img_home4,$img_home5);
  return $array;
}
function Img_Create_Trip()
{
  global $golf;
   if(!$golf["img-create-trip"])
  {
    if($golf['show-img-create-trip1'] == 1)
    {
       $img_home1 = $golf['up-img-create-trip1']['url'];
    }
    if($golf['show-img-create-trip2'] == 1)
    {
       $img_home2 = $golf['up-img-create-trip2']['url'];
    }
    if($golf['show-img-create-trip3'] == 1)
    {
       $img_home3 = $golf['up-img-create-trip3']['url'];
    }
  }
  $array = array($img_home1,$img_home2,$img_home3);
  return $array;
}
function Img_All_Btn()
{
  global $golf;
   if(!$golf["img-all-button-btn"])
  {
       $img_home1 = $golf['up-img-btn-viemore1']['url'];
       $img_home2 = $golf['up-img-btn-viemore2']['url'];
       $img_home3 = $golf['up-img-btn-viemore3']['url'];
       $img_home4 = $golf['up-img-btn-submit1']['url'];
       $img_home5 = $golf['up-img-btn-submit2']['url'];
  }
  $array = array($img_home1,$img_home2,$img_home3,$img_home4,$img_home5);
  return $array;
}










?>

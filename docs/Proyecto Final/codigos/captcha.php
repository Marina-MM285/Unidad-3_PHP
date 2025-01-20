<?php
$ancho=100;
$alto=30;
$imagen=imageCreate($ancho,$alto);
$fondo=ImageColorAllocate($imagen,202,174,255);
ImageFill($imagen,0,0,$fondo);
$numeros=ImageColorAllocate($imagen,37,129,77);
$linias=ImageColorAllocate($imagen,0,31,83);
$valoraleatorio=rand(100000,999999);
session_start();
$_SESSION['valoraleatorio'] = $valoraleatorio;

ImageString($imagen,5,25,5,$valoraleatorio,$numeros);
for($c=0;$c<=5;$c++)
{
  $x1=rand(0,$ancho);
  $y1=rand(0,$alto);
  $x2=rand(0,$ancho);
  $y2=rand(0,$alto);
  ImageLine($imagen,$x1,$y1,$x2,$y2,$linias);
}
Header ("Content-type: image/jpeg");
ImageJPEG ($imagen);
ImageDestroy($imagen);
?>
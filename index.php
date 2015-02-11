<?php
$rekues = $_SERVER['HTTP_HOST'];
if($rekues == "tukang.loenpia.net")
{
	header("Location: http://tukang.loenpia.net/planet/");
} else {
	echo "Ro_Lin - Radio Loenpia[dot]Net";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title>Icecast Now Playing Script</title>
<link rel="stylesheet" href="rolin2.css" type="text/css" media="all" />
</head>
<body>

<?php include("icecast-settings.php"); ?>
<div id="radio">
<?=$status?> 
<?php
if ($status == 'On Air') { ?>
    
    : <b><?=$stream_info['song']?></b> by <b><?=$stream_info['artist']?></b>
    <br />
    Yang ndeNger : <b><?=$stream_info['listeners']?></b> 
    <br />
    <?=$stream_info['title']?>

<?php } ?>
</div>
</body>
</html>

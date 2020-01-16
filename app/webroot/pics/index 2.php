<?php
	# SETTINGS
	$max_width = 100;
	$max_height = 100;
	
	function getPictureType($ext) {
		if ( preg_match('/jpg|jpeg/i', $ext) ) {
			return 'jpg';
		} else if ( preg_match('/png/i', $ext) ) {
			return 'png';
		} else if ( preg_match('/gif/i', $ext) ) {
			return 'gif';
		} else {
			return '';
		}
	}
	
	function getPictures() {
		global $max_width, $max_height;
		if ( $handle = opendir(".") ) {
			$lightbox = rand();
			echo '<ul id="pictures">';
			while ( ($file = readdir($handle)) !== false ) {
				if ( !is_dir($file) ) {
					$split = explode('.', $file); 
					$ext = $split[count($split) - 1];
					if ( ($type = getPictureType($ext)) == '' ) {
						continue;
					}
					if ( ! is_dir('thumbs') ) {
						mkdir('thumbs');
					}
					if ( ! file_exists('thumbs/'.$file) ) {
						if ( $type == 'jpg' ) {
							$src = imagecreatefromjpeg($file);
						} else if ( $type == 'png' ) {
							$src = imagecreatefrompng($file);
						} else if ( $type == 'gif' ) {
							$src = imagecreatefromgif($file);
						}
						if ( ($oldW = imagesx($src)) < ($oldH = imagesy($src)) ) {
							$newW = $oldW * ($max_width / $oldH);
							$newH = $max_height;
						} else {
							$newW = $max_width;
							$newH = $oldH * ($max_height / $oldW);
						}
						$new = imagecreatetruecolor($newW, $newH);
						imagecopyresampled($new, $src, 0, 0, 0, 0, $newW, $newH, $oldW, $oldH);
						if ( $type == 'jpg' ) {
							imagejpeg($new, 'thumbs/'.$file);
						} else if ( $type == 'png' ) {
							imagepng($new, 'thumbs/'.$file);
						} else if ( $type == 'gif' ) {
							imagegif($new, 'thumbs/'.$file);
						}
						imagedestroy($new);
						imagedestroy($src);
					}
					echo '<li><a href="'.$file.'" rel="lightbox['.$lightbox.']">';
					echo '<img src="thumbs/'.$file.'" alt="" />';
					echo '</a></li>';
				}
			}
			echo '</ul>';
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UFT-8" />
<title>Pictures</title>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<style type="text/css">
#pictures li {
	float:left;
	height:<?php echo ($max_height + 10); ?>px;
	list-style:none outside;
	width:<?php echo ($max_width + 10); ?>px;
	text-align:center;
}
img {
	border:0;
	outline:none;
}
</style>
</head>
<body>

<?php getPictures(); ?>


<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
</body>
</html>

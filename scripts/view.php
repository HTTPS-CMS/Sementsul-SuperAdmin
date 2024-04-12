<?php

$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

?>

<a href="<?php echo $url; ?>"><?php echo"Ссылка"?></a>

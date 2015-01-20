<?php
require 'uploader.php';

$name  = 'image';
$dir   = 'uploads';
$exts  = array('jpeg','jpg','png');
$limit = 2;

$upload = new uploader($name, $dir, $exts, $limit);
$upload->unique_name(true);
$upload->upload();
$outcome = $upload->getResults();
?>
<pre>
<?php print_r($outcome); ?>
</pre>
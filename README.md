Simple PHP Uploader Class with added file validation.
=======================================================

### ***Quick start***

```php
<?php
require 'uploader.php';

$name  = 'image'; 			// the upload field name
$dir   = 'uploads';			// the directory to upload into
$exts  = array('jpeg','jpg','png');	// accepted extentions
$limit = 2;				// upload limit in MB

if (!empty($_FILES[$name])) {
  $upload = new uploader($name, $dir, $exts, $limit);
  $upload->unique_name(true);		// if true, uploaded file will be given unique name
  $upload->upload();			// do upload, returns true on success, false otherwise
  $outcome = $upload->getResults();	// returns an array of upload information
}
```

### ***Thats all there is to it***

File extentions are checked against an array of mimetypes to make sure the uploaded file
is of the expected type.

Notes
-------

Please see comments within the code to understand what is going on.
The uploader.js file will most likly need to be changed for different situations.

License
---------

Copyright (c) 2015 thehigherentity, released under the MIT License

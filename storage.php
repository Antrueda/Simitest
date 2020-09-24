<?php

$targetFolder='/opt/lampp/SIMIL2.0/storage/app/public';
$linkFolder=$_SERVER['DOCUMENT_ROOT'].'/simi/storage';
symlink($targetFolder,$linkFolder);
echo 'Success';

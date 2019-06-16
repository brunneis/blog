<?php

# Check when the index was generated
$mtime_file = "./trece/inc/blog/.mtime";
if (!is_file($mtime_file)) {
    file_put_contents($mtime_file, "");
}
$mtime = filemtime($mtime_file);
$elapsed_time = (time() - $mtime);
if ( $elapsed_time < 86400 ) {
    return;
}

# Generate index
file_put_contents($mtime_file, "");
$blog_dir = './trece/inc/blog';
$folders = scandir($dir, 1);

foreach ($folders as $folder) {
  if (strpos($folder, ".") === false) {
    $year = $folder;
  }
}

?> 
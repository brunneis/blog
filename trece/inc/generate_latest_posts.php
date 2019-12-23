<?php

# Check when the list was generated
$mtime_filename = "./trece/inc/blog/.mtime";
if (!is_file($mtime_filename)) {
    file_put_contents($mtime_filename, "");
}
$mtime = filemtime($mtime_filename);
$elapsed_time = (time() - $mtime);
if ( $elapsed_time < 3600 ) {
    return;
}

# Generate list
file_put_contents($mtime_filename, "");
$blog_path = './trece/inc/blog';
$latest_posts_filename = $blog_path.'/latest_posts.html';

$latest_posts = fopen($latest_posts_filename, "w");

fwrite($latest_posts, '<div class="posts-list">');

$years = scandir($blog_path, 1);
foreach ($years as $year) {
  if (strpos($year, ".") !== false) {
    continue;
  }
  fwrite($latest_posts, '<h1>'.$year.'</h1>');
  $year_path = $blog_path.'/'.$year;

  $months = scandir($year_path, 1);
  foreach ($months as $month) {
    if (strpos($month, ".") !== false) {
      continue;
    }
    fwrite($latest_posts, '<h2>'.$month.'</h2>');
    $month_path = $year_path.'/'.$month;

    $posts = scandir($month_path, 1);
    foreach ($posts as $post) {
      if (strpos($post, ".php") === false) {
        continue;
      }

      $post_path = $month_path.'/'.$post;
      $lines = array_slice(file($post_path,FILE_IGNORE_NEW_LINES),1,6);
      $metalines = ["[title]","[datetime]","[description]","[keywords]","[image_file]","[image_description]"];
      $metalines = str_replace(["[","]"],"",$metalines);

      foreach($lines as $line) :
        $line = explode(":",$line,2);
        if($line[0]!="" && substr($line[0],0,1)=="[") :
          $line[0] = trim($line[0]," [] ");
          $line[1] = trim($line[1]); $line[1] = trim($line[1],"()"); $line[1] = ltrim($line[1],"# "); $line[1] = trim($line[1],'"');
          if(in_array($line[0],$metalines)) : $metadt = true; $meta[$line[0]] = $line[1]; endif;
        endif;
      endforeach;

      $post_name = substr($post, 0, strlen($post)-4);
      $date = date('Y/m/d', strtotime(str_replace('-', '/', $meta["datetime"])));
      
      fwrite($latest_posts, '<div class="article-card">');
      fwrite($latest_posts, '<time datetime="'.$meta['datetime'].'">'.$date.'</time>');
      fwrite($latest_posts, '<a href="/blog/'.$year.'/'.$month.'/'.$post_name.'">');
      fwrite($latest_posts, '<h1>'.$meta['title'].'</h1>');
      fwrite($latest_posts, '<h2>'.$meta['description'].'</h2>');
      fwrite($latest_posts, '</a>');
      fwrite($latest_posts, '</div>');

    }

  }
  
  # Only the last year
  return;

}
fwrite($latest_posts, '</div>');
fclose($latest_posts);

?>
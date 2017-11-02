<?php
$title = 'News - Arc Education Centre';

$description = '';

require 'header.php';

 ?>

<?php require 'navbar.php';?>

<div class="container">
    <h1 class="text-center mt-3 pt-2" id="section-name">News</h1>
<?php

$news_count = count($news);

for ($newsnum = 0; $newsnum < $news_count; $newsnum++){
    echo '<p class="lead text-muted">' . $news[$newsnum]['date_posted'] . '</p><h2 class="py-2">' . $news[$newsnum]['title'] . '</h2><img class="img-fluid d-block mx-auto events-flyer py-3" src="' . $news[$newsnum]['picture'] . '" alt="' . $news[$newsnum]['title'] . '">';
    echo '<hr>';
}

 ?>
</div>
<?php require 'footer.php';?>

<?php
$title = 'Classes - Arc Education Centre';

$description = "Arc offers art, esl/citizenship, music classes, and one on one tutoring to students from JK-SK Kindergarten - Grade 12 and Adults.";

require 'header.php';

require 'navbar.php';
 ?>

<div class="container-fluid">
    <h1 class="text-center mt-3 pt-2" id="section-name">Classes</h1>
<div class="row mt-4 pt-4">
<div class="nav flex-column nav-pills col-xs-12 col-lg-2" id="sidenav-list" role="tablist">
<?php

$class_count = count($data[0]['subcategories']);

echo '<a class="nav-link active" id="pills-' . $data[0]['subcategories'][0]['subcategories_url'] . '" data-toggle="pill" href="#' . $data[0]['subcategories'][0]['subcategories_url'] . '" role="tab" aria-controls="' . $data[0]['subcategories'][0]['subcategories_url'] . '" aria-expanded="true">' . strtoupper($data[0]['subcategories'][0]['subcategories_title']) . '</a>';

for ($classes=1; $classes < $class_count; $classes++){
    echo '<a class="nav-link" id="pills-' . $data[0]['subcategories'][$classes]['subcategories_url'] . '" data-toggle="pill" href="#' . $data[0]['subcategories'][$classes]['subcategories_url'] . '" role="tab" aria-controls="' . $data[0]['subcategories'][$classes]['subcategories_url'] . '" aria-expanded="true">' . strtoupper($data[0]['subcategories'][$classes]['subcategories_title']) . '</a>';
}

 ?>
</div>
<div class="tab-content col-xs-12 col-lg-10" id="tabcontent">
    <?php
  echo '<div class="tab-pane px-3 fade show active" id="' . $data[0]['subcategories'][0]['subcategories_url'] . '" role="tabpanel" aria-labelledby="' . $data[0]['subcategories'][0]['subcategories_url'] . '">
      <h2 class="text-center py-3">' . strtoupper($data[0]['subcategories'][0]['subcategories_title']) . '</h2><img src="' . $data[0]['subcategories'][0]['subcategories_splash'] . '" class="img-fluid d-block mx-auto my-3" alt="' . $data[0]['subcategories'][0]['subcategories_url'] . ' splash image"><h3 class="text-center"><a class="register-link btn btn-primary" href="' . $data[0]['subcategories'][0]['subcategories_registration'] . '">REGISTER HERE</a></h3>' . '<div class="pt-3 pb-5">' . $data[0]['subcategories'][0]['subcategories_text'] . '</div></div>';

      for($class_body=1; $class_body < $class_count; $class_body++){
          echo '<div class="tab-pane fade px-3" id="' . $data[0]['subcategories'][$class_body]['subcategories_url'] . '" role="tabpanel" aria-labelledby="' . $data[0]['subcategories'][$class_body]['subcategories_url'] . '">
              <h2 class="text-center py-3">' . strtoupper($data[0]['subcategories'][$class_body]['subcategories_title']) . '</h2><img src="' . $data[0]['subcategories'][$class_body]['subcategories_splash'] . '" class="img-fluid d-block mx-auto my-3" alt="' . $data[0]['subcategories'][$class_body]['subcategories_url'] . ' splash image"><h3 class="text-center"><a class="register-link btn btn-primary" href="' . $data[0]['subcategories'][$class_body]['subcategories_registration'] . '">REGISTER HERE</a></h3>' . '<div class="pt-3 pb-5">' . $data[0]['subcategories'][$class_body]['subcategories_text'] . '</div></div>';
      }
  ?>
</div>
</div>
</div>

<?php require 'footer.php';?>

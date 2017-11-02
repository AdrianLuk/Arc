<?php
$title = 'Programs - Arc Education Centre';

$description = "Arc's philosophy is that even though it's a holiday, the learning doesn't need to stop! Arc Education Centre has partnered with other organizations to offer a diverse array of camps to suit every student's interests.";

require 'header.php';

require 'navbar.php';
 ?>
 <div class="container-fluid">
     <h1 class="text-center mt-3 pt-2" id="section-name">Camps</h1>
 <div class="row mt-4 pt-4">
 <div class="nav flex-column nav-pills col-xs-12 col-lg-2" id="sidenav-list" role="tablist">
     <?php

     $camp_count = count($data[2]['subcategories']);

     echo '<a class="nav-link active" id="pills-' . $data[2]['subcategories'][0]['subcategories_url'] . '" data-toggle="pill" href="#' . $data[2]['subcategories'][0]['subcategories_url'] . '" role="tab" aria-controls="' . $data[2]['subcategories'][0]['subcategories_url'] . '" aria-expanded="true">' . strtoupper($data[2]['subcategories'][0]['subcategories_title']) . '</a>';

     for ($camps=1; $camps < $camp_count; $camps++){
         echo '<a class="nav-link" id="pills-' . $data[2]['subcategories'][$camps]['subcategories_url'] . '" data-toggle="pill" href="#' . $data[2]['subcategories'][$camps]['subcategories_url'] . '" role="tab" aria-controls="' . $data[2]['subcategories'][$camps]['subcategories_url'] . '" aria-expanded="true">' . strtoupper($data[2]['subcategories'][$camps]['subcategories_title']) . '</a>';
     }
      ?>
 </div>
 <div class="tab-content col-xs-12 col-lg-10" id="tabcontent">
     <?php
     echo '<div class="tab-pane px-3 fade show active" id="' . $data[2]['subcategories'][0]['subcategories_url'] . '" role="tabpanel" aria-labelledby="' . $data[2]['subcategories'][0]['subcategories_url'] . '">
         <h2 class="text-center py-3">' . strtoupper($data[2]['subcategories'][0]['subcategories_title']) . '</h2><div class="row">
         <img src="' . $data[2]['subcategories'][0]['subcategories_splash'][0] . '" class="img-fluid d-block mx-auto col-xs-12 my-2" alt="' . $data[2]['subcategories'][0]['subcategories_url'] . ' splash image"></div><h3 class="text-center"><a class="register-link btn btn-primary" href="' . $data[2]['subcategories'][0]['subcategories_registration'] . '">REGISTER HERE</a></h3>' . '<div class="pt-3 pb-5">' . $data[2]['subcategories'][0]['subcategories_text'] . '</div></div>';

         for($camp_body=1; $camp_body < $camp_count; $camp_body++){
             $splash_count = count($data[2]['subcategories'][$camp_body]['subcategories_splash']);
             echo '<div class="tab-pane fade px-3" id="' . $data[2]['subcategories'][$camp_body]['subcategories_url'] . '" role="tabpanel" aria-labelledby="' . $data[2]['subcategories'][$camp_body]['subcategories_url'] . '">
                 <h2 class="text-center py-3">' . strtoupper($data[2]['subcategories'][$camp_body]['subcategories_title']) . '</h2>';
                 if($splash_count <2){
                     echo '<img src="' . $data[2]['subcategories'][$camp_body]['subcategories_splash'][0] . '" class="img-fluid d-block mx-auto my-2" alt="' . $data[2]['subcategories'][$camp_body]['subcategories_url'] . ' splash image">';
                 }elseif ($splash_count = 2){
                     echo '<div class="row d-flex flex-row">';
                     for($splashes = 0; $splashes < $splash_count; $splashes++){
                        echo '<img src="' . $data[2]['subcategories'][$camp_body]['subcategories_splash'][$splashes] . '" class="img-fluid d-block col-xs-12 col-lg-6 my-2" alt="' . $data[2]['subcategories'][$camp_body]['subcategories_url'] . ' splash image">';
                     }
                     echo '</div>';
                 }
                 echo '<h3 class="text-center"><a class="register-link btn btn-primary" href="' . $data[2]['subcategories'][$camp_body]['subcategories_registration'] . '">REGISTER HERE</a></h3>' . '<div class="pt-3 pb-5">' . $data[2]['subcategories'][$camp_body]['subcategories_text'] . '</div></div>';
         }
      ?>
 </div>
 </div>
 </div>

 <?php require 'footer.php'; ?>

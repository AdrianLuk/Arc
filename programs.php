<?php
$title = 'Programs - Arc Education Centre';

$description = "Arc's Creative Scholars and Literacy Learners programs offer fine arts, music, S.T.E.A.M. and small group support in reading, writing, listening, and speaking. Arc emphasizes creative learning approaches while having fun!";

require 'header.php';

require 'navbar.php';
 ?>
 <div class="container-fluid">
     <h1 class="text-center mt-3 pt-2" id="section-name">Programs</h1>
 <div class="row mt-4 pt-4">
 <div class="nav flex-column nav-pills col-xs-12 col-lg-2" id="sidenav-list" role="tablist">
 <?php

 $program_count = count($data[1]['subcategories']);

 echo '<a class="nav-link active" id="pills-' . $data[1]['subcategories'][0]['subcategories_url'] . '" data-toggle="pill" href="#' . $data[1]['subcategories'][0]['subcategories_url'] . '" role="tab" aria-controls="' . $data[1]['subcategories'][0]['subcategories_url'] . '" aria-expanded="true">' . strtoupper($data[1]['subcategories'][0]['subcategories_title']) . '</a>';

 for ($programs=1; $programs < $program_count; $programs++){
     echo '<a class="nav-link" id="pills-' . $data[1]['subcategories'][$programs]['subcategories_url'] . '" data-toggle="pill" href="#' . $data[1]['subcategories'][$programs]['subcategories_url'] . '" role="tab" aria-controls="' . $data[1]['subcategories'][$programs]['subcategories_url'] . '" aria-expanded="true">' . strtoupper($data[1]['subcategories'][$programs]['subcategories_title']) . '</a>';
 }
 ?>
 </div>
 <div class="tab-content col-xs-12 col-lg-10" id="tabcontent">
     <?php
   echo '<div class="tab-pane px-3 fade show active" id="' . $data[1]['subcategories'][0]['subcategories_url'] . '" role="tabpanel" aria-labelledby="' . $data[1]['subcategories'][0]['subcategories_url'] . '">
       <h2 class="text-center py-3">' . strtoupper($data[1]['subcategories'][0]['subcategories_title']) . '</h2><img src="' . $data[1]['subcategories'][0]['subcategories_splash'] . '" class="img-fluid d-block mx-auto my-2" alt="' . $data[1]['subcategories'][0]['subcategories_url'] . ' splash image"><h3 class="text-center"><a class="register-link btn btn-primary" href="' . $data[1]['subcategories'][0]['subcategories_registration'] . '">REGISTER HERE</a></h3>' . '<div class="pt-3 pb-5">' . $data[1]['subcategories'][0]['subcategories_text'] . '</div></div>';

       for($program_body=1; $program_body < $program_count; $program_body++){
           echo '<div class="tab-pane fade px-3" id="' . $data[1]['subcategories'][$program_body]['subcategories_url'] . '" role="tabpanel" aria-labelledby="' . $data[1]['subcategories'][$program_body]['subcategories_url'] . '">
               <h2 class="text-center py-3">' . strtoupper($data[1]['subcategories'][$program_body]['subcategories_title']) . '</h2><img src="' . $data[1]['subcategories'][$program_body]['subcategories_splash'] . '" class="img-fluid d-block mx-auto my-2" alt="' . $data[1]['subcategories'][$program_body]['subcategories_url'] . ' splash image"><h3 class="text-center"><a class="register-link btn btn-primary" href="' . $data[1]['subcategories'][$program_body]['subcategories_registration'] . '">REGISTER HERE</a></h3>' . '<div class="pt-3 pb-5">' . $data[1]['subcategories'][$program_body]['subcategories_text'] . '</div></div>';
       }
   ?>
 </div>
 </div>
 </div>

 <?php require 'footer.php'; ?>

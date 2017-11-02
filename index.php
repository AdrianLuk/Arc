<?php
$title = 'Arc Education Centre';

$description = 'Arc Education Centre is an innovative and inclusive place of belonging for learning. We provide an array of programs and classes to fit student needs and demands as we cater to their interests and passions. Our goal is to build bridges as pathways in each student’s journey of education.';

require 'header.php';
require 'navbar.php';
 ?>



<div class="jumbotron rounded-0">
    <div class="container d-flex flex-column justify-content-around">
 <h1>Achieve academically at Arc Education Centre</h1>
  <h3>Help your child discover their full potential with Arc's tutoring and programs</h3>
<div class="cta"><a href="contact.php" class="text-center btn btn-warning btn-lg text-uppercase">Get a free consultation</a></div>
</div>
</div>

    <h2 class=" py-3 text-center display-4 font-weight-bold">Find the right program for you</h2>
    <div class="container-fluid">
    <section class="row my-4">
        <article class="mt-5 col-xs-12 col-lg-4 d-flex align-items-center flex-column">
            <h3>Core &amp; Tutoring Classes</h3>
            <p class="lead px-5 py-3">Arc's teachers are highly qualified and invested in the educational needs of their students. We offer everything from core tutoring to music, art and ESL classes for all ages!</p>
            <a href="classes.php" class="d-block mt-auto mx-auto btn btn-warning text-uppercase font-weight-bold">classes and tutoring</a>
        </article>
        <article class="mt-5 col-xs-12 col-lg-4 d-flex align-items-center flex-column">
            <h3>Homeschool Programs</h3>
            <p class="lead px-5 py-3">The Creative Scholars is a Homeschool Program that offers classes in Fine Arts, Music, and S.T.E.A.M. for Homeschool families and children. Led by the 3 Arc Directors, Creative Scholars values creativity, critical thinking, and most importantly; learning while having fun! We strive to work alongside with Homeschool families and registration is open every term.</p>
            <a href="programs.php" class="d-block mt-auto mx-auto btn btn-warning text-uppercase font-weight-bold">Homeschool Programs</a>
        </article>
        <article class="mt-5 col-xs-12 col-lg-4 d-flex align-items-center flex-column">
            <h3>Afterschool programs</h3>
            <p class="lead px-5 py-3">We are happy to announce that we are facilitating after school programs at Peoples Christian Academy! Look out for <em>Move to the Beat</em> taught by our Director of Music, Benedict Chan and <em>Be Crafty Be Creative</em> with our Director of Art, Vicky Li. </p>
            <a href="about.php#partnerships" class="d-block mt-auto mx-auto btn btn-warning text-uppercase font-weight-bold">Afterschool programs</a>
        </article>
    </section>
    <component key=rlora></component>
    </div>
<div id="instagram-feed" class="pt-3">
			<h2 class="instagram-feed-title"><span class="fa fa-instagram"></span> Instagram Photos</h2>
			<ul class="instagram-photos pt-3 pl-0 row"></ul>
</div>
<?php require 'footer.php';?>

<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php"><img class="d-inline-block align-top" src="assets/images/arc-logo.png" width="30" height="30" alt="Arc Education Centre Logo"> <span class="d-none d-lg-inline-block align-top">ARC EDUCATION CENTRE</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="main-nav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="classes" data-toggle="dropdown">CLASSES</a>
        <div class="dropdown-menu" aria-labelledby="classes">
          <a class="dropdown-item" href="#">ART</a>
          <a class="dropdown-item" href="#">ESL &#124; CITIZENSHIP</a>
          <a class="dropdown-item" href="#">MUSIC</a>
          <a class="dropdown-item" href="#">TUTORING</a>
        </div>
      </li> -->
      <?php
        include 'navbar_data.php';
        $navigation_count = count($navigation);

        for ($i=0; $i < $navigation_count; $i++){
            $subcategories_count = count($navigation[$i]['subcategories']);
            array_push($data, $navigation[$i]);
            echo '<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="' . $navigation[$i]['url'] . '" id="' . $navigation[$i]['main'] . '" data-toggle="dropdown">' . strtoupper($navigation[$i]['main']) . '</a><div class="dropdown-menu" aria-labelledby="' . $navigation[$i]['main'] . '">';
              for($j=0; $j < $subcategories_count; $j++){

                  echo '<a class="dropdown-item" data-toggle="tab" href="' . $navigation[$i]['url'] . '#' . $navigation[$i]['subcategories'][$j]['subcategories_url'] . '">' . strtoupper($navigation[$i]['subcategories'][$j]['subcategories_title']) . '</a>';
              };
              echo '</div></li>';
        };

       ?>

      <li class="nav-item">
          <a class="nav-link" href="news.php">NEWS</a>
      </li>
      <li class="nav-item">
          <a href="events.php" class="nav-link">EVENTS</a>
      </li>
      <li class="nav-item">
          <a href="contact.php" class="nav-link">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>

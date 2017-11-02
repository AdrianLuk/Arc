<?php
$title = 'Events - Arc Education Centre';

$description = '';

require 'header.php';

 ?>

<?php require 'navbar.php';?>

<div class="container">
    <h1 class="text-center mt-3 pt-2" id="section-name">Events</h1>
<?php

$event_count = count($events);

for ($eventnum = 0; $eventnum < $event_count; $eventnum++){
    echo '<div class="row py-4"><div class="col-xs-12 col-md-2 pb-3"><div class="short-date mx-auto mw-75 p-2"><p class="lead mb-0 text-center">' . strtoupper(substr($events[$eventnum]['month'], 0, 3)) . '</p><p class="lead text-center mb-0">' . $events[$eventnum]['date'] . '</p></div></div><div class="col-xs-12 col-md-10 text-center"><h2>' . strtoupper($events[$eventnum]['title']) . '</h2><p class="lead mb-0">' . ucwords($events[$eventnum]['weekday'] . ', ' . $events[$eventnum]['month'] . ' ' . $events[$eventnum]['date'] . ', ' . $events[$eventnum]['year']) . '</p><p class="lead ">' . $events[$eventnum]['time'] . '</p><img class="img-fluid d-block mx-auto events-flyer py-2" src="' . $events[$eventnum]['splash'] . '" max-width="650" alt="' . $events[$eventnum]['title'] . ' flyer"><div class="container text-left pt-4">' . $events[$eventnum]['body'];
    echo '</div></div></div><hr>';
}

 ?>
</div>

<?php require 'footer.php';?>

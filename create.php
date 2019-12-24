<?php

include_once('config/init.php');

?>

<?php
$job = new Job;

$template = new Template('templates/frontpag/job-create.php');



//dynamic values added to object


$template->categories = $job->getCategories();


echo $template;
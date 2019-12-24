<?php

include_once('config/init.php');

?>

<?php
$job = new Job;

$template = new Template('templates/frontpage.php');

//dynamic values added to object

$template->title = 'latest jobs';
$template->jobs = $job->getAllJobs();


echo $template;
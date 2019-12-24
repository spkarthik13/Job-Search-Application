<?php

include_once('config/init.php');

?>

<?php
$job = new Job;

$template = new Template('templates/job-single.php');

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

//dynamic values added to object

$template->job = $job->getJob($job_id);


echo $template;
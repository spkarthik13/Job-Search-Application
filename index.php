<?php

include_once('config/init.php');

?>

<?php
$job = new Job;

$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
    $template->title = 'Jobs in ' . $job->getCategory($category)->name;
    $template->jobs = $job->getByCategory($category);
}else{
    $template->title = 'latest jobs';
    $template->jobs = $job->getAllJobs();
}

//dynamic values added to object


$template->categories = $job->getCategories();


echo $template;
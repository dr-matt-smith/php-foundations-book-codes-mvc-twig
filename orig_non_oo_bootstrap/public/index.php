<?php
require_once '../src/controllerFunctions.php';

$action = filter_input(INPUT_GET, 'action');
if(empty($action)){
    $action = filter_input(INPUT_POST, 'action');
}

switch ($action){
    case 'contact':
        displayContactDetails();
        break;

    case 'enquiryForm':
        displayForm();
        break;

    case 'processForm':
        processForm();
        break;

    default:
        displayHomePage();
}

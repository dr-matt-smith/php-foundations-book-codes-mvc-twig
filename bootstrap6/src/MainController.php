<?php


class MainController
{
    public function home()
    {
        require_once __DIR__ . '/../templates/homepage.php';
    }

    public function contact()
    {
        require_once __DIR__ . '/../templates/contactDetails.php';
    }


    public function enquiryForm()
    {
        require_once __DIR__ . '/../templates/enquiryForm.php';
    }

    public function processForm()
    {
        $customerName = filter_input(INPUT_GET, 'customerName');
        $customerEmail = filter_input(INPUT_GET, 'customerEmail');
        $enquiry = filter_input(INPUT_GET, 'enquiry');

        // assuming all data is valid ...
        require_once __DIR__ . '/../templates/confirmData.php';
    }
}
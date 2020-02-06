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

        $errors = $this->validateFormData($customerName, $customerEmail, $enquiry);

        if(sizeof($errors)>0){
            require_once '../templates/displayError.php';
        } else {
            $this->confirmData($customerName, $customerEmail, $enquiry);
        }
    }

    private function validateFormData($customerName, $customerEmail, $enquiry)
    {
        $errors = [];
        if (empty($customerName)) {
            $errors[] = 'missing customer name';
        }

        if (empty($customerEmail)) {
            $errors[] = 'missing or invalid customer email';
        }

        if (empty($enquiry)) {
            $errors[] = 'missing enquiry message';
        }

        return $errors;
    }

    private function confirmData($customerName, $customerEmail, $enquiry)
    {
        require_once __DIR__ . '/../templates/confirmData.php';
    }

    function displayErrorMessage()
    {
        $errorMessage = 'invalid - name must contain at least 3 letters';
    }

}
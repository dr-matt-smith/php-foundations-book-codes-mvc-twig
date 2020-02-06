<?php


class WebApplication
{
    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');
        $mainController = new MainController();

        switch($action){
            case 'enquiryForm':
                $mainController->enquiryForm();
                break;

            case 'contact':
                $mainController->contact();
                break;

            case 'index':
            default:
                $mainController->home();
        }
    }

}
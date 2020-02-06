<?php


class WebApplication
{
    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');

        switch($action){
            case 'contact':
                $this->contact();
                break;

            case 'index':
            default:
                $this->home();
        }
    }

    private function home()
    {
        require_once __DIR__ . '/../templates/homepage.php';
    }


    private function contact()
    {
        require_once __DIR__ . '/../templates/contactDetails.php';
    }
}
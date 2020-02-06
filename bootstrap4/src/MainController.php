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
}
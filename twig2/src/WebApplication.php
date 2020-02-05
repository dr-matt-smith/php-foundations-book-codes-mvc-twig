<?php
namespace Tudublin;

class WebApplication
{
    const PATH_TO_TEMPLATES = __DIR__ . '/../templates';

    private $mainController;

    public function __construct()
    {
        $twig = new \Twig\Environment(new \Twig\Loader\FilesystemLoader(self::PATH_TO_TEMPLATES));
        $this->mainController = new MainController($twig);
    }

    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');

        switch($action) {
            case 'jokes':
                $this->mainController->jokes();
                break;

            case 'index':
            default:
                $this->mainController->index();
        }
    }
}

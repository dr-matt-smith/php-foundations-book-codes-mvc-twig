<?php
namespace Tudublin;

class MainController
{
    private $twig;

    public function __construct(\Twig\Environment $twig)
    {
        $this->twig = $twig;
    }

    public function index()
    {
        $template = 'home.html.twig';
        $argsArray = [
            'pageTitle' => 'home'
        ];
        $html =  $this->twig->render($template, $argsArray);
        print $html;
    }

    public function jokes()
    {
        $template = 'jokes.html.twig';
        $argsArray = [
            'pageTitle' => 'jokes'
        ];
        $html =  $this->twig->render($template, $argsArray);
        print $html;
    }
}
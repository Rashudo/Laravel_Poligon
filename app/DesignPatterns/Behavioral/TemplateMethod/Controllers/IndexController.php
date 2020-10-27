<?php


namespace App\DesignPatterns\Behavioral\TemplateMethod\Controllers;



class IndexController extends AbstractController
{

    /**
     * @return string
     */
    public function run(): string
    {
        return __METHOD__;
    }

    /**
     * @return string
     */
    protected function hook(): string
    {
        parent::hook();
        return __METHOD__;
    }
}

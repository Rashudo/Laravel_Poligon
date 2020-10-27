<?php


namespace App\DesignPatterns\Behavioral\Strategy\Interfaces;


interface SalaryStrategyInterface
{

    public function calc(&$period, &$user): int;

    public function getName(): string ;
}

<?php


namespace App\DesignPatterns\Behavioral\Strategy\Strategies;


use App\DesignPatterns\Behavioral\Strategy\Interfaces\SalaryStrategyInterface;

abstract class AbstractStrategy implements SalaryStrategyInterface
{
    public function calc(&$period, &$user): int
    {
        return rand(500, 2000);
    }

    public function getName(): string
    {
        return class_basename(static::class);
    }

}

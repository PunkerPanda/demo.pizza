<?php
namespace LightSpeed\Retail\Restaurant\Pizzeria;


class PizzaTest extends \TestCase
{

    /**
     * @test
     */
    function canHavePizza()
    {
        $pizza = new Pizza();
    }

    /**
     * @test
     */
    function canHavePizzaWithMushroomsCondiment()
    {
        $pizza = new Condiment\MushroomCondiment();
        $pizza = new Pizza();
    }

} 
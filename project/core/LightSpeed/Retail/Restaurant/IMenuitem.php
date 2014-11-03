<?php
namespace LightSpeed\Retail\Restaurant;

use LightSpeed\Cart\ICart;
use LightSpeed\CRM\ICustomer;

interface IMenuitem
{
    function add(ICart $cart, $quantity);
    function remove(ICart $cart, $quantity);
    function order(ICustomer $customer);
}
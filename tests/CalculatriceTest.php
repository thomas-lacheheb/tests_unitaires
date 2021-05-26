<?php

namespace Test;

use App\Calculatrice;

use PHPUnit\Framework\TestCase;

class CalculatriceTest extends TestCase
{
    public function testAdd()
    {
        $add = new Calculatrice();
        $this->assertEquals(4, $add->add(1, 3));
    }

    public function testSub()
    {     
        $sub = new Calculatrice();   
        $this->assertEquals(3, $sub->sub(10, 7));
    }

    public function testMul()
    {
        $mul = new Calculatrice();
        $this->assertEquals(25, $mul->mul(5, 5));
    }

    public function testDiv()
    {
        $div = new Calculatrice();
        $this->assertEquals(2, $div->div(16, 8));
    }
}
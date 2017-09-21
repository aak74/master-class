<?php
include_once __DIR__ . '/../src/fun6.php';

class FunTest extends \PHPUnit\Framework\TestCase
{

    public function testSilver()
    {
        $pattern = ['серебро'];
        $this->assertEquals($pattern, transform([' серебро']));
        $this->assertEquals($pattern, transform(['серебро']));
        $this->assertEquals($pattern, transform([' серебряный обрез']));
        $this->assertEquals($pattern, transform(['серебряный обрез']));
        $this->assertEquals($pattern, transform(['с серебряным обрезом']));
        $this->assertEquals($pattern, transform([' с серебряным обрезом']));
    }

    public function testGold()
    {
        $pattern = ['золото'];
        $this->assertEquals($pattern, transform([' золото']));
        $this->assertEquals($pattern, transform(['золото']));
        $this->assertEquals($pattern, transform(['золотой обрез']));
        $this->assertEquals($pattern, transform([' золотой обрез']));
        $this->assertEquals($pattern, transform(['с золотым обрезом']));
        $this->assertEquals($pattern, transform([' с золотым обрезом']));
    }
}

<?php declare(strict_types = 1);

namespace PHPNOF\tests\Menu;
use PHPNOF\Menu;

class ArrayMenuReaderTester  extends \PHPUnit_Framework_TestCase
{
    public function testMenuInstanciation()
    {
        $menus = [];
        $arrayMenu = new ArrayMenuReader();
        for($i = 0; $i < 10; $i++){
            $menus[] = $arrayMenu->readMenu();
        }

        $this->assertCount(count($menus), array_unique($menus));
    }
}
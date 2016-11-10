<?php declare(strict_types = 1);

namespace PHPNOF\Menu;

interface MenuReader
{
    public function readMenu() : array;
}
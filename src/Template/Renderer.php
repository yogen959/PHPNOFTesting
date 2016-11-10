<?php declare(strict_types = 1);

namespace PHPNOF\Template;

interface Renderer
{
    public function render($template, $data = []) : string;
}
<?php declare(strict_types = 1);

namespace PHPNOF\Page;

interface PageReader
{
    public function readBySlug(string $slug) : string;
}
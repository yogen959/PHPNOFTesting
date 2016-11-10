<?php declare(strict_types = 1);

return [
    ['GET', '/', ['PHPNOF\Controllers\Homepage', 'show']],
    ['GET', '/{slug}', ['PHPNOF\Controllers\Page', 'show']]
];
<?php declare(strict_types = 1);


return [
    ['GET', '/', ['Example\Controllers\Homepage', 'show']],
    ['GET', '/test', ['Example\Controllers\TestController', 'show2']],

];
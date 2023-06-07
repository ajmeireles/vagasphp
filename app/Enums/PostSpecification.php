<?php

namespace App\Enums;

use App\Enums\Traits\ToArray;

enum PostSpecification: int
{
    use ToArray;

    case Php         = 1;
    case Laravel     = 2;
    case CodeIgniter = 3;
    case Symfony     = 4;
    case CakePHP     = 5;
    case Zend        = 6;
    case Phalcon     = 7;
    case Slim        = 8;
    case Lumen       = 9;
    case Yii         = 10;
    case WordPress   = 11;
}

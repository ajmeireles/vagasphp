<?php

namespace App\Enums;

use App\Enums\Traits\ToArray;

enum PostModel: int
{
    use ToArray;

    case Ctl      = 1;
    case Contract = 2;
}

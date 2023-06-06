<?php

namespace App\Enums;

use App\Enums\Traits\ToArray;

enum PostType: int
{
    use ToArray;

    case Freelance = 1;
    case Ctl       = 2;
    case Contract  = 3;
}

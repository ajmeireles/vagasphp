<?php

namespace App\Enums;

use App\Enums\Traits\ToArray;

enum PostStatus: int
{
    use ToArray;

    case Review   = 1;
    case Approved = 2;
    case Rejected = 3;
}

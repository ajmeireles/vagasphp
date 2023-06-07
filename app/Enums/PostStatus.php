<?php

namespace App\Enums;

use App\Enums\Traits\ToArray;

enum PostStatus: int
{
    use ToArray;

    case InReview = 1;
    case Approved = 2;
    case Expired  = 3;
    case Rejected = 4;
}

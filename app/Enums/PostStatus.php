<?php

namespace App\Enums;

use App\Enums\Traits\{ToArray, ToTranslate};

enum PostStatus: int
{
    use ToArray;
    use ToTranslate;

    case InReview = 1;
    case Approved = 2;
    case Expired  = 3;
    case Rejected = 4;
}

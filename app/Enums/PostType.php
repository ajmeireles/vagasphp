<?php

namespace App\Enums;

use App\Enums\Traits\{ToArray, ToTranslate};

enum PostType: int
{
    use ToArray;
    use ToTranslate;

    case Freelance = 1;
    case Temporary = 2;
    case Intership = 3;
    case Permanent = 4;
}

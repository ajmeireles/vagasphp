<?php

namespace App\Enums;

use App\Enums\Traits\{ToArray, ToTranslate};

enum PostModel: int
{
    use ToArray;
    use ToTranslate;

    case Ctl      = 1;
    case Contract = 2;
}

<?php

namespace App\Enums;

use App\Enums\Traits\{ToArray, ToTranslate};

enum PostModality: int
{
    use ToArray;
    use ToTranslate;

    case Presential = 1;
    case Remote     = 2;
    case Hybrid     = 3;
}

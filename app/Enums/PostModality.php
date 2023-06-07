<?php

namespace App\Enums;

use App\Enums\Traits\ToArray;

enum PostModality: int
{
    use ToArray;

    case Presential = 1;
    case Remote     = 2;
    case Hybrid     = 3;
}

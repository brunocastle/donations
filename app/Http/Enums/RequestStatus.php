<?php

namespace App\Http\Enums;

enum RequestStatus: int
{
    case Pending = 1;
    case InProgress = 2;
    case Completed = 3;
    case Expired = 4;
}

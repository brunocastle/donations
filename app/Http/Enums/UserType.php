<?php

namespace App\Http\Enums;
enum UserType: int
{
    case Admin = 1;
    case Moderator = 2;
    case Common = 3;
}

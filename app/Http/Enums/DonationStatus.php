<?php

namespace App\Http\Enums;
enum DonationStatus: int
{
    case Announced = 1;
    case Shipped = 2;
    case Canceled = 3;
    case Received = 4;
    case Expired = 5;
}

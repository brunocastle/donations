<?php

namespace App\Http\Enums;

enum RequestStatus: int
{
    case Pending = 1;
    case InProgress = 2;
    case Concluded = 3;
    case Expired = 4;

    public function getName(): string
    {
        return match ($this) {
            RequestStatus::Pending => __('request-status.pending'),
            RequestStatus::InProgress => __('request-status.in-progress'),
            RequestStatus::Concluded => __('request-status.completed'),
            RequestStatus::Expired => __('request-status.expired'),
        };
    }

    public function getBadgePill(): string
    {
        $class = match ($this) {
            RequestStatus::Pending => 'badge rounded-pill text-bg-secondary',
            RequestStatus::InProgress => 'badge rounded-pill text-bg-primary',
            RequestStatus::Concluded => 'badge rounded-pill text-bg-success',
            RequestStatus::Expired => 'badge rounded-pill text-bg-dark',
        };

        return '<span class="'. $class .'">' . $this->getName() . '</span>';
    }
}

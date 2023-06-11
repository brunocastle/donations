<?php

use App\Http\Enums\RequestStatus;
use App\Http\Enums\RequestType;

function randomElement(array $data): mixed
{
    return collect($data)->random();
}

function getRequestCategoryImage(string $token): string
{
    return asset('images/request_categories/' . $token . '.jpg');
}

function getBadgePill(int $status): string
{
    return RequestStatus::tryFrom($status)->getBadgePill();
}

<?php

function randomElement(array $data): mixed
{
    return collect($data)->random();
}

function getRequestCategoryImage(string $token): string
{
    return asset('images/request_categories/' . $token . '.jpg');
}

<?php

namespace App\Http\Controllers;

use App\Http\Enums\RequestStatus;
use App\Models\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\View\Factory;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): Factory|View
    {
        $requests = Request::query()
            ->with([
                'organization:id,name',
                'requestCategory:id,token,image',
            ])
            ->select([
                'id',
                'title',
                'description',
                'status',
                'request_category_id',
                'organization_id',
                'updated_at',
            ])
            ->whereIn('status', [
                RequestStatus::Pending,
                RequestStatus::InProgress,
            ])
            ->limit(20)
            ->get();

        return view('home', ['requests' => $this->handle($requests)]);
    }

    private function handle(Collection $data): Collection
    {
        return $data
            ->map(function (Request $request) {
                $limit = 200 - Str::length($request->title);
                $request->description = Str::limit($request->description, $limit);
                return $request;
            })
            ->sortByDesc('updated_at');
    }
}

<?php

namespace App\Http\Controllers;



use App\Http\Enums\DonationStatus;
use App\Http\Enums\RequestStatus;
use App\Models\Donation;
use Illuminate\Support\Facades\Auth;

class DonateController extends Controller
{
    public function __invoke($requestId)
    {
        $donation = Donation::create([
            'request_id' => $requestId,
            'user_id' => Auth::user()->id,
            'status' => DonationStatus::Announced,
        ]);


        $request = $donation->request;
        $request->status = RequestStatus::InProgress;
        $request->save();


        return redirect('/requests/' . $request->id);
    }
}

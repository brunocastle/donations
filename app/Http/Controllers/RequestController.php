<?php

namespace App\Http\Controllers;



use App\Models\Request;

class RequestController extends Controller
{
    public function show($id)
    {
        $request = Request::query()
            ->with(['donations'])
            ->where('id',$id)
            ->firstOrFail();

        return view('requests.show', [
            'request' => $request
        ]);
    }
}

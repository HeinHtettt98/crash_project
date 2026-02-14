<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeedExchangeRequest;
use App\Http\Requests\StoreDeedLeaseRequest;
use App\Http\Requests\StoreDeedPayRequest;
use App\Http\Requests\StoreDeedPledgeRequest;
use App\Http\Requests\StoreDeedTradingRequest;
use App\Models\Deed;
use Illuminate\Http\Request;

class DeedController extends Controller
{
    public function index($deed_type)
    {
        $deed = Deed::where('deed_type_id', $deed_type)->get();
        return response()->json([
            'data' => $deed
        ]);
    }

    public function show(Deed $deed)
    {
        return response()->json([
            'data' => $deed->load('deedType') // Eager load the deed type relationship
        ]);
    }

    public function store(Request $request)
    {
        switch ($request->deed_type_id) {

            case 1:
                $validated = app(StoreDeedTradingRequest::class)->validated();
                break;

            case 2:
                $validated = app(StoreDeedPayRequest::class)->validated();
                break;

            case 3:
                $validated = app(StoreDeedLeaseRequest::class)->validated();
                break;

            case 4:
                $validated = app(StoreDeedExchangeRequest::class)->validated();
                break;

            case 5:
                $validated = app(StoreDeedPledgeRequest::class)->validated();
                break;
        }
        $validated['deed_type_id'] = $request->deed_type_id;
        $deed = Deed::create($validated);
        return response()->json([
            'message' => 'Deed created successfully!',
            'data' => $deed
        ]);
    }

    public function destroy(Deed $deed)
    {
        $deed->delete();
        return response()->json([
            'message' => 'Deed deleted successfully',
        ], 200);
    }
}

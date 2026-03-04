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

    private function resolveValidationRequest($deed_type_id)
    {
        switch ($deed_type_id) {
            case 1: // Trading
                return app(StoreDeedTradingRequest::class)->validated();
            case 2: // Pay
                return app(StoreDeedPayRequest::class)->validated();
            case 3: // Lease
                return app(StoreDeedLeaseRequest::class)->validated();
            case 4: // Exchange
                return app(StoreDeedExchangeRequest::class)->validated();
            case 5: // Pledge
                return app(StoreDeedPledgeRequest::class)->validated();
            default:
                throw new \InvalidArgumentException('Invalid deed type ID');
        }
    }

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
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $this->resolveValidationRequest($request->deed_type_id);
        $validated['deed_type_id'] = $request->deed_type_id;
        $deed = Deed::create($validated);
        return response()->json([
            'message' => 'Deed store successfully!',
            'deed' => $deed
        ], 201);
    }

    public function update(Request $request, Deed $deed)
    {
        $validated = $this->resolveValidationRequest($request->deed_type_id);
        $validated['deed_type_id'] = $request->deed_type_id;
        $deed->update($validated);
        return response()->json([
            'message' => 'Deed updated successfully!',
            'deed' => $deed->fresh() // Return the updated deed
        ], 201);
    }

    public function destroy(Deed $deed)
    {
        $deed->delete();
        return response()->json([
            'message' => 'Deed deleted successfully',
        ], 200);
    }
}

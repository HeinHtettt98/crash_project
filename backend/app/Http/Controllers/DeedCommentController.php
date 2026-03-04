<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeedCommentRequest;
use App\Models\Deed_Comment;
use Illuminate\Http\Request;

class DeedCommentController extends Controller
{

    public function myComments()
    {
        $userId = auth()->id();

        $comments = Deed_Comment::with([
            'sender:id,name,username,role_id',
            'receiver:id,name,username,role_id',
            'fromOffice:id,name',
            'toOffice:id,name',
            'deed',
        ])
            ->where(function ($query) use ($userId) {
                $query->where('from_user_id', $userId)
                    ->orWhere('to_user_id', $userId);
            })
            ->latest()
            ->get();

        return response()->json([
            'success' => true,
            'data' => $comments
        ]);
    }
    function store(StoreDeedCommentRequest $request)
    {
        $validated = $request->validated();
        $data = [
            'deed_id'        => $validated['deed_id'] ?? null,
            'from_office_id' => $validated['from_office_id'] ?? null,
            'from_user_id'   => $validated['from_user_id'] ?? null,
            'to_office_id'   => $validated['to_office_id'] ?? null,
            'to_user_id'     => $validated['to_user_id'] ?? null,
            'message'        => [
                [
                    'message' => $validated['message'],
                    'sender_id' => $validated['from_user_id'] ?? null,
                    'created_at' => now(),
                ]
            ],
        ];
        $record = Deed_Comment::create($data);

        return response()->json([
            'success' => true,
            'data' => $record
        ]);
    }
}

<?php

// app/Http/Controllers/MessageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    // メッセージ一覧を取得
    public function index()
    {
        $messages = Message::where('to_user_id', Auth::id())
                            ->orWhere('from_user_id', Auth::id())
                            ->get();

        return response()->json($messages);
    }

    // 新しいメッセージを作成
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'to_user_id' => 'required',
            'message' => 'required|string',
        ]);

        $message = Message::create([
            'from_user_id' => Auth::id(),
            'to_user_id' => $validatedData['to_user_id'],
            'message' => $validatedData['message'],
        ]);

        return response()->json($message);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeTextRequest;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function __invoke(storeTextRequest $request)
    {
        $data = $request->validated();
        return response()->json($data['text']);
    }
}

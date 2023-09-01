<?php

namespace App\Http\Controllers;
use App\Models\Qrcode;
use Illuminate\Http\Request;

class Search extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $specificRecord = Qrcode::findById($request->search);
        return $specificRecord;
    }
}

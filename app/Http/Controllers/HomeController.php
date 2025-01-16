<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Fetch the first record with the 'name' field
        $data = Data::select('name')->first();

        // Return the data as a JSON response
        return response()->json($data);
    }
}

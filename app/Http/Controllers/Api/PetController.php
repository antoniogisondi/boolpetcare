<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pet;

class PetController extends Controller
{
    public function index(){
        $pets = Pet::all()->paginate(3);
        return response()->json([
            'success'  => true,
            'results'  => $pets
        ]);
    }
}

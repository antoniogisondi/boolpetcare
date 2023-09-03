<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pet;

class PetController extends Controller
{
    public function index(){
        $pets = Pet::paginate(3);
        return response()->json([
            'success'  => true,
            'results'  => $pets
        ]);
    }

    public function show($slug){
        $pet = Pet::all()->where('slug', $slug)->first();

        if($pet){
            return response()->json([
                'success'  => true,
                'pet'  => $pet
            ]);
        }
        else{
            return response()->json([
                'success'  => false,
                'error'  => 'Nessun animale trovato'
            ]);
        }
    }
}

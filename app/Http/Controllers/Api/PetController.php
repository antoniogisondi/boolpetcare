<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Illness;
use App\Models\Vaccination;



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
<<<<<<< HEAD
        $pet = Pet::with('illnesses', 'vaccinations')->where('slug', $slug)->first();
=======

        $pet = Pet::with('vaccinations', 'illnesses')->where('slug', $slug)->first();
>>>>>>> 753f53faf35b0a64ce89091f871c6bf441a97e94

        if($pet){
            
            return response()->json([
                'success' => true,
                'pet' => $pet
            ]);

        } else{

            return response()->json([
                'success' => false,
                'error' => 'Nessun progetto trovato'
            ]);
        }
    }
}

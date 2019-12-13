<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Race;
use Validator;

class AnimalController extends Controller
{
    //READ
    public function showList()
    {      
        $animals=Animal::All();
        return view('showAnimals',compact('animals')); 
    }

    //CREATE 
    public function createAnimal()
    {
        $races=Race::All();
        return view('createAnimal', compact('races')); 
    }

    public function storeAnimal(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
            'sexe' => 'required|max:50|string',
            'age' => 'required|integer',
            'weight' => 'required|integer',
            'height' => 'required|integer',
            'race_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect('/createAnimal')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $animal=new Animal([
            "name" => $request->name,
            "sexe" => $request->sexe,
            "age" => $request->age,
            "weight" => $request->weight,
            "height" => $request->weight,
            "race_id" => $request->race_id,
        ]);

        $animal->save();

        return redirect('/showAnimals');
        }   
    }

    //UPDATE
    public function editAnimal($id)
    {
        $animal=Animal::find($id);
        $races=Race::All();
        return view('editAnimal', compact ('animal','races'));
        
    }

    public function modifyAnimal(Request $request , $id)
    {     
        $animal=Animal::find($id);

        $animal->name = $request->name;
        $animal->sexe = $request->sexe;
        $animal->age = $request->age;
        $animal->weight = $request->weight;
        $animal->height = $request->height;
        $animal->race_id = $request->race_id;


        $animal->save();

        return redirect('/showAnimals');

    }

    //DELETE
    public function deleteAnimal($id)
    {
        $animal=Animal::find($id);

        $animal->delete();

        return redirect('/showAnimals');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Race;
use App\Classe;
use Validator;

class RaceController extends Controller
{
    //READ
    public function showRaces()
    {      
        $races=Race::All();
        return view('showRaces',compact('races')); 
    }

    //CREATE 
    public function createRace()
    {
        $classes=Classe::All();
        return view('createRace', compact('classes')); 
    }

    public function storeRace(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
            'life' => 'required|integer',
            'class_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect('/createRace')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $race=new Race([
            "name" => $request->name,
            "life" => $request->life,
            "class_id" => $request->class_id,
        ]);

        $race->save();

        return redirect('/showRaces');
        }   
    }

    //UPDATE
    public function editRace($id)
    {
        $race=Race::find($id);
        $classes=Classe::All();
        return view('editRace', compact ('race','classes'));
        
    }

    public function modifyRace(Request $request , $id)
    {     
        $race=Race::find($id);

        $race->name = $request->name;
        $race->life = $request->life;
        $race->class_id = $request->class_id;

        $race->save();

        return redirect('/showRaces');

    }

    //DELETE
    public function deleteRace($id)
    {
        $race=Race::find($id);

        $race->delete();

        return redirect('/showRaces');

    }
}

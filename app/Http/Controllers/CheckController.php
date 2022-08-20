<?php

namespace App\Http\Controllers;

use App\Models\check;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CheckController extends Controller
{
    
    // Show Create Form
    public function check() {
        return view('classify.check');
    }
    // Store checks Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'innovation' => ['required', Rule::unique('checks', 'innovation')],
            'computer_prog' => 'required',
            'embeded_device' => 'required',
            'standalone' => 'required',
            'act_defferent' => 'required',
            'patient_benefit' => 'required',
            'purpose_sec_12a' => 'required',
            'accesssory' => 'required',
           
        ]);

       // if($request->hasFile('logo')) {
           // $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        //}

        $formFields['user_id'] = auth()->id();

        check::create($formFields);


    

        return redirect('/classify/conditional')->with('message', 'Check created successfully!');
    }

     // conditional staments
     public function conditional() {
        
        return view('classify.conditional');
    }
   
}

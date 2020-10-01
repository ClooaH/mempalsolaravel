<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signup;

class SignupController extends Controller
{
    public function store() {

        request()->validate([
            'email' => 'required',
            'sum' => 'required',
        ]);

        $signup = new Signup();

        $signup->email = request('email');
        $signup->sum = request('sum');

        $signup->save();
        return redirect('/');
    }
}

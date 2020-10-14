<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signup;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignupMail;

class SignupController extends Controller
{
    public function store() {

        request()->validate([
            'email' => 'required|unique:signups',
            'sum' => 'required',
        ]);

        $signup = new Signup();

        $signup->email = request('email');
        $signup->sum = request('sum');

        $signup->save();

        Mail::to(request('email'))
            ->send(new SignupMail());

        return redirect('/');
    }
    
    public function destroy(Request $request) {
        $request->validate([
            'email' => ['required', 'email']
        ]);

        $signup = \App\Models\Signup::where('email', $request->input('email'));
        $signup->delete();

        return redirect('/')->with('regret', 'Regret has been noted.');
    }
}

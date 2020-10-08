<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile.index');
    }

    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
    {

        $profile = Profile::updateOrCreate(
            ['user_id' => Auth::id()],
            ['phone' => $request->phone]
            );
        return redirect('profile')->with('message', 'The data are successfully updated!');
    }
}

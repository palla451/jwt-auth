<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function me()
    {
        $user = Auth::user();

        return view('profile', compact('user'));
    }

    public function show(int $id){

        if (Gate::denies('show-profile', $id)){
            abort(403, 'Unathorized action');
        }

        $user = User::findOrFail($id);
        return view('profile', compact('user'));
    }

    public function show2(Request $request, int $id){

        $loggedUser = $request->user();

        $userProfile = User::findOrFail($id);

        if ($loggedUser->can('view', $userProfile)){
            return response()->json($userProfile);
        }

        return response()->json(['error' => 'Forbidden'], 403);
    }

}

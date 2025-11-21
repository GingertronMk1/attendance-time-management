<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ToggleShiftController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = auth()->user();
        if (\str_starts_with(auth()->user()->email, 'admin@') && $request->has('user_id')) {
            $user = User::query()->findOrFail($request->post('user_id'));
        }

        $user->toggleShift();

        return \back();
    }
}

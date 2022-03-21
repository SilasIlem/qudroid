<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\TemporaryFile;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_no' => $request->phone_no,
            'age' => $request->age,
            'address' => $request->address,
            'nationality' => $request->nationality,
            'bio' => $request->bio,
            'avatar' => 0,
            'portfolio' => 0
        ]);

        if ($request->hasFile('avatar')) {
            dd($request->avatar);
            $tmp_file = TemporaryFile::where('folder_name', $request->avatar);
            if ($tmp_file) {
                $user->addMedia(storage_path('app/public/avatars/tmp/' . $request->avatar . '/' . $tmp_file->file_name))
                    ->toMediaCollection('avatars');
                rmdir(storage_path('app/public/avatars/tmp/', $request->avatar));

                $tmp_file->delete();
            }
        } else {
            $user->avatar = $request->q_vatar;
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

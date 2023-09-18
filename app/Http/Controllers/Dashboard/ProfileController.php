<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index (): View
    {
        $id = User::findOrFail(auth()->user()->id);
        $user = auth()->user();
        return view('dashboard.profile', compact('id', 'user'));
    }

    public function update (ProfileRequest $request, $id): RedirectResponse
    {
        $user = auth()->user();
        $current_password = $request->password;

        if (Hash::check($current_password, $user->password)) {
            if (Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }

            $file_name = $request->file('avatar')->store('avatar', 'public');

            $user->update([
                'name'          => $request->input('name'),
                'email'         => $request->input('email'),
                'deskripsi'     => $request->input('deskripsi'),
                'avatar'        => $file_name,
                'password'      => $request->input('password-baru')
            ]);

            alert()->success('Success','Berhasil diperbaharui.')->autoClose(5000);
            return redirect()->back();

        } else {
            return redirect()->back()->with('error', 'Kata sandi lama anda salah.');
        }
    }
}

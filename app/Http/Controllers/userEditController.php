<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class userEditController extends Controller
{

    public function edit($id)
    {
        // Ensure that only student records can be edited
        $user = User::where('id', $id)->where('level', 'Student')->firstOrFail();
        return view('admin.edituser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'active' => 'required|boolean',
        ]);

        $user = User::where('id', $id)->where('level', 'Student')->firstOrFail();
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'active' => $request->active,
        ]);

        return redirect()->route('listUser')->with('success', 'Student updated successfully');
    }
}

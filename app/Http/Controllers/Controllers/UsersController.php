<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\PropertyUsers;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Mockery\Exception;

class UsersController extends Controller
{
    public function createUsers() {
        $users = User::with('propertyUser')->get();
        echo $users;

        $properties = Properties::all();
        return view('pages.laravel-examples.user-management', compact('users', 'properties'));
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'property' => 'nullable'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $property = $request->input('property');

        if ($user->save()) {
            $role = Role::find(2);

            $user->roles()->attach($role);

            $propertyUser = new PropertyUsers();
            $propertyUser->user_id = $user->id;
            $propertyUser->property_id = $property;

            $propertyUser->save();

            $token = $user->createToken('auth_token')->plainTextToken;
            return back()->with('success', 'User added successful');
        } else {
            throw ValidationException::withMessages([
                'email' => 'Registration Failed'
            ]);
        }
    }

    public function getAllUsers() {
        $users = User::all();
        return $users;
    }

    public function findUser($id)
    {
        $user = User::find($id);

        return $user;
    }

    public function update(Request $request, $id)
    {
        $user = $this->findUser($id);
        $user->name = $request->input('name');

        if ($user->save()) {
            return back()->with('success', 'Block updated successfully');
        } else {
            return back()->with('fail', 'An error occurred');
        }
    }

    public function delete($id) {
        $user = User::find($id);
        $user->delete();

        return redirect() -> back() ->with('success', 'User deleted successfully');
    }

    public function view($id) {

        $blocks = $this->findUser($id);
        return view('pages.view-block', compact('blocks'));
    }
}

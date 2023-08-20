<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function UserRegistration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|min:4|max:25|regex:/^(?=.*[A-Za-z0-9]).{4,}$/u',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:10|max:255|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!$#%@]).{4,}$/',
        ]);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'error' => $errors
            ], 400);
        }

        if ($validator->passes()) {
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'name' =>$request->name,
                'address' =>$request->address,
                'phone_nb' =>$request->phone_nb,
                'birthdate' => $request->birthdate,
                'role' => 1

            ]);

        }
        auth()->login($user);
        return response()->json([
            'user' => auth()->user(),
            'message' => 'User added successfully'
        ], 201);
    }

    public function Login(Request $request)
    {
        // if (!Auth::attempt($reached quest->only('email', 'password'))) {
        //     return response()->json([
        //         'message' => 'Invalid login details'
        //     ], 401);
        // }

        $user = User::where('email', $request['email'])->firstOrFail();
        if (!$user || !Hash::check($request['password'], $user->password)) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }
        Auth::logout();
        Auth::login($user);
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'isAdmin'=>$user->role,
                'access_token' => $token,
            ], 200);
        

    }


    public function getUser(){

        
        $user=auth()->user();

        return response()->json([
            'id'=>$user->id,
            'role'=>$user->role,
            'name'=>$user->username,
        ], 200);

    }

    public function getUserProfile(){

        
        $user=auth()->user();

        return response()->json($user);

    }

    public function logoutUser(Request $request) 
    {
        auth()->user()->tokens()->delete();
        return [
            'message' => 'user logged out'
        ];
    }

    public function updateUser(Request $request){

        $user=User::where('id','=',$request->id)->first();

        Log::info($user);
        if(!empty($request->email)){

        $user->email=$request->email;
    }
        if(!empty($request->username)){

        $user->username=$request->username;
    }
        if(!empty($request->phone_nb)){

        $user->phone_nb=$request->phone_nb;
    }
        if(!empty($request->address)){

        $user->address=$request->address;
    }
        if(!empty($request->password)){
        $user->password=Hash::make($request->password);}

        if(!empty($request->image)){

            $image=$request->image;
            $name = time().rand(1,50).'.'.$image->extension();
            $image->move(public_path('profiles'), $name); 
             
            $user->image=$name;

        }
        
        $user->save();


         return redirect()->back()->with('success', 'User Updated Successfully');


    }
    

}

<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Tile;
use App\Models\Sanitaryware;
use App\Models\Service;
use App\Models\Problem;
use App\Models\ProblemFile;
use App\Models\service_images;
use League\ColorExtractor\Color;
use League\ColorExtractor\ColorExtractor;
use League\ColorExtractor\Palette;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function store(Request $request)
    {
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'address' => $request->input('address'),
            'phone_nb' => $request->input('phone_nb'),
            'username' => $request->input('username'),
            'birthdate' => $request->input('birthdate'),
            'role' => $request->input('role')
        ]);
        $user->save();

        return response()->json(['message' => 'User created successfully'], 201);
        
    }

    public function showAllUsers()
    {
        Log::info(auth()->user());
        Log::info("bade moot");
        $users = User::with('role')->get();
        return response()->json($users);
    }

    public function showUser($id)
    {
        $user = User::with('role')->where('id', $id)->first();
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
        $roles = Role::all();
        $data = [
            'user' => $user,
            'roles' => $roles,
        ];
        
        return response()->json($data);
    }

    public function updateUser(Request $request, $id)
    {

        $user = User::where('id', $id)->first();
        $data = [];
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
        if ($request->has('name')) {
            $data['name'] = $request->name;
        }
        if ($request->has('email')) {
            $data['email'] = $request->email;
        }
        if ($request->has('address')) {
            $data['address'] = $request->address;
        }
        if ($request->has('phone_nb')) {
            $data['phone_nb'] = $request->phone_nb;
        }
        if ($request->has('password')) {
            $data['password'] = bcrypt($request->password);
        }
        if ($request->filled('birthdate')) {
            $data['birthdate'] = $request->birthdate;
        }
        if ($request->has('role')) {
            $data['role'] = $request->role;
        }
        $user->update($data);
        $user->save();
        return response()->json([
            'user' => $user
        ], 201);
    }

    public function deleteUser($id)
    {
        $user = User::where('id', $id)->first();

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $user->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }

    ///////////////////////////////////////////////////////////////////////////////

    public function storeRole(Request $request)
    {
        $role = Role::create($request->all());
        return response()->json(['message' => 'Role created successfully'], 201);
    }
    public function showAllRoles()
    {
        $roles = Role::all();
        return response()->json($roles);
    }
    public function updateRole(Request $request, $roleID)
    {

        $role = Role::where('id', $roleID)->first();
        $data = [];
        if (!$role) {
            return response()->json(['error' => 'Role not found'], 404);
        }
        if ($request->has('name')) {
            $data['name'] = $request->name;
        }
        if ($request->has('level')) {
            $data['level'] = $request->level;
        }
        $role->update($data);
        $role->save();
        return response()->json([
            'role' => $role
        ], 201);
    }
    public function deleteRole($roleID)
    {
        $role = Role::where('id', $roleID)->first();

        if (!$role) {
            return response()->json(['error' => 'Role not found'], 404);
        }

        $role->delete();
        return response()->json(['message' => 'Role deleted successfully'],201);
    }

////////////////////////////////////////////////////////////////////////////////////////

    public function addTile(Request $request)
    {

        if($request->methodzzz=='PUT')
        {
            $tile = Tile::find($request->id);
        $data = [];
        if (!$tile) {
            return response()->json(['message' => 'Tile not found'], 404);
        }
        if ($request->has('name')) {
            $data['name'] = $request->name;
        }
        if ($request->has('description')) {
            $data['description'] = $request->description;
        }
        if ($request->has('price_retail')) {
            $data['price_retail'] = $request->price_retail;
        }
        if ($request->has('price_wholesale')) {
            $data['price_wholesale'] = $request->price_wholesale;
        }
        if ($request->has('size')) {
            $data['size'] = $request->size;
        }
        if ($request->has('quantity')) {
            $data['quantity'] = $request->quantity;
        }
        if ($request->has('packing')) {
            $data['packing'] = $request->packing;
        }
        if ($request->has('origin')) {
            $data['origin'] = $request->origin;
        }
        if ($request->hasFile('picture') && $request->file('picture')->isValid()) {
            $file = $request->file('picture');
            $filePath = $file->store('tiles', 'public');
            $data['picture'] = $filePath;

            $imagePath = $request->file('picture')->path();
            $palette = Palette::fromFilename($imagePath);
            $extractor = new ColorExtractor($palette);
            $colors = $extractor->extract();
            foreach ($colors as $color) {
            $data['color'] = Color::fromIntToHex($color);
            }
        }
        $tile->update($data);
        $tile->save();
        return response()->json([
            'role' => $tile
        ], 201);
        }else{

        $request->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        $imagePath = $request->file('picture')->path();
        $palette = Palette::fromFilename($imagePath);
        $extractor = new ColorExtractor($palette);
        $colors = $extractor->extract();
        foreach ($colors as $color) {
        $color = Color::fromIntToHex($color);
        }

        $tile = new Tile([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'color' => $color,
            'price_retail' => $request->input('price_retail'),
            'price_wholesale' => $request->input('price_wholesale'),
            'size' => $request->input('size'),
            'quantity' => $request->input('quantity'),
            'packing' => $request->input('packing'),
            'origin' => $request->input('origin'),
        ]);

        if ($request->hasFile('picture') && $request->file('picture')->isValid()) {
            $file = $request->file('picture');
            $filePath = $file->store('tiles', 'public');
            $tile->picture = $filePath;
        }

        $tile->save();

        return response()->json(['message' => 'Tile created successfully'], 201);
    }
    }

    public function showAllTiles()
    {
        $tiles = Tile::all();
        return response()->json(['tiles' => $tiles]);
    }

    public function showTile($id)
    {
        $tile = Tile::find($id);
        return response()->json(['tiles' => $tile]);
    }

    public function deleteTile($id)
    {
        $tile = Tile::find($id);
        if (!$tile) {
            return response()->json(['message' => 'Tile not found'], 404);
        }
        $tile->delete();
        return response()->json(['message' => 'Tile deleted successfully'],201);
    }

    // public function updateTile(Request $request, $id)
    // {
    //     $tile = Tile::find($id);
    //     $data = [];
    //     if (!$tile) {
    //         return response()->json(['message' => 'Tile not found'], 404);
    //     }
    //     if ($request->has('name')) {
    //         $data['name'] = $request->name;
    //     }
    //     if ($request->has('description')) {
    //         $data['description'] = $request->description;
    //     }
    //     if ($request->has('price_retail')) {
    //         $data['price_retail'] = $request->price_retail;
    //     }
    //     if ($request->has('price_wholesale')) {
    //         $data['price_wholesale'] = $request->price_wholesale;
    //     }
    //     if ($request->has('size')) {
    //         $data['size'] = $request->size;
    //     }
    //     if ($request->has('quantity')) {
    //         $data['quantity'] = $request->quantity;
    //     }
    //     if ($request->has('packing')) {
    //         $data['packing'] = $request->packing;
    //     }
    //     if ($request->has('origin')) {
    //         $data['origin'] = $request->origin;
    //     }
    //     if ($request->hasFile('picture') && $request->file('picture')->isValid()) {
    //         $file = $request->file('picture');
    //         $filePath = $file->store('tiles', 'public');
    //         $data['picture'] = $filePath;

    //         $imagePath = $request->file('picture')->path();
    //         $palette = Palette::fromFilename($imagePath);
    //         $extractor = new ColorExtractor($palette);
    //         $colors = $extractor->extract();
    //         foreach ($colors as $color) {
    //         $data['color'] = Color::fromIntToHex($color);
    //         }
    //     }
        
    //     $tile->update($data);
    //     $tile->save();
    //     return response()->json([
    //         'role' => $tile
    //     ], 201);
    // }

    //////////////////////////////////////////////

    public function addSanitary(Request $request)
    {

        if($request->methodzzz=='PUT')
        {
            $sanitaryware = Sanitaryware::find($request->id);
        if (!$sanitaryware) {
            return response()->json(['message' => 'Sanitaryware not found'], 404);
        }
        $data = [];
        if ($request->has('name')) {
            $data['name'] = $request->name;
        }
        if ($request->has('description')) {
            $data['description'] = $request->description;
        }
        if ($request->has('color')) {
            $data['color'] = $request->color;
        }
        if ($request->has('price_retail')) {
            $data['price_retail'] = $request->price_retail;
        }
        if ($request->has('price_wholesale')) {
            $data['price_wholesale'] = $request->price_wholesale;
        }
        if ($request->has('size')) {
            $data['size'] = $request->size;
        }
        if ($request->has('quantity')) {
            $data['quantity'] = $request->quantity;
        }
        if ($request->has('origin')) {
            $data['origin'] = $request->origin;
        }
        if ($request->hasFile('picture') && $request->file('picture')->isValid()) {
            $file = $request->file('picture');
            $filePath = $file->store('sanitaryware', 'public');
            $data['picture'] = $filePath;
        }
        $sanitaryware->update($data);
        return response()->json(['message' => 'Sanitaryware updated successfully'],201);
        }else{


        $sanitaryware = new Sanitaryware();

        $sanitaryware->name = $request->input('name');
        $sanitaryware->description = $request->input('description');
        $sanitaryware->color = $request->input('color');
        $sanitaryware->price_retail = $request->input('price_retail');
        $sanitaryware->price_wholesale = $request->input('price_wholesale');
        $sanitaryware->size = $request->input('size');
        $sanitaryware->quantity = $request->input('quantity');
        $sanitaryware->origin = $request->input('origin');
        $sanitaryware->color = 'white';

        if ($request->hasFile('picture') && $request->file('picture')->isValid()) {
            $file = $request->file('picture');
            $filePath = $file->store('sanitaryware', 'public');
            $sanitaryware->picture = $filePath;
        }

        $sanitaryware->save();

        return response()->json(['message' => 'Sanitaryware created successfully'],201);
    }
    }

    public function updateSanitary(Request $request, $id)
    {
        $sanitaryware = Sanitaryware::find($id);
        if (!$sanitaryware) {
            return response()->json(['message' => 'Sanitaryware not found'], 404);
        }
        $data = [];
        if ($request->has('name')) {
            $data['name'] = $request->name;
        }
        if ($request->has('description')) {
            $data['description'] = $request->description;
        }
        if ($request->has('color')) {
            $data['color'] = $request->color;
        }
        if ($request->has('price_retail')) {
            $data['price_retail'] = $request->price_retail;
        }
        if ($request->has('price_wholesale')) {
            $data['price_wholesale'] = $request->price_wholesale;
        }
        if ($request->has('size')) {
            $data['size'] = $request->size;
        }
        if ($request->has('quantity')) {
            $data['quantity'] = $request->quantity;
        }
        if ($request->has('origin')) {
            $data['origin'] = $request->origin;
        }
        if ($request->hasFile('picture') && $request->file('picture')->isValid()) {
            $file = $request->file('picture');
            $filePath = $file->store('sanitaryware', 'public');
            $data['picture'] = $filePath;
        }
        $sanitaryware->update($data);
        return response()->json(['message' => 'Sanitaryware updated successfully'],201);
    }

    public function deleteSanitary($id)
    {
        $sanitaryware = Sanitaryware::find($id);
        if (!$sanitaryware) {
            return response()->json(['message' => 'Sanitaryware not found'], 404);
        }
        if ($sanitaryware->picture) {
            Storage::disk('public')->delete($sanitaryware->picture);
        }
        $sanitaryware->delete();
        return response()->json(['message' => 'Sanitaryware deleted successfully'],201);
    }
    public function showAllSanitary()
    {
        $sanitarywares = Sanitaryware::all();
        return response()->json(['sanitarywares' => $sanitarywares]);
    }
    public function showSanitary($id)
    {
        $sanitarywares = Sanitaryware::find($id);
        return response()->json(['sanitarywares' => $sanitarywares]);
    }

    /////////////////////////////////////////////////////////////////////////////

    public function showAllServices()
    {
        $services = Service::with('seeker', 'provider')->get();
        return response()->json(['services' => $services]);
    }

    public function deleteService($id)
    {
        $service = Service::find($id);
        if (!$service) {
            return response()->json(['message' => 'Service not found'], 404);
        }

        $bids=Bid::where('service','=',$service->id)->get();

        foreach($bids as $bid){
            $bid->delete();
        }

        $images=service_images::where('service','=',$service->id)->get();

        foreach($images as $image){
            $image->delete();
        }

        $service->delete();
        return response()->json(['message' => 'Service deleted successfully'],201);
    }

    ///////////////////////////////////////////////////////////////////////////////////

    public function showAllProblems()
    {
        $problems = Problem::with('order', 'client')->get();
        return response()->json($problems);
    }

    public function getProblemImages($id){

        $images=ProblemFile::where('problem','=',$id)->get();
        return response()->json($images);



    }
    public function deleteProblem($id)
    {
        $problem = Problem::find($id);
        if (!$problem) {
            return response()->json(['message' => 'Problem not found'], 404);
        }
        $problem->delete();
        return response()->json(['message' => 'Problem deleted successfully'],201);
    }

    public function updateStatus(Request $request, $id)
    {
        $problem = Problem::find($id);
        if (!$problem) {
            return response()->json(['message' => 'Problem not found'], 404);
        }
        $problem->status = $request->input('status');
        $problem->save();
        return response()->json(['message' => 'Problem status updated successfully'],201);
    }


    public function getData()
    {
        $userCount=User::count();
        $serviceCount=Service::count();
        $problemCount=Problem::count();
        $orderCount=Order::count();

        $tileCount=Tile::count();
        $sanitarywareCount=Sanitaryware::count();

        $totalItemsCount=$tileCount+$sanitarywareCount;

        $retailCount=User::where('role','=',1)->count();
        $wholesaleCount=User::where('role','=',4)->count();
        $sangareCount=User::where('role','=',3)->count();
        $ballatCount=User::where('role','=',5)->count();


        
        return response()->json([ 
        'userCount' => $userCount,
        'serviceCount' => $serviceCount,
        'problemCount' => $problemCount,
        'orderCount' => $orderCount,
        'tileCount' => $tileCount,
        'sanitarywareCount' => $sanitarywareCount,
        'totalItemsCount' => $totalItemsCount,
        'retailCount' => $retailCount,
        'wholesaleCount' => $wholesaleCount,
        'sangareCount' => $sangareCount,
        'ballatCount' => $ballatCount,

    
    
    ],201);
    }
    
}

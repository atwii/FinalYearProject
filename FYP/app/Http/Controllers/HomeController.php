<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\service_images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function postService(Request $request){

        // dd($request->all());
        $service= new Service();
        $service->type=$request->type;
        if(empty($request->description2)){
        $service->description=$request->description1;
        }else{

        $service->description=$request->description1.":".$request->description2;
    }
    if($request->hasfile('filenames')){
        $service->picture="available";
    }else{
        $service->picture="not available";
    }
        $service->seeker=1; //auth
        $service->status="new";
        $service->address=$request->address;

        $service->save();

        $files = [];
        if($request->hasfile('filenames'))
         {
            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,50).'.'.$file->extension();
                $file->move(public_path('files'), $name);  
                $files[] = $name;  
                
                $image=new service_images();
                $image->path=$name;
                $image->service=$service->id;
                $image->save();

            }
         }
  
         

         
         return redirect()->route('listServices');
        // return redirect()->back()->with('success', 'Service Created successfully');

    }



    public function listServices(){


       $user= auth()->user()->tokens();
       dd($user);
        //if role

    //     $user=auth('sanctum')->user();

    //    dd($user);
        // if($user->role==retail){

        

            $services=Service::with('images')->get();

        
            return view("services",compact('services'));



        // }
        

        // if client based on the id

        // if provider based on role

    }

    public function updateService(Request $request){

        $service=Service::where('id','=',$request->serviceId)->first();

        
        $service->description=$request->description1.":".$request->description2;
        $service->address=$request->address;
       

        if($request->hasfile('filenames'))
         {

            service_images::where('service','=',$request->serviceId)->delete();

            $service->picture="available";

            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,50).'.'.$file->extension();
                $file->move(public_path('files'), $name);  
                $files[] = $name;  
                
                $image=new service_images();
                $image->path=$name;
                $image->service=$request->serviceId;
                $image->save();

            }
         }

         $service->save();


         return redirect()->back()->with('message','Action completed Successfully');

    }


    public function deleteService(Request $request){
        
        Log::info($request->serviceId);
        
        service_images::where('service','=',$request->serviceId)->delete();

        Service::where('id','=',$request->serviceId)->delete();

        return redirect()->back()->with('message','Action completed Successfully');

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Favorite;
use App\Models\Problem;
use App\Models\ProblemFile;
use App\Models\Sanitaryware;
use App\Models\Service;
use App\Models\service_images;
use App\Models\Tile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\Exists;

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
        $service->seeker=$request->user;; //auth
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


    //    $user= auth()->user();
    //    dd($user);
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
        
        Bid::where('service','=',$request->serviceId)->delete();
        service_images::where('service','=',$request->serviceId)->delete();

        Service::where('id','=',$request->serviceId)->delete();

        return redirect()->back()->with('message','Action completed Successfully');

    }

    public function bidService(Request $request){
        
        Log::info($request->bidder);
        

        $old_bid=Bid::where('service','=',$request->serviceId)->where('provider','=',$request->bidder)->first();
       
        if(empty($old_bid)){
        
        $bid=new Bid();

        $bid->service=$request->serviceId;
        $bid->provider=$request->bidder;
        $bid->bid_price=$request->bidPrice;
        $bid->status='pending';

        $bid->save();}
        else{

            return redirect()->back()->with('bidMessage','Bid already exists');

        }


        return redirect()->back()->with('bidMessage','Action completed Successfully');

    }


    public function displayBids($service)
    {
        $user=auth()->user();

        if($user->role==1 || $user->role==4 || $user->role==2 ){

            $bids = Bid::where('service','=',$service)->get();
        }else{

            $bids = Bid::where('service','=',$service)->where('provider','=',$user->id)->get();
        }
        
        
        // return response()->json($bids);

        return response()->json([
            'bids'=>$bids,
            'userRole'=>$user->role
        ], 200);
    }

    public function deleteBid($id)
    {
        
        $bid=Bid::where('id','=',$id)->first();
        

        if (!$bid) {
            return response()->json(['error' => 'Bid not found'], 404);
        }

        $bid->delete();
        return response()->json(['message' => 'Bid deleted successfully']);

        
    }

    public function calculate(Request $request){

        Log::info("entered");

       
        $width=$request->width;
        $length=$request->length;

        $total=0;

        $floor=0;
        $walls=0;

        if ($request->has('checkboxFloor')) {
            Log::info("entered2");
           
            $floor=$width*$length; 
            $total=$total+$floor;

        } 

        if ($request->has('checkboxWalls')) {
            Log::info("entered3");
            $height=$request->height;
            $walls=(2*($width+$length))*$height;
            $total=$total+$walls;
        } 

       
      
       


        
        if(!empty($request->tileSize)){
            $tileSize=$request->tileSize;
        


        //skirting tiles calculation

        $size=explode("x",$tileSize);
        
        if($size[0]>$size[1]){
        $smaller=$size[1];
        $larger=$size[0];
        }else{
        $smaller=$size[0];
        $larger=$size[1];
        }

        $nb_of_skirting_tiles=ceil(((2*($width+$length))*100)/$larger);
        $howManyInTile=floor($smaller/10);
        $howManyTiles=ceil($nb_of_skirting_tiles/$howManyInTile);
        
        $skirtingTiles=(($smaller/100)*($larger/100))*$howManyTiles;

    }

        $adhesive=ceil($total/4);

        $grout=ceil($total/20);

        $extra=ceil($total* (10 / 100));

        $total=$total+$extra;


        return response()->json([
            'walls'=>$walls,
            'floor'=>$floor,
            'skirtingTiles'=>$skirtingTiles,
            'adhesive'=>$adhesive,
            'grout'=>$grout,
            'extra'=>$extra,
            'total'=>$total
        ], 200);


    }


    public function proReveal($id)
    {
        $user=User::where('id','=',$id)->first();

       if($user->role==3){

        $role="Sanitaryware";
       }else{
        $role="Tiles";
       }
        
        
        // return response()->json($bids);

        return response()->json([
            'email'=>$user->email,
            'phoneNumber'=>$user->phone_nb,
            'username'=>$user->username,
            'role'=>$role
        ], 200);
    }


    public function reportProblem(Request $request){
        
        Log::info("problem reporting logic here");
        
        $problemDescription = $request->input('problemDescription');
        $problemAttachments = $request->file('problemAttachments');

        Log::info($request->serviceProblemId);

        $problem=new Problem();

        if ($request->serviceProblemId) {
        $problem->service=$request->serviceProblemId;
    }else{
        $problem->order=$request->orderProblemId;
    }

        $problem->client=auth()->user()->id;
        $problem->description=$problemDescription;
        $problem->picture="available";
        $problem->status=1;

        $problem->save();
        


        // Validate and process attachments
        if ($problemAttachments) {
            $attachmentsPaths = [];

            foreach ($problemAttachments as $attachment) {
                


                $name = time().rand(1,50).'.'.$attachment->extension();
                $attachment->move(public_path('problem_attachments'), $name);  
                $files[] = $name;  
                
                $image=new ProblemFile();
                $image->path=$name;
                $image->problem=$problem->id;
                $image->save();
 
            }

            
        }

        







        return response()->json(['message' => 'Problem reported successfully']);
    

    }


    public function favorite(Request $request){


        $id=$request->input('id');
        $type=$request->input('type');
        $user=auth()->user()->id;

        $favorited= Favorite::where('item','=',$id)->where('type','=',$type)->where('user','=',$user)->first();
   
if(empty($favorited)){
        $favorite= new Favorite();

        $favorite->item=$id;
        $favorite->type=$type;
        $favorite->user=$user;

        $favorite->save();

        return response()->json(['message' => 'Item favorited successfully']);
}else{

    return response()->json(['message' => 'Item already in favorites']);
}

    }


    public function isFavorite($type){

        $user=auth()->user()->id;

        if($type=="tiles"){
                $items = Tile::all();
        }else{
            $items = Sanitaryware::all();
        }

        $itemsArray = [];

        foreach($items as $item){

            $favorite= Favorite::where('item','=',$item->id)->where('type','=',$type)->where('user','=',$user)->first();
   
            if($favorite){

                array_push($itemsArray, 1);
                
              }else{
        
                array_push($itemsArray, 0);
        
              }

             
}

            return response()->json($itemsArray);

        }

     

       
        public function deleteFavorite(Request $request){


            $id=$request->input('id');
            $type=$request->input('type');
            $user=auth()->user()->id;
    
            $favorited= Favorite::where('item','=',$id)->where('type','=',$type)->where('user','=',$user)->first();
       
    if(empty($favorited)){
    
    
            return response()->json(['message' => 'Item has already been removed']);
            
    }else{

        $favorited->delete();
    
        return response()->json(['message' => 'Item removed successfully']);
    }
    
        }


    

}

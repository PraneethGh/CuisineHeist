<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Recipe;
use App\Favourites;


use DB;

class FavouriteController extends Controller
{
    public function add($did){
        $item=Recipe::find($did);
        $record=new Favourites;
        $last_row=DB::table('favourites')->orderBy('id', 'DESC')->first();
        $record->id=$last_row->id+1;
        $record->user_id=Auth::id(); 
        $record->dish_name=$item->{'Recipe_item'};
        $record->d_id=(int)$did;
        $record->Categories=$item->Categories;
        $lors=Favourites::all();
        $f=0;
        foreach($lors as $lor){
            if($lor->d_id==$did && $lor->user_id==Auth::id()){
                $f=1;
            break;
            }
        }
        if($f==0)
        $record->save();
        return redirect("/");
    }

   
}

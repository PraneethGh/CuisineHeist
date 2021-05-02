<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Recipe;
use DB;
use App\createrecipe;
use App\Favourites;
class RecipeController extends Controller
{
    public function index(){
        $recipes=Recipe::all();
        
        return view('recipes.index',[
            'recipes'=>$recipes
            ]);
    }

    public function create(){

        return view('recipes.create');
    }
    
    public function show($id){

        $recipe = Recipe::find($id);
        return view('recipes.show',['recipe'=>$recipe]);
    }
    

    public function store()
    {
        $recipes=Recipe::all();
        $kings= request('name');
        $search= request('search');
        return view('recipes.store',['recipes'=>$recipes,'kings'=>$kings,'search'=>$search]);
    }

    public function log()
    {
        return view('recipes.newlogin');
    }

    public function reg()
    {
        return view('recipes.newRegister');
    }

    public function help()
    {
        return view('recipes.socialmedia');
    }

    public function prof()
    {   
        $cho=createrecipe::all();
        $fav=Favourites::all();
        $id=Auth::id();
        return view('recipes.profile',['cho'=>$cho,'fav'=>$fav,'id'=>$id]);
    }

    public function uploadrecipe(){
         $newdish=new Recipe();
          $last_row=DB::table('recipes')->orderBy('Rec_Id', 'DESC')->first();
          $newdish->Rec_Id=$last_row->Rec_Id+1;
          $newdish->Categories=request('ct');
          $newdish->{'Recipe_item'}=request('dname');
          $newdish->Ingredients=request('ing');
          $newdish->Instructions=request('proc');
          
          /* Updating the create table */
          $record=new createrecipe();
          $last_created=DB::table('rcreate')->orderBy('s_no','DESC')->first();
          $record->s_no=$last_created->s_no+1;
          $record->user_id=Auth::id();
          $record->d_id=$newdish->Rec_Id;
          $record->d_name=$newdish->{'Recipe_item'};
          $record->Categories=$newdish->Categories;
          $alldishes=Recipe::all();
          $f=0;
          foreach($alldishes as $dish){
              if($dish->Recipe_item==$newdish->{'Recipe_item'}){
                  $f=1;
              }
          }
          if($f==0){
          $newdish->save();
          $record->save();
          } 
          else{
              echo "<script>";
              echo 'alert(Recipe Already Exists)';
              echo "</script>";
          }
     return  redirect('/');
    }

    
    
}

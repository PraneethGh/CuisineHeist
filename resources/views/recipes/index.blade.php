@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div style="color:#7FFF00">
                    Food
                </div>
                @foreach($recipes as $recipe)
                  <div>
                    <a style="text-decoration:none" href="\food\{{$recipe->Rec_Id}}">{{$recipe->Recipe_item}}</a>
                  </div>
                @endforeach
            </div>
        </div>
@endsection
    

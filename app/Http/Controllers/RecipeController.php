<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Type;

class RecipeController extends Controller
{
    public function home(){
        $feed = Recipe::paginate(5);

        return view('home', ['recipe' => $feed]);  //msh gtw bagusan ini ato make fucntion compact()
    }

    public function detail(){
        $tipe = Type::all();
        $recipe = Recipe::all();
        return view('detail', compact('recipe', 'tipe'));
    }

    public function typeFood($id){
        $tipe = Type::find($id);
        $recipe = $tipe->recipes;

        return view('type', compact('recipe', 'tipe'));
    }
}

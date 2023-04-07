<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemList;

class TodoListController extends Controller
{
    public function saveItem(Request $request){
        \Log::info(json_encode($request->all()));
        $newListItem = new ItemList;
        $newListItem->name=$request->myName;
        $newListItem->is_complete = 0;
        $newListItem->save();
        return view('welcome');
    }
}

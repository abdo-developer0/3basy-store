<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        return view('items.index', [
            'items'=> Item::all()
        ]);
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $item = new Item();
        $item->name  = $request->name;
        $item->price = $request->price;
        $item->save();
        return redirect()->route('item.index',$item->id);
    }


    public function edit(Request $request)
    {
        return view('items.edit', [ 'item' => Item::findOrFail($request->id) ]);
    }

    public function update(Request $request)
    {
        $item = Item::findOrFail($request->id);
        $item->name  = $request->name;
        $item->price = $request->price;
        $item->save();
        return redirect()->route('item.index',$request->id);
    }

    public function destroy(Request $request)
    {
        Item::findOrFail($request->id)->delete();
        return redirect()->route('item.index');
    }
}

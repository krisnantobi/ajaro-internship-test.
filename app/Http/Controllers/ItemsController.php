<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;

class ItemsController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = Items::all();
        return view('items.tables', compact('items'));
    }
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $items =  Items::paginate(5);
        return view('items.create');
    }

    /**
     * Store a items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'code_item' => 'required',
        'name'   => 'required',
        'stock'  => 'required',
        'stock'  => 'required|integer',
        'price'  => 'required|integer',
        'weight' => 'required|integer'
      ]);

      $items = new Items();
		$items->code_item =  $request->input('code_item');
		$items->name 	=  $request->input('name');
		$items->descrip =  $request->input('descrip');
		$items->stock 	=  $request->input('stock');
		$items->price 	=  $request->input('price');
		$items->weight 	=  $request->input('weight');
      $items->save();
      return redirect('/items')->with('success', 'Sukses Tambah Barang');
    }


    /**
     * edit data
     * @param  int $id 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Items::find($id);
        return view('items.edit', compact('item'));
    }

    /**
     * update a item.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Request  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
        'code_item' => 'required',
        'name'   => 'required',
        'stock'  => 'required|integer',
        'price'  => 'required|integer',
        'weight' => 'required|integer'
      ]);

      $items = Items::find($id);
		$items->code_item =  $request->input('code_item');
		$items->name    =  $request->input('name');
		$items->descrip =  $request->input('descrip');
		$items->stock 	=  $request->input('stock');
		$items->price 	=  $request->input('price');
		$items->weight 	=  $request->input('weight');
      $items->save();
      return redirect('/items')->with('success', 'Sukses Edit Barang');
    }

    /**
     * destroy data
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Items::find($id);
        $item->delete();
	    return redirect('/items')->with('success', 'Sukses Edit Barang');
    }
}

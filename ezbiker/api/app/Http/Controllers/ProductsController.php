<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Validator;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return response()->json([
            'status'=>'success',
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $reglas = Validator::make($request->all(),[
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'id_category' => 'required',
            'img' => 'required',
            'description' => 'required|min:3',
        ]);
        if( $reglas -> fails()){
            return response()->json([
                'status'=>'failed',
                'message'=> 'Validation Error',
                'error' => $reglas->errors()
            ],201);
        }else{
            $data = new Product();
            $data->name = $request->name;
            $data->price = $request->price;
            $data->img = $request->img;
            $data->id_category= $request->id_category;
            $data->description=$request->description;
            $data->save();

            return response()->json([
                'status'=>'success'
            ]);
        }
    }

    public function sendEmail($token,$name)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function upload(Request $request){
        if ($request->hasFile('file')){
            $file  = $request->file('file');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('products/'),$filename);

            return response()->json(['filename' =>  $filename]);
        }
        return response()->json(['error' => 'No se propocionó ningun archivo'],
        400);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\ProductoPedido;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;




class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

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
        //En caso de que no se haya iniciado sesion
        $usuario = User::where('email',$request->email)->first();

        if($usuario==null){
            $usuario = new User();
            $usuario->name = $request->name.' '.$request->lastname;
            $usuario->email = $request->email;
            $password = explode("@",$request->email)[0];
            $usuario->password = Hash::make($password);
            $usuario->img = 'default.jpg';
            $usuario->save();
        }

        //add pedido
        //Este funciona para poder agregar los productos
        $reglas = Validator::make($request->all(),[
            'address'=>'required|min:3',
            'code'=>'required|min:5',
            'country'=>'required|min:5',
            'state'=>'required|min:3',
            'phone'=>'required|min:10',
            'references'=>'required|min:3',
            'total'=>'required|numeric',
            'name'=>'required|min:3',
            'email'=>'required|email',
            'lastname'=>'required|min:3',
        ]);
        if( $reglas -> fails()){
            return response()->json([
                'status'=>'failed',
                'message'=> 'Validation Error',
                'error' => $reglas->errors()
            ],201);
        }else{
            $pedido = new Pedido();
            $pedido->address = $request->address;
            $pedido->code = $request->code;
            $pedido->country = $request->country;
            $pedido->state = $request->state;
            $pedido->phone = $request->phone;
            $pedido->references = $request->references;
            $pedido->status = 'En preparacion...';
            $pedido->total = $request->total;
            $pedido->id_user = $usuario->id;
            $pedido->save();

            return response()->json([
                'status'=>'success'
            ]);
        }
        /*
        $validacion = $request->validate([
            'address'=>'required|min:3',
            'code'=>'required|min:5',
            'country'=>'required|min:5',
            'state'=>'required|min:3',
            'phone'=>'required|min:10',
            'references'=>'required|min:3',
            'status'=>'required|min:3',
            'total'=>'required|numeric',
            'name'=>'required|min:3',
            'email'=>'required|email',
            'lastname'=>'required|min:3',
        ]);

        //En caso de que no se haya iniciado sesion
        $usuario = User::where('email',$request->email)->first();

        if($usuario==null){
            $usuario = new User();
            $usuario->name = $request->name.' '.$request->lastname;
            $usuario->email = $request->email;
            $usuario->password = explode("@",$request->email)[0];
            $usuario->password = Hash::make($password);
            $usuario->img = 'default.jpg';
            $usuario->save();
        }

        //Agregar un pedido
        $pedido = new Pedido();
        $pedido->address = $request->address;
        $pedido->code = $request->code;
        $pedido->country = $request->country;
        $pedido->state = $request->state;
        $pedido->phone = $request->phone;
        $pedido->references = $request->references;
        $pedido->status = 'En preparacion...';
        $pedido->total = $request->total;
        $pedido->id_user = $usuario->id;
        $pedido->save();

        return response()->json([
            'status'=>'success',
            'pedido'=>$pedido
        ]);
        */

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
}

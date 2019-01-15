<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Proveedor;
use App\Cliente;
use App\Producto;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function ajaxRequestPost(Request $request)

    {
         DB::beginTransaction();
        $nombre = $request->input('nombre');
        $apellidop = $request->input('apellidop');
        $apellidom = $request->input('apellidom');
        $rfc = $request->input('rfc');
        $telefono = $request->input('telefono');
        $cp = $request->input('cp');
        $ciudad = $request->input('ciudad');
        $calle = $request->input('calle');
        $numero = $request->input('numero');
        $web = $request->input('web');


        try {
            $conexion = new Proveedor();
                $conexion->nombre           = $nombre;
                $conexion->apellidop        =$apellidop;
                $conexion->apellidom        =$apellidom;
                $conexion->rfc              =$rfc;  
                $conexion->telefono         =$telefono;
                $conexion->cp               =$cp;      
                $conexion->ciudad           =$ciudad;           
                $conexion->calle            =$calle;          
                $conexion->numero           =$numero;           
                $conexion->web              =$web;       
                $conexion->save();
        DB::commit();

        return response()->json(['success'=>'exito']);

        } catch (Exception $e) {
             DB::rollBack();
        }
       
    }

    public function ajaxRequestPost2(Request $request)

    {
         DB::beginTransaction();
        $nombre2 = $request->input('nombre2');
        $apellidop2 = $request->input('apellidop2');
        $apellidom2 = $request->input('apellidom2');
        $rfc2 = $request->input('rfc2');
        $cp2 = $request->input('cp2');
        $ciudad2 = $request->input('ciudad2');
        $calle2 = $request->input('calle2');
        $numero2 = $request->input('numero2');
        


        try {
            $conexion = new Cliente();
                $conexion->nombre           = $nombre2;
                $conexion->apellidop        =$apellidop2;
                $conexion->apellidom        =$apellidom2;
                $conexion->rfc              =$rfc2;  
                $conexion->cp               =$cp2;      
                $conexion->ciudad           =$ciudad2;           
                $conexion->calle            =$calle2;          
                $conexion->numero           =$numero2;           
                       
                $conexion->save();
        DB::commit();

        return response()->json(['success'=>'exito2']);
        
        } catch (Exception $e) {
             DB::rollBack();
        }
       
    }

public function ajaxRequestPost3(Request $request)

    {
         DB::beginTransaction();
        $codigo3 = $request->input('codigo3');
        $nombrep3 = $request->input('nombrep3');
        $descripcion3 = $request->input('descripcion3');
        $precio3 = $request->input('precio3');
        $stock3 = $request->input('stock3');
       
        


        try {
            $conexion = new Producto();
                $conexion->codigo           = $codigo3;
                $conexion->nombrep        =$nombrep3;
                $conexion->descripcion        =$descripcion3;
                $conexion->precio              =$precio3;  
                $conexion->stock               =$stock3;      
                

                       
                $conexion->save();
        DB::commit();

        return response()->json(['success'=>'exito3']);
        
        } catch (Exception $e) {
             DB::rollBack();
        }
       
    }

    public function consulta1()
    {
      $consulta1 = Proveedor::paginate(10);
      $consulta2 = Cliente::paginate(10);
      $consulta3 = Producto::paginate(10);
      
      return view('welcome')
                        ->with(['consulta1'=>$consulta1])
                        ->with(['consulta2' => $consulta2])
                        ->with(['consulta3'=>$consulta3])
                        ->with(['pageHasChildren' => 'read'])
                        ->with(['pageChilden'     => 'personaindex']);

   
    }
    public function borrar1(Request $request)
    {
        $id=$request->id;
        $tipo=$request->tipo;

       if ($tipo == "proovedor") {
           
           $borrar = Proveedor::find($id);
           $borrar->delete();

       }
       else if ($tipo == "cliente") {
           
           $borrar = Cliente::find($id);
           $borrar->delete();

       }
       else if ($tipo == "producto") {
           
           $borrar = Producto::find($id);
           $borrar->delete();

       }

      return response()->json(['success'=>$request->tipo]);
      
        

   
    }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

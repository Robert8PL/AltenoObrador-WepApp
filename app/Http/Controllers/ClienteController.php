<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data['clientes'] = cliente::paginate(25);  

       return view ('clientes',$data);
      
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){   
       
        $cli = new cliente();
        
        $cli->nombre = $request->nombreAdd;
        $cli->direccion = $request->dirAdd;
        $cli->tel = $request->telefonoAdd;
        $cli->email = $request->correoAdd;
        $cli->deuda = 0.0;
        $cli->estado = (isset($request->activo))? 1 : 0;
        $cli->save();

        return redirect()->action([ClienteController::class,'index']);
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
    public function edit(Request $request)
    {   
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $cli = new cliente();
        $cli->nombre = $request->nombreEdit;
        $cli->direccion = $request->dirEdit;  
        $cli->tel = $request->telefonoEdit;
        $cli->email = $request->correoEdit;
/*         $cli->update()->where('id','=',$request->cli_id);
 */
        return redirect()->action([ClienteController::class,'index']);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

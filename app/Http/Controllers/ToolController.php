<?php

namespace App\Http\Controllers;

use App\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $tools = Tool::all();
            return View('tools.list', ['tools' => $tools]);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
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
        $tool = new Tool;
        $tool->tool = $request->name;
        $tool->quantity = $request->quantity;
        $status = false;
        try {
            $tool->save();
            $status = "Se registró correctamente";
            return redirect("tools")->with("status", $status);
        } catch (Exception $e) {
            return redirect("tools")->with("status", $e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function show(Tool $tool)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function edit(Tool $tool)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tool = Tool::find($id);
        $tool->quantity = $request->quantity;
        if ($tool->save()) {
            return  json_encode('Herramienta actualizada');
        } else {
            return json_encode('Herramienta no actualizada');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tool $tool)
    {
        //
    }
}

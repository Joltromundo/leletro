<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ApplianceRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ApplianceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ApplianceRepositoryInterface $model)
    {
        $appliances = $model->all();
        
        return response()->json($appliances);
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
    public function store(Request $request, ApplianceRepositoryInterface $model)
    {
        $model->create($request->all());

        return response("Appliance has been successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(ApplianceRepositoryInterface $model, string $id)
    {
        $appliance = $model->find($id);

        return response()->json($appliance);
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
    public function update(Request $request, string $id, ApplianceRepositoryInterface $model)
    {
        $model->update($request, $id);

        return response("Appliance has been successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, ApplianceRepositoryInterface $model)
    {
        $model->delete($id);

        return response("Appliance has been successfully deleted");
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplianceRequest;
use App\Services\ApplianceService;

class ApplianceController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(
        protected ApplianceService $service
    ){}

    public function index(ApplianceService $service)
    {
        $appliances = $service->all();
        
        return response()->json($appliances);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApplianceRequest $request, ApplianceService $service)
    {
        $service->create($request->all());

        return response("Appliance has been successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(ApplianceService $service, string $id)
    {
        $appliance = $service->find($id);

        return response()->json($appliance);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreApplianceRequest $request, string $id, ApplianceService $service)
    {
        $service->update($request, $id);

        return response("Appliance has been successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, ApplianceService $service)
    {
        $service->delete($id);

        return response("Appliance has been successfully deleted");
    }
}

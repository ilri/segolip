<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Service;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::paginate(10);

        return view('services.index', compact('services'));
    }

    public function ordering()
    {
        $services = Service::all();

        return view('prices', compact('services'));
    }

    public function servicesCount()
    {
        $services = Service::all();

        return view('layouts.dashboard', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(ServiceRequest $request)
    {
        Service::create($request->validated());
        
        return redirect()->route('services.index')->with('success', 'Service added successfully...');
    }

    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    public function update(ServiceRequest $request, Service $service)
    {
        $service->where('id', $service->id)->update($request->validated());
        
        return redirect()->route('services.index')->with('success', 'Service updated successfully...');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        
        return redirect()->route('services.index')->with('success', 'Service deleted successfully...');
    }
}

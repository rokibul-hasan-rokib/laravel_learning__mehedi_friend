<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Http\Requests\StoreAttributeRequest;
use App\Http\Requests\UpdateAttributeRequest;
use Illuminate\View\View;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $categories = (new Attribute())->getAllAttribute();
        return view('attribute.index', compact('attributs'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attribut.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttributeRequest $request)
    {
        try {
            (new Attribute())->storeAttribut($request);
            return redirect()->route('attribut.index')->with('success', 'Attribut created successfully.');
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to create Attribut: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Attribute $attribute)
    {
         return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attribute $attribute)
    {
        return view('attribut.edit', compact('attribut'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttributeRequest $request, Attribute $attribute)
    {
        try {
            (new Attribute())->updateAttribute($request, $attribute);
            return redirect()->route('attribute.index')->with('success', 'Attribute updated successfully.');
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to update attribute: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attribute $attribute)
    {
        try {
            (new Attribute())->deleteAttribute($attribute);
            return redirect()->route('attribute.index')->with('success', 'Attribute  deleted successfully.');
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to delete attribute: ' . $e->getMessage()]);
        }
    }
}

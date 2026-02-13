<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSlide;

class HeroSlideController extends Controller
{
 public function index()
{
    // Obtienes todos los datos de la base de datos
    $heroSlides = HeroSlide::all();

    // Pasas la variable que contiene los datos, NO una colección vacía
    return view('admin.hero_slides.index', compact('heroSlides'));
}
    public function create()
    {
        return view('admin.hero_slides.form');
    }
    public function store(Request $request){  
    //Validacion
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        // 'image_url' => 'required|url',
        'cta_text' => 'nullable|string|max:100',
        // 'cta_link' => 'nullable|url',
    ]);
    if (!$validated){
        return redirect()->back()->withErrors($validated)->withInput();
    }
    // if ($request->hasfile('image_url')){
    //     $path = $request->file('image_url')->store('hero_slides','public');
    //     $validated['image_url'] = '/storage/' .$path;
    //     }
    HeroSlide::create($validated);
     return redirect()->route('admin.hero_slides.index')->with('success', 'Hero slide created successfully.');
    }
    public function edit(HeroSlide $heroSlide ){
        return view('admin.hero_slides.form',['heroSlide' => $heroSlide]);
    }
 public function update(Request $request, HeroSlide $heroSlide)
{
    // 1. Validar (si falla, Laravel hace el redirect por ti)
    $validated = $request->validate([
        'title'    => 'required|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'cta_text' => 'nullable|string|max:100',
    ]);

    // 2. Actualizar los datos en la base de datos
    $heroSlide->update($validated);

    // 3. Redireccionar al listado con un mensaje de éxito
    return redirect()
        ->route('admin.hero_slides.index')
        ->with('success', 'Slide actualizado correctamente');
}
    public function destroy(HeroSlide $heroSlide){
        $heroSlide->delete();
        return redirect()
        ->route('admin.hero_slides.index')
        ->with('success', 'Slide actualizado correctamente');
    }
}

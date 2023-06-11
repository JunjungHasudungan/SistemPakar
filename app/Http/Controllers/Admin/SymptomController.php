<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Symptom;
use Illuminate\Http\Request;
use Inertia\{Inertia, Response};

class SymptomController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Symptom/Index', [
            'symptoms'      => Symptom::with('problem')->get()
        ]);
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show(Symptom $symptom)
    {
        //
    }

    public function edit(Symptom $symptom)
    {
        //
    }

    public function update(Request $request, Symptom $symptom)
    {
        //
    }

    public function destroy(Symptom $symptom)
    {
        //
    }
}

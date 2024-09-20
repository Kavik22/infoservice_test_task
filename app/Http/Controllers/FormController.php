<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Form\StoreRequest;
use App\Http\Requests\Form\UpdateRequest;
use App\Models\Lead;
use Illuminate\Http\Request;

class FormController extends Controller
{
  public function store(StoreRequest $request)
  {
    $data = $request->validated();
    $lead = Lead::create($data);
    return redirect()->route('form.show', $lead->id);
  }

  public function show(Lead $lead)
  {
    return view('success', compact('lead'));
  }

  public function update(UpdateRequest $request, $id)
  {
    $data = $request->validated();

    $lead = Lead::findOrFail($id);
    $lead->status_id = $data['status_id'];
    $lead->save();

    return response()->json(['success' => true]);
  }
}

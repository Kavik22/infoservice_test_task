<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Info\UpdateRequest;
use App\Models\Lead;
use App\Models\Status;
use Illuminate\Http\Request;

class InfoController extends Controller
{
  public function index(){
    $leads = Lead::all();
    $statuses = Status::all();
    return view('info.index', compact('leads', 'statuses'));
  }
  public function edit(Lead $lead){
    $statuses = Status::all();
    return view('info.edit', compact('lead', 'statuses'));
  }
  public function update(UpdateRequest $request, Lead $lead){
    $data = $request->validated();
    $lead->update($data);
    $statuses = Status::all();
    return view('info.edit', compact('lead', 'statuses'));
  }
  public function delete(Lead $lead){
    $lead->delete();
    return redirect()->route('info.index');
  }
}

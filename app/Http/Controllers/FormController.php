<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //

public function store(Request $request)
{
    $form = new Form();
    $form->form_name = "hell world";
    $form->status = "PENDING";
    $form->form_data = json_encode($request->except('form_name'));
    $form->save();

    return redirect()->back()->with('success', 'Form saved successfully!');
}

public function list(){

    $forms = Form::all();
    return view('forms.index', compact('forms'));


}
public function show($id)
{
    $form = Form::find($id);
    $formData = json_decode($form->form_data, true);

    return view('forms.show', compact('form', 'formData'));
}

public function approve($id)
{
    $form = Form::find($id);
    $form->status = 'approved';
    $form->save();

    return redirect()->back()->with('success', 'Form approved successfully!');
}


public function reject(Request $request, $id)
{
    $form = Form::find($id);
    $form->status = 'rejected';
    $form->comments = $request->input('comments');
    $form->save();

    return redirect()->back()->with('success', 'Form rejected successfully!');
}

}
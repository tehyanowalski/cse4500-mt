<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\CustomerForm;



class CustomerController extends Controller
{
    /**
     * List View
     */
    public function index()
    {
        $customer = Customer::all();
        return view('customer.list', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(CustomerForm::class, [
            'method' => 'POST',
            'url' => route('customer.store')
        ]);
        return view('customer.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(CustomerForm::class);
        $form->redirectIfNotValid();
        Customer::create($form->getFieldValues());
        return $this->index();
    }

    /**
     * Detail View
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customer.details', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //
    }
}

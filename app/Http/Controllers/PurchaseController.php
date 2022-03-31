<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Equipment;

use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\PurchaseForm;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::all();
        return view('purchase.list', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder, Request $request)
    {
        $form = $formBuilder->create(InvoiceForm::class, [
            'method' => 'POST',
            'url' => route('purchase.store'),
        ]);
        $user = $request->get('user', 0);
        $form->modify('customer_id', "number", [
            'default_value' => $user,
        ]);
        
        return view('purchase.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(PurchaseForm::class);
        $form->redirectIfNotValid();
        $purchase = Purchase::create($form->getFieldValues());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $purchase = Purchase::find($id);
        return view('purchase.detail', compact('purchase'));
    }


    public function deleteItem($purchaseID, $itemID) {

        $purchase = Purchase::find($purchaseID);

        $purchase->equipments()->detach($itemID);

        return redirect('/purchase/' . $purchaseID);
    }

    public function addItem($purchaseID, $itemID) {
        $purchase = Purchase::find($purchaseID);

        $purchase->equipments()->attach($itemID);

        return redirect('/purchase/' . $purchaseID);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, FormBuilder $formBuilder)
    {
        $purchase = Purchase::find($id);

        $form = $formBuilder->create(PurchaseForm::class, [
            'method' => 'PUT',
            'url' => route('purchase.update', ['purchase'=>$purchase->id]),
            'model' => $purchase,
        ]);
        return view('purchase.create', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(PurchaseForm::class);
        $form->redirectIfNotValid();

        $purchase = Purchase::find($id);
        $purchase->update($form->getFieldValues());

        return redirect('/purchase/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Purchase::destroy($id);
        return redirect('/purchase');
    }
}

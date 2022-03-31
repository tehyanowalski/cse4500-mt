<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchases;
use App\Models\Equipment;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\PurchasesForm;

class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchases::all();
        return view('purchases.list', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder, Request $request)
    {
        $form = $formBuilder->create(PurchasesForm::class, [
            'method' => 'POST',
            'url' => route('purchases.store'),
        ]);
        $user = $request->get('user', 0);
        $form->modify('customer_id', "number", [
            'default_value' => $user,
        ]);
        
        return view('purchases.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(PurchasesForm::class);
        $form->redirectIfNotValid();
        $purchases = Purchases::create($form->getFieldValues());
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
        $purchases = Purchases::find($id);
        return view('purchases.detail', compact('purchases'));
    }

    public function deleteItem($purchasesID, $itemID)
    {
        $purchases = Purchases::find($purchasesID);
        $purchases->equipment()->detach($itemID);
        return redirect('/purchases/' . $purchasesID);
    }
    
    public function addItem($purchasesID, $itemID) 
    {
        $purchases = Invoice::find($purchasesID);
        $purchases->equipment()->attach($itemID);
        return redirect('/purchases/' . $purchasesID);

    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, FormBuilder $formBuilder)
    {
        $purchases = Purchases::find($id);

        $form = $formBuilder->create(PurchasesForm::class, [
            'method' => 'PUT',
            'url' => route('purchases.update', ['purchases'=>$purchases->id]),
            'model' => $purchases,
        ]);
        return view('purchases.create', compact('form'));
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
        $form = $formBuilder->create(PurchasesForm::class);
        $form->redirectIfNotValid();

        $purchases = Purchases::find($id);
        $purchases->update($form->getFieldValues());

        return redirect('/purchases/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Purchases::destroy($id);
        return redirect('/purchases');
    }
}

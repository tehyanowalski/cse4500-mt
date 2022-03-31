<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;



class PurchaseForm extends Form
{
    public function buildForm()
    {
        $this->
            add('invoice_num', Field::NUMBER, [
                'rules' => 'required',
                'label' => 'Invoice Number'
            ])
            ->add('price', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Price'
            ])
            ->add('purchase_date', Field::DATE, [
                'rules' => 'required',
                'label' => 'Purchase Date'
            ])
            ->add('equipment_id', Field::NUMBER, [
                'rules' => 'required',
                'label' => 'Equipment ID'
            ])
            ->add('customer_id', Field::NUMBER, [
                'rules' => 'required',
                'label' => 'Customer ID'
            ])
            
            ->add('submit', 'submit',[
                'label' => 'Submit'
            ]);
    }
}

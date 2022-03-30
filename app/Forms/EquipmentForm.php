<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

use App\Models\Manufacture;



function getManufacute() {
    $retVal = array();
    $manufacute = Manufacture::where('id' ,'>' ,0)->get();
    foreach($manufacuter as $manufacute) {
        $retVal[strval($manufacute["id"])] = strval($manufacute["name"]);
    }
    return $retVal;
}

class EquipmentForm extends Form
{
    public function buildForm()
    {
        $this->add('name', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Name'
        ])
        ->add('price', Field::NUMBER, [
            'rules' => 'required',
            'label' => 'Price'
        ])
        ->add('version', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Version'
        ])
        ->add('ram', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Ram'
        ])
        ->add('category', Field::SELECT, [
            'rules' => 'required',
            'label' => 'Category',
            'choices' => ['desktop' => "Desktop", 'laptop' => "Laptop", 'tablet' => 'Tablet'],
            'empty_value' => '=== Select Category ==='
        ])
        ->add('manufacturer_id', Field::SELECT, [
            'rules' => 'required',
            'label' => 'Manufacture',
            'choices' => getManufacute(),
            'empty_value' => '=== Select Manufacture ==='
        ])
        ->add('submit', 'submit',[
            'label' => 'Submit'
        ]);
    }
}

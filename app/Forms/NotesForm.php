<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;


class NotesForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('service', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Service'
            ])
            ->add('software', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Software'
            ])
             ->add('equipment_id', Field::NUMBER, [
                'rules' => 'required',
                'label' => 'Equipment ID',
            ])
            
            ->add('submit', 'submit',[
                'label' => 'Submit'
            ]);
    }
}

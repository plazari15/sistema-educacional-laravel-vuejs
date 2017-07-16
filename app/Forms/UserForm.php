<?php

namespace SON\Forms;

use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [
            	'label' => 'Nome',
	            'rules' => 'required|max:255'
            ])
            ->add('email', 'email', [
            	'lable' => 'E-mail',
	            'rules' => 'required|max:255|unique:users'
            ]);
    }
}

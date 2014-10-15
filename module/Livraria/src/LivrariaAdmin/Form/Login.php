<?php

namespace LivrariaAdmin\Form;

use Zend\Form\Form;

class Login extends Form
{
	public function __construct($name = null)
	{
		parent::__construct('login');

		$this->setAttribute('method','post');		

		$this->add(
			array(
				'name' => 'email',
				'options' => array(
					'type' => 'email',
					'label' => 'Email'
				),
				'attributes' => array(
					'id' => 'email',
					'placeholder' => 'Insira o email do usuário',
					'class' => 'form-control input-lg'
				)
			)
		);

		$this->add(
			array(
				'name' => 'password',
				'options' => array(
					'type' => 'password',
					'label' => 'Senha'
				),
				'attributes' => array(
					'placeholder' => 'Insira a senha do usuário',
					'class' => 'form-control input-lg',
					'type' => 'password',
				)
			)
		);

		$this->add(array(
			'name' => 'submit',
			'type' => 'Zend\Form\Element\Submit',
			'attributes' => array(
				'value' => 'Entrar',
				'class' => 'btn btn-primary btn-lg btn-block'
			)
		));
	}
}
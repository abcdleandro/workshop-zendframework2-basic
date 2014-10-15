<?php

namespace LivrariaAdmin\Form;

use Zend\Form\Form;

class Usuario extends Form
{
	public function __construct($name = null)
	{
		parent::__construct('usuario');

		$this->setAttribute('method','post');
		
		$this->add(array(
			'name' => 'id',
			'attributes' => array(
				'type' => 'hidden'
			)
		));

		$this->add(
			array(
				'name' => 'nome',
				'options' => array(
					'type' => 'text',
					'label' => 'Nome'
				),
				'attributes' => array(
					'id' => 'nome',
					'placeholder' => 'Insira o nome do usuário',
					'class' => 'form-control input-lg'
				)
			)
		);

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
				'value' => 'Salvar',
				'class' => 'btn btn-primary btn-lg btn-block'
			)
		));
	}
}
<?php

namespace LivrariaAdmin\Form;

use Zend\Form\Form;
use Zend\Form\Element\Select;

class Livro extends Form
{
	protected $categorias;

	public function __construct( $name = null, array $categorias = null )
	{
		parent::__construct('livro');
		$this->categorias = $categorias;

		$this->setAttribute('method','post');
		//$this->setInputFilter( new CategoriaFilter );
		
		$this->add(array(
			'name' => 'id',
			'attributes' => array(
				'type' => 'hidden'
			)
		));

		$this->add(array(
			'name' => 'nome',
			'options' => array(
				'type' => 'text',
				'label' => 'Nome'
			),
			'attributes' => array(
				'id' => 'nome',
				'placeholder' => 'Insira um nome',
				'class' => 'form-control input-lg'
			)
		));

		$categoria = new Select();
		$categoria->setLabel('Categoria')
				  ->setName('categoria')
				  ->setAttribute('class','form-control')
				  ->setOptions(array('value_options' => $this->categorias));

		$this->add($categoria);

		$this->add(array(
			'name' => 'autor',
			'options' => array(
				'type' => 'text',
				'label' => 'Autor'
			),
			'attributes' => array(
				'id' => 'autor',
				'placeholder' => 'Insira o nome do autor',
				'class' => 'form-control input-lg'
			)
		));

		$this->add(array(
			'name' => 'ibsn',
			'options' => array(
				'type' => 'text',
				'label' => 'Ibsn'
			),
			'attributes' => array(
				'id' => 'ibsn',
				'placeholder' => 'Insira o Ibsn',
				'class' => 'form-control input-lg'
			)
		));

		$this->add(
			array(
				'name' => 'valor',
				'options' => array(
					'type' => 'text',
					'label' => 'Valor'
				),
				'attributes' => array(
					'id' => 'valor',
					'placeholder' => 'Insira o valor do livro',
					'class' => 'form-control input-lg'
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
<?php

namespace Livraria\Model;


class Categoria
{

	public $id;
	public $nome;

	public function exchangeArray( $data )
	{
		$this->id   = ( isset($data['id']) )   ? $data['id']   : NULL;
		$this->nome = ( isset($data['nome']) ) ? $data['nome'] : NULL;
	}
	
}
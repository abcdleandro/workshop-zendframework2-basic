<?php

namespace Livraria\Entity;

use Doctrine\ORM\Mapping as ORM;
use Livraria\Entity\Configurator;

/**
* @ORM\Entity
* @ORM\Table(name="livros")
* @ORM\Entity(repositoryClass="Livraria\Entity\LivroRepository")
*/
class Livro
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue
	* @var int
	*/
	protected $id;

	/**
	* @ORM\Column(type="text")
	* @var string
	*/
	protected $nome;

	/**
	* @ORM\ManyToOne(targetEntity="Livraria\Entity\Categoria", inversedBy="livro")
	* @ORM\JoinColumn(name="id_categoria", referencedColumnName="id")
	*/
	protected $categoria;
	
	/**
	* @ORM\Column(type="text")
	* @var string
	*/
	protected $autor;
	
	/**
	* @ORM\Column(type="text")
	* @var string
	*/
	protected $ibsn;
	
	/**
	* @ORM\Column(type="float")
	* @var float
	*/
	protected $valor;

	public function __construct( $options=null ) 
	{
		Configurator::configure( $this, $options );
	}

	public function setId( $id )
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setNome( $nome )
	{
		$this->nome = $nome;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setCategoria( $categoria )
	{
		$this->categoria = $categoria;
	}

	public function getCategoria()
	{
		return $this->categoria;
	}

	public function setAutor( $autor )
	{
		$this->autor = $autor;
	}

	public function getAutor()
	{
		return $this->autor;
	}

	public function setIbsn( $ibsn )
	{
		$this->ibsn = $ibsn;
	}

	public function getIbsn()
	{
		return $this->ibsn;
	}

	public function setValor( $valor )
	{
		$this->valor = $valor;
	}

	public function getValor()
	{
		return $this->valor;
	}

	public function toArray()
	{
		return array(
			'id'   		=> $this->getId(),
			'categoria' => $this->getCategoria()->getId(),
			'nome' 		=> $this->getNome(),
			'autor' 	=> $this->getAutor(),
			'ibsn' 		=> $this->getIbsn(),
			'valor' 	=> $this->getValor()
		);
	}
}
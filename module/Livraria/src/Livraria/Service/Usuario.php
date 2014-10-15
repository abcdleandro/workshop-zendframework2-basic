<?php

namespace Livraria\Service;

use Doctrine\ORM\EntityManager;
use Livraria\Entity\Configurator;

class Usuario extends AbstractService
{
	
	public function __construct( EntityManager $em )
	{
		parent::__construct( $em );
		$this->entity = 'Livraria\Entity\Usuario';
	}

	public function update( array $data )
	{
		$entity = $this->em->getReference($this->entity, $data['id']);

		if( empty($data['password']) )
			unset($data['password']);

		$entity = Configurator::configure( $entity, $data );		

		$this->em->persist($entity);
		$this->em->flush();	

		return $entity;
	}
	
}
<?php

namespace LivrariaAdmin\Controller;

use Zend\View\Model\ViewModel;

class UsuariosController extends CrudController
{
	public function __construct()
	{
		$this->service    = 'Livraria\Service\Usuario';
		$this->entity     = 'Livraria\Entity\Usuario';
		$this->form       = 'LivrariaAdmin\Form\Usuario';
		$this->route   	  = 'livraria-admin';
		$this->controller = 'Usuarios';
	}

	public function editAction()
	{
		$form = new $this->form();
		$request = $this->getRequest();

		$repository = $this->getEm()->getRepository($this->entity);
		$entity = $repository->find($this->params()->fromRoute('id',0));

		if( $this->params()->fromRoute('id',0) ){
			$array = $entity->toArray();
			unset($array['password']);
			$form->setData($array);
		}

		if( $request->isPost() ){
			$form->setData($request->getPost());
			if( $form->isValid() ){
				$service = $this->getServiceLocator()->get($this->service);
				$service->update($request->getPost()->toArray());
				return $this->redirect()->toRoute($this->route,array('controller'=>$this->controller));
			}
		}

		return new ViewModel(array('form'=>$form));
	}
}
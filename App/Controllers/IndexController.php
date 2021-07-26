<?php

namespace App\Controllers;

//recursos do mini framework
use MF\Controller\Action;
use MF\Model\Container;

//models
use App\Models\Produto;
use App\Models\Info;


class IndexController extends Action{

	public function index() {

		//instância modelo e conexão
		$produto = Container::getModel('Produto');

		$produtos = $produto->getProdutos();

		$this->view->dados = $produtos;

		$this->render('index', 'layout1');
	}

	public function sobreNos() {

		//instância modelo e conexão
		$info = Container::getModel('Info');

		$informacoes = $info->getInfo();

		$this->view->dados = $informacoes;

		$this->render('sobreNos', 'layout2');
	}

}


?>
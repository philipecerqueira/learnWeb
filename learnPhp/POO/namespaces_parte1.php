<?php

	namespace A;

	class Cliente implements \B\CadastroInterface {
		public $nome = 'Ismael';

		public function __construct() {
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}

		public function __get($attr) {
			return $this->$attr;
		}

		public function salvar() {
			echo 'Salvar';
		}

		public function remover() {
			echo 'Remover';
		}
	}

	interface CadastroInterface {
		public function salvar();
	}



	namespace B;

	class Cliente implements \A\CadastroInterface {
		public $nome = 'Philipe';

		public function __construct() {
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}

		public function __get($attr) {
			return $this->$attr;
		}

		public function remover() {
			echo 'Remover';
		}

		public function salvar() {
			echo 'Salvar';
		}
	}

	interface CadastroInterface {
		public function remover();
	}


	//---------------

	$c = new \B\Cliente();
	print_r($c);
	echo $c->__get('nome');
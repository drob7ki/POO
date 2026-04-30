<?php

class Pessoa {
    protected $nome;
    protected $cargo;
    protected $idade;

    public function __construct($nome, $cargo, $idade) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->idade = $idade;
    }

    public function falar() {
        echo "Olá, meu nome é {$this->nome} e sou {$this->cargo}." . PHP_EOL;
    }
}

class Aluno extends Pessoa {
    public function __construct($nome, $idade) {
        parent::__construct($nome, 'Aluno', $idade);
    }

    public function falar() {
        echo "Olá, meu nome é {$this->nome}, tenho {$this->idade} anos e sou um aluno estudioso." . PHP_EOL;
    }
}

class Professor extends Pessoa {
    public function __construct($nome, $idade) {
        parent::__construct($nome, 'Professor', $idade);
    }

    public function falar() {
        echo "Olá, meu nome é {$this->nome}, tenho {$this->idade} anos e sou um professor dedicado." . PHP_EOL;
    }
}

class Diretor extends Pessoa {
    public function __construct($nome, $idade) {
        parent::__construct($nome, 'Diretor', $idade);
    }

    public function falar() {
        echo "Olá, meu nome é {$this->nome}, tenho {$this->idade} anos e sou o diretor da escola." . PHP_EOL;
    }
}

class Funcionario extends Pessoa {
    public function __construct($nome, $idade) {
        parent::__construct($nome, 'Funcionário', $idade);
    }

    public function falar() {
        echo "Olá, meu nome é {$this->nome}, tenho {$this->idade} anos e sou um funcionário da escola." . PHP_EOL;
    }
}

// Testando a herança
$aluno1 = new Aluno('Maria', 16);
$professor1 = new Professor('João', 40);
$diretor1 = new Diretor('Joacir', 50);
$funcionario1 = new Funcionario('Giovana', 30);

$aluno1->falar();
$professor1->falar();
$diretor1->falar();
$funcionario1->falar();


// Encapsulamento (atributo privado)
class Idade {
    private $idade;

    public function __construct($idade) {
        $this->idade = $idade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($novaIdade) {
        if ($novaIdade > 0) {
            $this->idade = $novaIdade;
        } else {
            echo "Idade deve ser um número positivo." . PHP_EOL;
        }
    }
}

$idadeAluno = new Idade(16);
echo "A idade do aluno é: " . $idadeAluno->getIdade() . PHP_EOL;

?>
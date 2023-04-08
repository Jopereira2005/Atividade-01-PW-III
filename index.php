<?php

include './models/pessoa/aluno.php';
include './models/pessoa/professor.php';
include './models/pessoa/endereco.php';
include './models/contato/email.php';
include './models/contato/telefone.php';

$aluno = new Pessoa\Aluno();
$professor = new Pessoa\Professor();

// Email
$email[0] = new Contato\Email();
$email[1] = new Contato\Email();

// Telefone
$telefone[0] = new Contato\Telefone();
$telefone[1] = new Contato\Telefone();


// Endereço
$endereco[0] = new Pessoa\Endereco();
$endereco[1] = new Pessoa\Endereco();
$endereco[2] = new Pessoa\Endereco();


$email[0]->setEmail("carlos@hotmail.com");
$email[1]->setEmail("carlos@gmail.com");


$telefone[0]->setNumero("15 999999999");
$telefone[1]->setNumero("15 958585858");


$endereco[0]->setLogradouro("Rua 11 de Agosto");
$endereco[0]->setCidade("Tatuí");
$endereco[0]->setUF("SP");
$endereco[0]->setCodigoPostal("18276010");

$endereco[1]->setLogradouro("Rua Feliz");
$endereco[1]->setCidade("Tatuí");
$endereco[1]->setUF("SP");
$endereco[1]->setCodigoPostal('18276020');

$endereco[2]->setLogradouro("Rua Quadra");
$endereco[2]->setCidade("Tatuí");
$endereco[2]->setUF("SP");
$endereco[2]->setCodigoPostal('18276030');


$professor->setCodigo("1");
$professor->setNome("Carlos");
$professor->setEmail($email[0]);
$professor->setEmail($email[1]);
$professor->setTelefone($telefone[1]);
$professor->setEndereco($endereco[0]);

$aluno->setCodigo("1");
$aluno->setNome("Pombinha da Paz Silva");
$aluno->setEmail($email[0]);
$aluno->setTelefone($telefone[0]);
$aluno->setTelefone($telefone[1]);
$aluno->setEndereco($endereco[1]);
$aluno->setEndereco($endereco[2]);



// Professor

echo "<h1>Nome: ".$professor->getNome()."</h1>";
echo "<h3>Codigo: ".$professor->getCodigo()."</h3>";
echo "<h3>Email 1: ".$professor->getEmail()[0]->getEmail()."</h3>";
echo "<h3>Email 2: ".$professor->getEmail()[1]->getEmail()."</h3>";
echo "<h3>Telefone: ".$professor->getTelefone()[0]->getNumero()."</h3>";

echo "<h3>Endereço:</h3>".
"<p>Logradouro: ".$professor->getEndereco()[0]->getLogradouro()."</p>".
"<p>Cidade: ".$professor->getEndereco()[0]->getCidade()."</p>".
"<p>UF: ".$professor->getEndereco()[0]->getUF()."</p>".
"<p>Código Postal: ".$professor->getEndereco()[0]->getCodigoPostal()."</p>";

echo "<hr>";

// Aluno
echo "<h1>Nome: ".$aluno->getNome()."</h1>";
echo "<h3>Codigo: ".$aluno->getCodigo()."</h3>";
echo "<h3>Email: ".$aluno->getEmail()[0]->getEmail()."</h3>";
echo "<h3>Telefone 1: ".$aluno->getTelefone()[0]->getNumero()."</h3>";
echo "<h3>Telefone 2: ".$aluno->getTelefone()[1]->getNumero()."</h3>";

echo "<h3>Endereço 1:</h3>".
"<p>Logradouro: ".$aluno->getEndereco()[0]->getLogradouro()."</p>".
"<p>Cidade: ".$aluno->getEndereco()[0]->getCidade()."</p>".
"<p>UF: ".$aluno->getEndereco()[0]->getUF()."</p>".
"<p>Código Postal: ".$aluno->getEndereco()[0]->getCodigoPostal()."</p>";

echo "<h3>Endereço 2:</h3>".
"<p>Logradouro: ".$aluno->getEndereco()[1]->getLogradouro()."</p>".
"<p>Cidade: ".$aluno->getEndereco()[1]->getCidade()."</p>".
"<p>UF: ".$aluno->getEndereco()[1]->getUF()."</p>".
"<p>Código Postal: ".$aluno->getEndereco()[1]->getCodigoPostal()."</p>";
?>
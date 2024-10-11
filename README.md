# PHP Iniciante

https://codeexperts.com.br/



## <a name="indice">Índice</a>

1. [Introdução](#parte1)     
2. [Instalação](#parte2)     
3. [Conceitos da Linguagem](#parte3)     
4. [Nosso Projeto - Primeiros Passos](#parte4)     
5. [Nosso Projeto - Usuários](#parte5)     
6. [Nosso Projeto - Produtos](#parte6)     
7. [Nosso Projeto - Categorias](#parte7)     
8. [Nosso Projeto - Melhorando e Organizando](#parte8)     
9. [Nosso Projeto - Autenticação](#parte9)     
10. [Pausa Pro PHP 7](#parte10)     
11. [Nosso Projeto - Nossa Vitrinne](#parte11)     
12. [Nosso Projeto - Servidores Web](#parte12)     
13. [Nosso Projeto - Deploy de Nossa Aplicação](#parte13)     
14. [Módulo Bônus](#parte14)     
---


## <a name="parte1">1. Introdução</a>

- 01 - Introdução

- 02 - História


[Voltar ao Índice](#indice)

---


## <a name="parte2">2. Instalação</a>

- 03 - Instalando o PHP - Linux & OSX

- 03.1 - Instalando o PHP - Windows


[Voltar ao Índice](#indice)

---


## <a name="parte3">3. Conceitos da Linguagem</a>

- 04 - Hello World

- 05 - Variáveis

```php
<?php 
$name = "José Malcher";
$_name = "Teste";

/*
Concatenação
 */
#print $name . ' ' . $_name;

/**
 * Atribuir valores
 * inteiros
 */
$qtd = 10;
print gettype($qtd);
$qtd = "José Malcher";
print gettype($qtd);

/**
 * String | Inteiro | Booleano | Float
 * Objeto | Array
 */

#print $qtd;
```

- 06 - Manipulando Strings

```php
<?php 
$name = "José Malcher";

/**
 * Contando caracteres
 */
// print strlen($name);

/*
Pegando pedaços especificos 
de uma string
 */
// $name = substr($name, 0, 5);

/**
 * Fazendo replace 
 * em strings
 */
$name = str_replace("N", "T", $name);

/**
 * Colocando String 
 * em Maiusculo
 */
$name = strtoupper($name);

/**
 * Colocando String 
 * em Minusculo
 */
$name = strtolower($name);

print $name;

```

- 07 - Operadores

```php
<?php

/**
 * Aritméticos
 */
$a = 5 + 2;
print $a . PHP_EOL;
$a = 5 - 3;
print $a . PHP_EOL;
$a = 5 * 3;
print $a . PHP_EOL;
$a = 5 / 3;
print $a . PHP_EOL;
$a = 5 % 3;
print $a . PHP_EOL;

/**
 * Comparação
 */
print 1 == 2;
print 1 === 2;
print 1 != 2;
print 1 <= 2;
print 1 >= 2;

/**
 * Lógicos
 */
/*
&& AND
OR ||
!
XOR
*/
```

- 08 - Arrays

```php
<?php

/**
 * Array com chaves númericas
 */
$array = array(12, 10, "Jose Malcher Jr", 10.0);
#print $array[3];

/* Associativos
Pode-se nomear as chaves dos arrays, associando
os elementos do mesmo aos nomes criados
*/
$associativo = array('name' => "Jose Malcher Jr", 'price' => 12);
#print $associativo['name'];

// $keys = array_keys($associativo);
// print_r($keys);
// //
// $values = array_values($associativo);
// print_r($values);
//
// print array_key_exists("name", $associativo);
//
//print in_array(122, $array);
//
/**
 * Short syntax
 * PHP 5.4 +
 */
$array = [12, 10, "Jose Malcher Jr", 10.0];

print_r($array);
```

- 09 - Condicionais

```php
<?php

// if(false) {
//     print 'Executou o IF';
// } else {
// 	print 'Executou ELSE';
// }
//

$a = 11;

// if($a <= 10) {
//   print 'Menor que 10';
// } else if($a >= 11) {
//   print 'Maior ou igual a 11';
// } else {
//   print 'Qualquer coisa';
// }


// if($a <= 10):
//   print 'Menor que 10';
// elseif($a >= 11):
//   print 'Maior ou igual a 11';
// else:
//   print 'Qualquer coisa';
// endif;
//
$result = $a == 11 ? "Igual a 11" : "Não é igual a 11";

print $result;



```

- 10 - Laços de Repeticão

```php
<?php

$fruits = ['laranja', 'maçã', 'banana', 'pera'];

#While
$num = 1;
$i = 0;

// while($i < $num) {
// 	print $fruits[$i] . PHP_EOL;
// 	$i++;
// }
//
#Do While

// do {
//   print $fruits[$i] . PHP_EOL;
//   $i++;
// }while ($i < $num);

#For

// for($i = 0; $i < count($fruits); $i++) {
// 	print $fruits[$i] . PHP_EOL;
// }

#Foreach

foreach($fruits as $key => $fruit) {
    print $key . ' - ' . $fruit . PHP_EOL;
}



```

- 11 - Switch

```php
<?php

$num = 9;

switch ($num) {
    case 10:
        print "Valor Igual a 10";
        break;
    case 12:
        print "Valor Igual a 12";
        break;

    default:
        print "Não é igual a 12 nem igual a 10";
        break;
}
```

- 12 - Funções

```php
<?php

// function hello()
// {
//    return 'Hello World';
// }

function soma($a, $b)
{
    $result = $a + $b;

    if($result == 40) {
        return "Você foi sorteado!";
    }

    return $result;
}

print soma(10, 10);
```

- 13 - WebServers

- https://www.php.net/manual/pt_BR/features.commandline.webserver.php#:~:text=Esse%20servidor%20web%20foi%20desenvolvido%20para

```
$ php -S localhost:8000

$ php -S localhost:8000 router.php
```

- 14 - Manipulando Formulários

```php
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'
    && isset($_POST['send'])) {
    print_r($_POST);
}
?>
<html>
<head>
    <title>Manipulando formulário</title>
</head>
<body>
<h1>Formulário</h1>
<hr>
<form action="" method="post">
    <p>
        <strong>Nome</strong> <br>
        <input type="text" name="name">
    </p>

    <p>
        <strong>Email</strong> <br>
        <input type="text" name="email">
    </p>
    <input type="submit" name="send" value="Enviar">
</form>
</body>
</html>
```

- 15 - Sessions & cookies

```php
<?php
// session_start();

// // $_SESSION['name'] = "Usando Sessions";

// // print_r($_SESSION);
// 
setcookie("firstCookie", "JOSE", (time() -1));
```

- 16 - Manipulando Arquivos

```php
<?php

// fopen  -> Ele abre o arquivo que queremos manipular
// fwrite -> Ele escreve um conteudo passado para o arquivo.
// fread  -> Ele lê o conteudo do arquivo
// fclose -> Ele fecha a leitura/manipulacao daquele arquivo aberto pelo fopen

$f = __DIR__ . '/exemplo2.txt';

$file = fopen($f, 'a+');

// fwrite($file, "Conteúdo escrito via PHP" . PHP_EOL);

$content = fread($file, filesize($f));

fclose($file);

print $content;


```

- 17 - Trabalhando com PDO

```php
<?php
/*$dsn      = 'mysql:host=127.0.0.1;dbname=meu_banco';
$user     = 'usuario';
$password = '123';

$pdo = new PDO($dsn, $user, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
$dsn = 'mysql:host=mysql;dbname=meu_banco';
$user = 'usuario';
$password = '123';

try {
    $pdo = new PDO($dsn, $user, $password);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

```

```php
<?php
require __DIR__ . '/connection.php';

#products
#Busco, de forma simples e direta
#todos os produtos.
#

$name = "Novo Produto CEL 1";
$price = 19.96;

$sql = "INSERT INTO 
			products(name, price) 
		VALUES(
			:name,
			:price
		)
	";

$insert = $pdo->prepare($sql);

$insert->bindValue(":name", $name, PDO::PARAM_STR);
$insert->bindValue(":price", $price, PDO::PARAM_STR);

if($insert->execute()) {
    print 'Dado inserido';
} else {
    print 'Erro ao inserir dados!';
}

```

```php
<?php
require __DIR__ . '/connection.php';

#products
#Busco, de forma simples e direta
#todos os produtos.
#
$result = $pdo->query("SELECT * FROM products");

#Array Associativo
$result = $result->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $r)
{
    print $r['id'] . '<br>';

    print $r['name'] . '<br>';
    print $r['price'] . '<br>';
    print '<hr>';
}
```

[Voltar ao Índice](#indice)

---


## <a name="parte4">4. Nosso Projeto - Primeiros Passos</a>

- 18 - [Projeto] Iniciando

[04_NossoProjeto_PrimeirosPassos/projeto01](04_NossoProjeto_PrimeirosPassos/projeto01)

- 19 - [Projeto] Carregamento de páginas



- 20 - [Projeto] Integrando Bootstrap

- 21 - [Projeto] Organizando Template de Usuários

- 22 - [Projeto] Organizando Template de Produtos


[Voltar ao Índice](#indice)

---


## <a name="parte5">5. Nosso Projeto - Usuários</a>



[Voltar ao Índice](#indice)

---


## <a name="parte6">6. Nosso Projeto - Produtos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte7">7. Nosso Projeto - Categorias</a>



[Voltar ao Índice](#indice)

---


## <a name="parte8">8. Nosso Projeto - Melhorando e Organizando</a>



[Voltar ao Índice](#indice)

---


## <a name="parte9">9. Nosso Projeto - Autenticação</a>



[Voltar ao Índice](#indice)

---


## <a name="parte10">10. Pausa Pro PHP 7</a>



[Voltar ao Índice](#indice)

---


## <a name="parte11">11. Nosso Projeto - Nossa Vitrinne</a>



[Voltar ao Índice](#indice)

---


## <a name="parte12">12. Nosso Projeto - Servidores Web</a>



[Voltar ao Índice](#indice)

---


## <a name="parte13">13. Nosso Projeto - Deploy de Nossa Aplicação</a>



[Voltar ao Índice](#indice)

---


## <a name="parte14">14. Módulo Bônus</a>



[Voltar ao Índice](#indice)

---
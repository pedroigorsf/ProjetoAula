<html>

<head>
    <title>Projeto #01</title>

    <head>

    <body>

        Tipos de Dados<br>

        <?php
        $nome = "Olá mundo";
        var_dump($nome);

        if (is_string($nome)) :
            echo "É uma string";
        else :
            echo "Não é uma string";
        endif;

        echo "<hr>";

        $idade = 27;

        var_dump($idade);

        if (is_int($idade)) :
            echo "É um inteiro";
        else :
            echo "Não é um inteiro";
        endif;

        echo "<hr>";

        $altura = 1.83;

        var_dump($altura);

        if (is_float($altura)) :
            echo "É um float";
        else :
            echo "Não é um float";
        endif;

        $admin = true;

        var_dump($admin);

        if ($admin == true) :
            echo "É um boleano";
        else :
            echo "Não é boleano";
        endif;

        echo "<hr>";

        $carros = array("Gol", "Uno", "Camaro", 13, 1.5, false);

        var_dump($carros);


        echo "<hr>";

        // object
        class Cliente {
            public $nome;
            public function atribuirNome($nome){
                $this->$nome = $nome;
            }
        }

        $cliente = new Cliente();
        $cliente->atribuirNome("Pedro Igor");
        var_dump($cliente);


        ?>




    </body>

</html>
<?php // Página que adiciona os produtos no carrinho    
    $id = $_GET['id'];  // ID do produto selecionado

    if (!isset($_COOKIE['carrinho'])) { // Verifica se o carrinho está vazio
        $carrinho = [0 => $id]; // A 1ª posição do array $carrinho (criado aqui) recebe o id do produto
        setcookie('carrinho', serialize($carrinho), time()+60*60*24*14, '/'); // Serializa o array no COOKIE carrinho
    } else {
        $carrinho = unserialize($_COOKIE['carrinho']); // Se não estiver vazio, cria um array com todos os produtos do carrinho
        $colocar = false; // Booleano que uso pra não repitir o mesmo produto

        // Checo se o produto selecionado já está no carrinho
        for ($i=0; $i < count($carrinho); $i++) { 
            if (!(in_array($id, $carrinho))) {
                $colocar = true;
            }
        }

        // Só adiciono ao carrinho se não tiver o produto nele ainda
        if ($colocar == true) {
            $carrinho[] = $id;
        }

        // Serializo o array dentro do COOKIE carrinho
        setcookie('carrinho', serialize($carrinho), time()+60*60*24*14, '/');
    }

    // Mando o número de produtos no carrinho como resposta, apenas para atualizar a tela do usuário
    echo count($carrinho);
?>
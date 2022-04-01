<?php

namespace App;

use App\Item;

class CarrinhoCompra
{
    // atributos
    private $itens;

    // metodos
    public function __construct()
    {
        $this->itens = [];
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function adicionarItem(Item $item)
    {
        array_push($this->itens, $item);
        return true;
    }

    public function validarCarrinho()
    {
        return count($this->itens) > 0;
    }
}

//   // Forma estrutural
//  // Atributos
//     private $itens;
//     private $status;
//     private $valorTotal;

//     // metodos
//     public function __construct()
//     {
//         $this->itens = [];
//         $this->status = 'aberto';
//         $this->valorTotal = 0;
//     }

//     public function exibirItens()
//     {
//         return $this->itens;
//     }

//     public function adicionarItem(string $item, float $valor)
//     {
//         array_push($this->itens, ["item" => $item, "valor" => $valor]);
//         $this->valorTotal += $valor;
//         return true;
//     }

//     public function exibirValorTotal()
//     {
//         return $this->valorTotal;
//     }

//     public function exibirStatus()
//     {
//         return $this->status;
//     }

//     public function confirmarPedido()
//     {
//         if ($this->validarCarrinho()) {
//             $this->status = 'confirmado';
//             $this->enviarEmailConfirmacao();

//             return true;
//         }

//         return false;
//     }

//     public function enviarEmailConfirmacao()
//     {
//         echo '<br>.. envia email de confirmação..<br>';
//     }

//     public function validarCarrinho()
//     {
//         return count($this->itens) > 0;
//     }

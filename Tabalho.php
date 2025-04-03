<?php

class Req {
    private int $ID;
    private string $Nome;
    private string $Endereco;
    private string $Cidade;
    private string $Mail;
    private string $Senha;

    public function realizaLogin(): bool {
        return true; // Adicionado retorno para evitar erro
    }
    public function realizarRequisicao(): void {}
    public function acompanharRequisicoes(): void {}
    public function alterarSenha(): void {}
    public function realizarAutoCadastro(): void {}
    public function alterarPerfil(): void {}
    public function excluirPerfil(): void {}
}

class Estoque_Cestas {
    private int $Tipo;
    private int $QuantidadeDisponivel;

    public function incluirCestas(): void {}
    public function realizarSaida(): void {}
}

class Tipos_Cestas {
    private int $ID;
    private int $Tipo;
    private string $Descricao;

    public function incluirNovoTipo(): void {}
    public function excluirTipo(): void {}
    public function alterarTipo(): void {}
    public function listarTipos(): void {}
}

class ONG {
    private int $IDONG;
    private string $NomeONG;
    private string $Senha;

    public function visualizarEstoqueCestas(): void {}
    public function aprovarRequisicao(): void {}
    public function pesquisarRequisicoes(): void {}
    public function realizarEntrega(): void {}
    public function cadastrarRequerente(): void {}
}

class Requisicao {
    private int $IDRequisicao;
    private int $IDReq;
    private int $QuantidadeCestaRequisitada;
    private int $Status;
    private int $ONG;
    private string $DataRequisicao;
    private string $DataAprovacao;
    private string $DataEntrega;
    private int $StatusEntrega;

    public function gravaRequisicao(): void {}
    public function buscaRequisicao(): void {}
    public function leRequisicao(): void {}
}

class Administrador {
    private int $IDADMIN;
    private string $NomeADM;
    private string $Senha;

    public function cadastrarONG(): void {}
    public function alterarDadosONG(): void {}
    public function excluirONG(): void {}
    public function validarONG(): bool {
        return true; // Adicionado retorno para evitar erro
    }
    public function cadastrarRequisicoes(): void {}
    public function visualizarRequisicoes(): void {}
    public function acompanharHistoricoRequisitante(): void {}
}

?>

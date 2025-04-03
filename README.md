# Trabalho.php - Sistema de Gerenciamento de Requisições

## Descrição
O `Trabalho.php` é um arquivo central para a gestão de usuários e requisições em um sistema de doações. Ele implementa classes responsáveis por diferentes tipos de usuários, incluindo requerentes, ONGs e administradores, permitindo a interação entre eles para o gerenciamento de cestas básicas.

## Funcionalidades
- Cadastro e autenticação de usuários (Requerentes, ONGs e Administradores)
- Requisição e validação de pedidos de cestas básicas
- Gerenciamento de doações e aprovação por parte dos administradores

## Estrutura do Código
### Classes Principais:
1. **Requerente (`Req`)**
   - Métodos para realizar login e solicitar cestas básicas.
2. **Organização Não Governamental (`ONG`)**
   - Métodos para validar requisições e intermediar doações.
3. **Administrador (`Admin`)**
   - Métodos para gerenciar usuários e aprovar cestas.

## Tecnologias Utilizadas
- **PHP**: Linguagem principal para implementação das regras de negócio.

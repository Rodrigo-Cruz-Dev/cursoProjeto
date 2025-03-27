 Projeto do Curso de PHP SENAC

 # Projeto de Gerenciamento de Clientes Laravel

Este projeto é uma aplicação Laravel simples para gerenciar clientes. Ele permite criar, ler, atualizar e excluir clientes, além de fornecer funcionalidades de pesquisa e paginação.

## Funcionalidades

-   **CRUD de Clientes:**
    -   Criar novos clientes com informações como nome, CPF, data de nascimento, protocolo, telefones, e-mail, status (concluído) e observações.
    -   Visualizar detalhes de um cliente específico.
    -   Editar informações de um cliente existente.
    -   Excluir clientes.
-   **Pesquisa:**
    -   Pesquisar clientes por nome ou CPF.
    -   Filtrar clientes por status (concluído ou não concluído).
-   **Paginação:**
    -   Listar clientes com paginação para melhor organização.
-   **Confirmação de Exclusão:**
    -   Exibir um diálogo de confirmação antes de excluir um cliente.



## Estrutura do Projeto

-   `app/Http/Controllers/ClienteController.php`: Controla as operações CRUD dos clientes.
-   `resources/views/clientes`: Contém as views para listar, criar, editar e visualizar clientes.
-   `routes/web.php`: Define as rotas da aplicação.
-   `database/migrations`: Contém as migrations para criar as tabelas do banco de dados.
-   `database/seeders/ClientesTableSeeder.php`: Contém o Seeder para inserir dados fictícios.
-   `public/css/style.css`: Contém os estilos CSS da aplicação.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues e pull requests para melhorar este projeto.

## Licença

Este projeto está sob a licença [MIT](LICENSE).

## Imagens do projeto

<img src="https://github.com/user-attachments/assets/b577ba16-6654-4007-9c6f-2de4a75884f0" alt="main">
<img src="https://github.com/user-attachments/assets/e81c5d23-5f17-4712-ad63-795544beaea5" alt="detalhes">
<img src="https://github.com/user-attachments/assets/4de17acb-34ff-4ea9-b0ee-c51275f559c2" alt="editar">

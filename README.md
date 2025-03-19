# Projeto VVWEB + PHP + SQL Server com Docker

## Como rodar o projeto:

1. Execute: `docker-compose up -d --build`.

2. Acesse o frontend (VvvebJs) em: `http://localhost:8080`.

3. O backend PHP roda em: `http://localhost:8000/exibir_dados.php`.

4. SQL Server estará disponível em `localhost:1433`.

## Observação:
- O backend PHP acessa o SQL Server diretamente via `sqlsrv`.
- O frontend consome o backend via **fetch()**.
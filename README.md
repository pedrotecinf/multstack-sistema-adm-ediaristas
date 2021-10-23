## Projeto sistema adminstrativo da plataforma E-Diaristas

Desenvolvido no curso multi-stack da treina web

### Instalando o projeto

#### Clonar o repositório

#### Instalando as dependencias

```
composer install
```

ou em ambiente de desenvolvimento:

```
composer update
```

#### Criar arquivo de configurações de ambiente

Copiar o arquivo de exemplo `.env.exemple` para `.env` na raiz do projeto
configurar os detalhes da aplicação e conexao com o banco de dados.

#### Criar a estrutura no banco de dados

```
sail artisan migrate
```

#### Iniciar o servidor de desenvolvimento

```
sail artisan serve
```

# cake-estoque — controle de EPI

Sistema web para controlar o estoque de **EPI** (equipamentos de proteção individual) de uma
empresa: o que entrou, o que foi entregue a cada colaborador e quem assinou o quê.

> Em desenvolvimento: cadastros, login e as telas de CRUD de cada módulo.

## Módulos

| Módulo | O que guarda |
| --- | --- |
| Colaboradores | dados do funcionário, cargo, admissão, foto e digital |
| Usuários | login e permissão de acesso, ligados a um colaborador |
| Categorias e Marcas | classificação dos equipamentos |
| Equipamentos | o item (ex.: luva, botina), com categoria e marca |
| Estoque de equipamentos | cada lote: **CA**, data de fabricação, validade, tamanho e quantidade disponível |
| Entradas | reposições de estoque |
| Fichas | entregas de EPI ao colaborador, com assinatura |
| Termos | termo de responsabilidade assinado pelo colaborador |
| Solicitações | pedidos de EPI feitos pelos colaboradores, com status |
| Inventários | contagens e ajustes de estoque, com observação |

## Stack

PHP 8.1+ · [CakePHP 5.1](https://cakephp.org) · CakePHP Authentication (login por usuário e senha) ·
CakePHP Migrations · MySQL/MariaDB

## Como rodar

```bash
composer install
cp config/app_local.example.php config/app_local.php   # ajuste o banco em Datasources
bin/cake migrations migrate
bin/cake server                                         # http://localhost:8765
```

Só `/users/login` abre sem login. Para o primeiro acesso, insira um colaborador e um usuário
direto no banco (todo usuário pertence a um colaborador). A senha vai como hash:

```bash
php -r 'echo password_hash("sua-senha", PASSWORD_DEFAULT), PHP_EOL;'
```

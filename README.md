# Projeto Laravel com Vite e Bootstrap

Este é um projeto desenvolvido com Laravel para o backend e Vite para o bundling de assets front-end. Bootstrap foi integrado para a criação de interfaces responsivas.

## Tecnologias Usadas

- **Laravel**: Framework PHP para desenvolvimento web.
  - Instalado via Composer: `composer create-project --prefer-dist laravel/laravel nome-do-projeto`
  
- **Vite**: Bundler de front-end moderno.
  - Instalado via NPM: `npm install --save-dev vite`
  
- **Bootstrap**: Framework CSS para construir interfaces responsivas.
  - Instalado via NPM: 
    ```bash
    npm install bootstrap @popperjs/core
    ```

- **Sass**: Pré-processador CSS para compilar SCSS do Bootstrap.
  - Instalado via NPM:
    ```bash
    npm install sass
    ```

- **XAMPP**: Pacote com Apache, MySQL, PHP e Perl para desenvolvimento local.
  - Baixado diretamente do [site do XAMPP](https://www.apachefriends.org/index.html).
  
- **No-IP**: Serviço de DNS dinâmico para associar um domínio a um IP dinâmico.
  
- **Composer**: Gerenciador de dependências para PHP.
  - Instalado via: `composer install`
  
- **Node.js e NPM**: Usados para gerenciamento de pacotes JavaScript.

## Como Rodar o Projeto

1. **Instalar as dependências**:
   - No terminal, rode `composer install` para instalar as dependências do Laravel.
   - Execute `npm install` para instalar as dependências do front-end.
   - Para instalar o **Bootstrap**, **Popper.js** e **Sass**, use o seguinte comando:
     ```bash
     npm install bootstrap @popperjs/core sass
     ```

2. **Rodar o servidor local**:
   - Utilize o XAMPP para iniciar o Apache e o MySQL.
   - Para rodar o Laravel, use `php artisan serve` (se necessário).
   - Para rodar o Vite, use `npm run dev`.

3. **Acessar pelo domínio configurado**:
   - Acesse o projeto via o domínio configurado com No-IP: `http://alimente.ddns.net`.

## Dependências

- **PHP**: 7.x ou superior
- **MySQL**: Usado pelo Laravel para banco de dados
- **Node.js**: Para gerenciamento do front-end

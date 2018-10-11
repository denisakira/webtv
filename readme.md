# WebApp FAAC webTV

Aplicação desenvolvida em Laravel e VueJS para a FAAC webTV, projeto de extensão da UNESP Bauru.

Para controlar a entrada e saída de equipamentos nas transmissões, um QR Code é anexado em cada equipamento, que contém um link que leva para a página de administrador.

Nessa página, é possível mudar o evento associado a esse equipamento.

## Requisitos

- Composer
- Laravel

## Instalação

- Configure as credenciais de API do Google

- Clone o repositório
- Abra o terminal dentro da pasta webtv
- Instale as dependências com o composer

```
    composer install
```

- Copie o arquivo .env.example como .env

```
    cpy .env.example .env
```

- Configure as informações de banco de dados no arquivo .env

- Inicie um servidor de desenvolvimento com o comando

```
    php artisan serve
```

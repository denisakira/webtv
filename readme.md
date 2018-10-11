#    WebApp FAAC webTV

Aplicação desenvolvida em Laravel e VueJS para a FAAC webTV, projeto de extensão da UNESP Bauru.
   
Para controlar a entrada e saída de equipamentos nas transmissões, um QR Code é anexado em cada equipamento.
    
O QR Code contém um link que leva para a página de administrador, onde é possível mudar o evento associado a esse equipamento.

## Requisitos
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
- Digite php artisan serve
- Em localhost:8000, o servidor de teste estará funcionando
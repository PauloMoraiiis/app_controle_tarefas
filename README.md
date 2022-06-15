
#Login
![Login](https://user-images.githubusercontent.com/87495655/173904993-032ff952-b7fc-4578-9569-843acd681b7b.png)

#Tarefas
![Login](https://user-images.githubusercontent.com/87495655/173904993-032ff952-b7fc-4578-9569-843acd681b7b.png)

#Tarefa em PDF
![TarefaPDF](https://user-images.githubusercontent.com/87495655/173905403-80ce8315-d8af-4a99-bb86-c861894fbf00.png)


## CRUD com Laravel, PHP orientado a objetos, MySQL ultilizando DOMPDF e Laravel Excel.
Este código foi feito apenas para demonstração de habilidades e aprendizado, não recomendado o uso em produção ou comercial.
O programa inclui área para visitantes com envio de formularios, tela de login, e em área restrita telas para manipular tarefas e emitilas em formatos XLSX, CSV e PDF tanto ultilizando o Laravel-DOMPDF(https://github.com/barryvdh/laravel-dompdf) quanto o Laravel Excel(https://laravel-excel.com), tarefas armazenadas em um banco de dados relacional. 

## Banco de dados
Crie o banco de dados "ct" e execute as migrates com o comando abaixo para criar as tabelas necessárias:
```shell
 php artisan migrate
```

## Configuração
As credenciais do banco de dados estão no arquivo `./app/Db/Database.php` e você deve alterar para as configurações do seu ambiente (HOST, NAME, USER e PASS).

## Composer
Para a aplicação funcionar, é necessário rodar o Composer para que sejam criados os arquivos responsáveis pelo autoload das classes.

## Laravel 
Projeto foi desenvolvido no laravel versão 8.X

## PHP
A versão usada do PHP foi a  7.4.6

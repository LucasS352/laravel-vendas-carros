 Passo A Passo: 

1. Clone o repositório
        Link: https://github.com/LucasS352/laravel-vendas-carros.git

2. composer install

3. npm install` && `npm run build`

4. Crie o arquivo .env (`.env.example .env`) e configure o banco.

        ![alt text](image-15.png)


5. Rode o comando para criar as tabelas e popular o banco com dados de teste:

  	   php artisan migrate --seed



Acesso Administrativo
- Email: admin@admin.com
- Senha: password


***********************************************************************************

AREA ADMINISTRADOR. 

Tela de registro: 
Url: 	http://127.0.0.1:8000/register

![alt text](image-2.png)

Tela de Login: 
Url: http://127.0.0.1:8000/login

![alt text](image-3.png)

Tela de Dashboard: 
Url: http://127.0.0.1:8000/dashboard     (DASHBOARDFAKE) 

![alt text](image-4.png)

Tela Gerencia de Veiculos: 
Url: http://127.0.0.1:8000/admin/veiculos

![alt text](image-5.png)

Tela Editar Veiculos:
URL: http://127.0.0.1:8000/admin/veiculos/2/edit

![alt text](image-6.png)

Cadastrar Novo Veiculo:
URL: http://127.0.0.1:8000/admin/veiculos/create

![alt text](image-7.png)
![alt text](image-8.png)



AREA CLIENTE 

Tela Vitrine:
URL: http://127.0.0.1:8000/

![alt text](image-9.png)
![alt text](image-10.png)

Filtros Funcionais: 
![alt text](image-11.png)

Ao clicar acima do nome do veiculo é possivel entrar na pagina detalhes: 

![alt text](image-12.png)

Tela Detalhes Do Veiculo 
URL: http://127.0.0.1:8000/veiculo/1

![alt text](image-13.png)

![alt text](image-14.png)
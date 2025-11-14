Alunos 

Gabriel trevisan de Lima   R.A:010624006

Lucas André de souza       R.A:020124026


Passo A Passo: 

1. Clone o repositório
        Link: https://github.com/LucasS352/laravel-vendas-carros.git

2. composer install

3. npm install` && `npm run build`

4. Crie o arquivo .env (`cp .env.example .env`) e configure o banco.

![alt text](image-16.png)

5. Abra o XAMPP, e de start no banco e no apache

   <img width="664" height="397" alt="image" src="https://github.com/user-attachments/assets/3378ce89-260b-4b9f-af12-f3e0b81e305b" />

        
6. Rode o comando para criar as tabelas e popular o banco com dados de teste:

  	   php artisan migrate --seed


7. Depois acesse o a URL: (http://127.0.0.1:8000/)   - Ira abrir a vitrine da loja
 <img width="1901" height="991" alt="image" src="https://github.com/user-attachments/assets/c49ce520-dd0d-4ff5-8617-893c358eb6e9" />


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

![alt text](image-17.png)
![alt text](image-3.png)

Tela de Dashboard: 
Url: http://127.0.0.1:8000/dashboard     (DASHBOARDFAKE) 

<img width="1072" height="629" alt="image" src="https://github.com/user-attachments/assets/177bc0c0-ca44-44be-bd4d-5f47c70fd23b" />


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

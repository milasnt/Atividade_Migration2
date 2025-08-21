## Atividade Migration - Tutorial

- Ative o xampp;
- Crie uma pasta no xamp/htdocs;
- Localize a linha ;extension=zip e apague o ";"
- Abra essa pasta no Visual Studio Code;

*1)* Instale o laravel no seu projeto com o comando composer global require laravel/installer:

<img width="413" height="211" alt="laravel" src="https://github.com/user-attachments/assets/b3b4b8ed-a72b-4621-87ae-e4edc8e1e034" />

*2)* Escolha a opção "none": 

<img width="485" height="301" alt="none" src="https://github.com/user-attachments/assets/fe8550d2-4005-4503-b792-5c4e02f8083a" />


*3)*  Escolha a opção "mysql" , "yes" e "yes":

<img width="606" height="246" alt="sqlll" src="https://github.com/user-attachments/assets/ee911e70-c27e-496f-915a-573e11268238" />

*4)* Agora, vamos partir para a criação das migrações. Com o seguinte comando, você vai gerar a tabela Cadastro, ela aparecerá no banco de dados e possibilitará todas as suas modificações.

<img width="999" height="87" alt="migCadastro" src="https://github.com/user-attachments/assets/9ebcf825-c7a1-4846-b568-9dcf1ba6ee37" />

*5)* Criaremos agora os campos da tabela Cadastro e seu tipo de dados:

<img width="766" height="591" alt="tblcadadstro" src="https://github.com/user-attachments/assets/7654bf01-2c88-4b68-bbce-77540197caea" />

*6)* Realize o mesmo procedimento para criar a tabela Estoque

<img width="960" height="67" alt="migEstoque" src="https://github.com/user-attachments/assets/df9dc1ae-58dd-46ee-acfc-2aff8485bde2" />

<img width="758" height="591" alt="tblEstoque" src="https://github.com/user-attachments/assets/b039795b-31cf-4152-97d3-1d3c6725cdcd" />

*7)* Agora, publique as tabelas com o seguinte comando:

<img width="424" height="25" alt="phpartisan" src="https://github.com/user-attachments/assets/c07e4f52-a669-4ad8-8d65-11837971b18f" />

- Tabela Cadastro:
  
<img width="284" height="110" alt="phpcadastro" src="https://github.com/user-attachments/assets/d45d0cf6-a9f9-45c9-9a46-61ddcde9dc69" />

- Tabela Estoque:

<img width="304" height="111" alt="phpestoque" src="https://github.com/user-attachments/assets/f4b1d8f1-7fcd-42d6-98bb-d91b1e514722" />


*8)* Vamos seguir para uma alteração na tabela Cadastro, adicionando os seguintes campos: RazaoSocial e NomeFantasia

- Crie a seguinte tabela para a alteração:

<img width="1059" height="70" alt="alterar" src="https://github.com/user-attachments/assets/bc873b3d-12b4-4a91-bea9-54f14a383e68" />

- Podemos perceber que todas as tabelas foram criadas em fornecedor/database/migrations, conforme a imagem a seguir:

<img width="367" height="200" alt="tabelas" src="https://github.com/user-attachments/assets/9ff61a1f-d9da-4bf3-8c60-a5bc1fc7712e" />

<img width="702" height="593" alt="alter" src="https://github.com/user-attachments/assets/380c3768-90dd-4d59-90f1-efee06e4d755" />


*9)* Para salvar essas modificações, execute este código novamente:

<img width="424" height="25" alt="phpartisan" src="https://github.com/user-attachments/assets/c07e4f52-a669-4ad8-8d65-11837971b18f" />

*10)* Podemos ver agora as alterações feitas na tabela Cadastro:

<img width="441" height="102" alt="phpalterado" src="https://github.com/user-attachments/assets/86f5cb7d-6dad-44bd-8d73-b0b1ad788125" />

## Sobre o projeto
Este é um projeto simples que construí para um desafio de programação.
As principais tecnologias abordadas aqui são Laravel, TailwindCSS, 
uma API chamada JSONPlaceholder e DataTables.

## Possíveis otimizações de performance 
Acredito que haveria uma melhoria significativa na pagina de show se eu pudesse limitar a quantidade
posts que seriam mostrados como "ler mais" diretamente na requisição que fiz no controller, mas, como não encontrei nenhum
método de fazer isso, tratei esses dados diretamente na view. Creio que, se encontrasse uma maneira de tratar, e apenas enviar
para a camada de views esse dado pólido, a performance poderia ser melhor. <br>
Obviamente, caso eu tivesse uma fonte interna de extração de dados, como o DB, seria bem mais rápido do que consultar uma API de 
um servidor externo.

## O que eu poderia ter melhorado
Acho que poderia ter criado um código mais limpo, um script mais fácil de ler lido e compreendido. Acabei por não comentar
o código, por se tratar de algo muito simples, mas isso me incomodou um pouco, já que gosto da prática de documentar.

## Iniciar aplicação
Para iniciar a aplicação é necessário baixar o repositório e ter um ambiente
capaz de rodar o Laravel instalado na sua máquina. <br>
Se tiver alguma dúvida, consulte
a documentação oficial do Laravel: <a href="https://laravel.com/docs/8.x#">https://laravel.com/docs/8.x#</a><br><br>
Após ter um ambiente instalado e configurado, utilize os seguintes comandos:<br><br>
composer install  # Instalar essenciais para o projeto<br>
cp .env.example .env  # Copiar arquivo raiz do projeto<br>
php artisan key:generate  # Gerar chave da aplicação para os cookies de sessão<br>
npm install && npm run dev  # Instalar assets e módulos do node/npm que não estão contidos no repositório<br>
php artisan serve # Executar servidor<br>
<br>
Após isso, você deve conseguir acessar tranquilamente a aplicação através do endereço <a href="http://localhost:8000">http://localhost:8000<br>





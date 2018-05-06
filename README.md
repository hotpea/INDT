Teste feito para a empresa INDT, pata vaga de desenvolvimento de sistemas.
Feito em PHP, com o framework LUMEN 5.6, Bootstrap 4.0, Jquery e usando API disponibilizada pela INDT.

Requisitos:
- PHP >= 7.1.3
- OpenSSL PHP Extension
- Mbstring PHP Extension

Passo a Passo

Instale o composer

https://getcomposer.org/download/

Instale o Lumen

```
composer global require "laravel/lumen-installer"
```

Faça o clone deste projeto com o seu nome de usuário

```
git clone https://github.com/<username>/INDT.git
```

Rode o seguinte comando na raiz do projeto

```
composer install
```

Faça uma cópia do arquivo .env.example e renomeie para .env e, se necessário, altere seus valores para variaveis referentes ao seu ambiente, provavelmente não será necessário.

Para iniciar o projeto basta rodar o comando abaixo na raiz do projeto.
PS: 8000 é a porta onde ele rodará, pode ser alterada para qualquer valor disponível

```
php -S localhost:8000 -t public
```

Após isso, basta abrir seu navegador favorito e aceder à URL:

http://localhost:8000

Enjoy ;)
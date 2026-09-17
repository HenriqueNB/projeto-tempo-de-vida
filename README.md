# Projeto Tempo de Vida

Aplicação web em PHP que calcula estatísticas da vida de uma pessoa com base no nome e no ano de nascimento.

## Funcionalidades

- Calcula a idade atual
- Estima a quantidade aproximada de dias vividos
- Estima a quantidade de batimentos cardíacos já realizados (média de 75 bpm)
- Estima a quantidade de respirações já realizadas (média de 17 por minuto)
- Exibe os anos, batimentos e respirações restantes considerando expectativa de vida de 95 anos

## Como usar

1. Abra o `index.html` em um servidor web com suporte a PHP (ex.: XAMPP, Apache, `php -S localhost:8000`).
2. Preencha o nome e o ano de nascimento no formulário.
3. Clique em **calcular** para ver os resultados.

## Estrutura

- `index.html` — formulário de entrada
- `calcular.php` — processamento e exibição dos resultados
- `style.css` — estilização da aplicação

## Requisitos

- PHP 5.4 ou superior
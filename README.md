# Ingresse Backend Devloper test

API utilizando PHP, LARAVEL, MYSQL, DOCKER, NGINX.

## Instalação

1. Faça o clone deste projeto com git clone git@github.com:diogom-42/api-ingresse.git
2. Execute o arquivo de configuração `start.sh` e aguarde a conclusão do mesmo.
3. Verifique se o BD "Ingresse" foi criado e populado.
4. O caminho da rota é : 

```site
https://ingresse.test.com/api/apiIngresse/users/
```

## Utilização
1. É possível testar a rota utilizando os métodos GET, PUT, POST e DELETE no Postman ou Insomnia, o retorno será em JSON.
2. Exemplos:

```python
GET - https://ingresse.test.com/api/apiIngresse/users/
Result: {
            "id": 1,
            "name": "Randall Blick",
            "email": "schiller.rusty@example.com",
            "phone": "523-376-5597 x40344",
            "created_at": "2018-11-26 19:06:02",
            "updated_at": "2018-11-26 19:06:02",
            "deleted_at": null
        }
______________________________________________________________________________________________________
PUT - https://ingresse.test.com/api/apiIngresse/users/{id}
Result: {
            "name": "Diogo Moura", //Caso queira editar o nome, editar o campo 'name'
            "email": "diogo.moura@example.com", //Caso queira editar o email, editar o campo 'email'
            "phone": "(454) 3333-0992" //Caso queira editar o telefone, editar o campo 'phone'
        }
______________________________________________________________________________________________________
POST - https://ingresse.test.com/api/apiIngresse/users/
Result: {
            "name": "Bruna Maria", //inserir um nome
            "email": "bruna@email.com", //inserir um email
            "phone": "(12) 4015-0992" //inserir um telefone
        }
______________________________________________________________________________________________________
DELETE - https://ingresse.test.com/api/apiIngresse/users/{id}
Result: {
            "message": "Registro deletado"
        }

```

## Observações
Se caso ocorrer erro relacionado ao SSL ao testar as rotas é preciso adicionar o certificado no navegador e caso for usado no Postman ou Insomnia desabilitar a extensão SSL.

## Agradecimentos
Agradeço aos responsáveis da empresa Ingresse pela oportunidade, estou ciente sobre que o teste não se encontra com todas as funções pedidas conforme o enunciado, espero ter conseguido passar meus conhecimentos atuais nesse teste. Obrigado.
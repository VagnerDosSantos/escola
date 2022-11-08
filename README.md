## Requisitos &#128003;
- **PHP:** 8.1.8
- **Laravel:** 9.0
- **Composer:** 2.2.6
- **NodeJS:** 16
- **Database:** MySQL
- **Documentação:** Postman
- **Línguagem:** O Código deve ser escrito em **PORTUGUÊS**, tendo suas ressalvas para funções a nível de escopo global que pode ser escrito em Inglês.

## Links Úteis &#128519;
- PHP: [PHP 8.1.8](https://windows.php.net/downloads/releases/php-8.1.8-nts-Win32-vs16-x64.zip)

---
# MÉTODOS HTTP

#### GET
| Código                         | Descrição                                                                  |
| :----------------------------- | :------------------------------------------------------------------------- |
| :blush: `200 - OK`             | Somente se encontrar dos no banco                                          |
| :rage: `401 - Unauthorized`    | Quando tentar realizar uma requisição sem estar autenticado                |
| :confounded: `404 - Not Found` | Quando não for encontrado nenhum registro                                  |
| :rage: `500 - Server Error`    | Quando acontecer algum erro inesperado. **(Não é necessário implementar)** |

#### POST
| Código                                    | Descrição                                                                                 |
| :---------------------------------------- | :---------------------------------------------------------------------------------------- |
| :blush: `102 - Processing`                | Quando a requisição for **ASSÍNCRONA** e já tiver um processo em andamento                |
| :confounded: `200 - OK`                   | Quando a requisição for concluída mas o registro **NÃO** for criado                       |
| :blush: `201 - Created`                   | Quando a requisição for concluída e o registro **FOR** criado                             |
| :blush: `202 - Accepted`                  | Quando a solicitação de uma requisição **ASSÍNCRONA** for concluída                       |
| :rage: `400 - Bad Request`                | Quando tentar realizar uma requisição e ocorrer algum erro relacionado a regra de negócio |
| :rage: `401 - Unauthorized`               | Quando tentar realizar uma requisição sem estar autenticado                               |
| :confounded: `404 - Not Found`            | Quando não for encontrado nenhum registro para processar                                  |
| :confounded: `422 - Unprocessable Entity` | Quando ocorrer algum erro por conta de falha na validação do Request                      |
| :rage: `500 - Server Error`               | Quando acontecer algum erro inesperado. **(Não é necessário implementar)**                |

#### PUT
| Código                                    | Descrição                                                                                 |
| :---------------------------------------- | :---------------------------------------------------------------------------------------- |
| :blush: `200 - OK`                        | Quando a requisição for concluída com sucesso                                             |
| :rage: `400 - Bad Request`                | Quando tentar realizar uma requisição e ocorrer algum erro relacionado a regra de negócio |
| :rage: `401 - Unauthorized`               | Quando tentar realizar uma requisição sem estar autenticado                               |
| :confounded: `404 - Not Found`            | Quando não for encontrado nenhum registro para processar                                  |
| :confounded: `422 - Unprocessable Entity` | Quando ocorrer algum erro por conta de falha na validação do Request                      |
| :rage: `500 - Server Error`               | Quando acontecer algum erro inesperado. **(Não é necessário implementar)**                |

#### DELETE
| Código                                    | Descrição                                                                  |
| :---------------------------------------- | :------------------------------------------------------------------------- |
| :confounded: `200 - OK`                   | Quando a requisição for concluída mas o registro **NÃO** for deletado      |
| :blush: `204 - No Content`                | Quando a requisição for concluída e o registro **FOR** deletado            |
| :rage: `401 - Unauthorized`               | Quando tentar realizar uma requisição sem estar autenticado                |
| :confounded: `404 - Not Found`            | Quando não for encontrado nenhum registro para processar                   |
| :confounded: `422 - Unprocessable Entity` | Quando ocorrer algum erro por conta de falha na validação do Request       |
| :rage: `500 - Server Error`               | Quando acontecer algum erro inesperado. **(Não é necessário implementar)** |

#### PATCH
| Código                                    | Descrição                                                                  |
| :---------------------------------------- | :------------------------------------------------------------------------- |
| :confounded: `200 - OK`                   | Quando a requisição for concluída mas o registro **NÃO** for editado       |
| :blush: `204 - No Content`                | Quando a requisição for concluída e o registro **FOR** editado             |
| :rage: `401 - Unauthorized`               | Quando tentar realizar uma requisição sem estar autenticado                |
| :confounded: `404 - Not Found`            | Quando não for encontrado nenhum registro para processar                   |
| :confounded: `422 - Unprocessable Entity` | Quando ocorrer algum erro por conta de falha na validação do Request       |
| :rage: `500 - Server Error`               | Quando acontecer algum erro inesperado. **(Não é necessário implementar)** |

---
## Respostas

### GET &#128064;
<details>
  <summary>Clique para expandir!</summary>

- 200 OK
```yaml
{
    "mensagem": "Registros encontrados",
    "dados": [
        {
            "MunId": 1,
            "MunNome": "Nome do registro"
        }
    ]
}
```

- 404 Not Found
```yaml
{
    "mensagem": "Registro não encontrado",
    "dados": []
}
```
</details>

### POST &#128064;
<details>
  <summary>Clique para expandir!</summary>

  - 102 *Processing*
  ```yaml
  {
      "mensagem": "Requisição em processamento"
  }
  ```

  - 200 *OK*
  ```yaml
  {
      "mensagem": "O Registro não pôde ser criado"
  }
  ```

  - 201 *Created*
  ```yaml
  {
      "mensagem": "O Registro criado",
      "dados": [
          {
              "MunId": 1,
              "MunNome": "Nome do registro"
          }
      ]
  }
  ```

  - 202 *Accepted*
  ```yaml
  {
      "mensagem": "Requisição recebida e está em andamento"
  }
  ```

  - 404 *Not Found*
  ```yaml
  {
      "mensagem": "Registro não encontrado"
  }
  ```
</details>

### PUT &#128064;

<details>
  <summary>Clique para expandir!</summary>

- 200 *OK*
```yaml
{
    "mensagem": "Registro editado com sucesso",
    // Dados dos *REGISTROS* atualizados
    "dados": [
        {
            "MunId": 1,
            "MunNome": "Nome do registro"
        }
    ]
}
```

- 404 Not Found
```yaml
{
    "mensagem": "Registro não encontrado",
}
```

</details>

### DELETE &#128064;

<details>

<summary>Clique para expandir!</summary>

- 200 *OK*
```yaml
{
    "mensagem": "Ocorreu um erro ao deletar o registro",
}
```

- 204 *No Content*
  
```yaml
 // Não informar o body da response
```

- 404 *Not Found*
```yaml
{
    "mensagem": "Registro não encontrado"
}
```
</details>

### PATCH &#128064;
<details>

<summary>Clique para expandir!</summary>

- 200 *OK*
```yaml
{
    "mensagem": "Ocorreu um erro ao atualizar a informação",
}
```

- 204 *No Content*
  
```yaml
 // Não informar o body da response
```

- 404 *Not Found*
```yaml
{
    "mensagem": "Registro não encontrado"
}
```
</details>


### GET | POST | PUT | DELETE | PATCH &#128064;
<details>

<summary>Clique para expandir!</summary>

- 400 *Bad Request* ( Não utilizado no método **GET** )
```yaml
{
    "mensagem": "Ocorreu um erro ao processar a requisição",
}
```

- 401 *Unauthorized*
```yaml
{
   "message": "Unauthorized"
}
```

 - 500 *Server Error*
```yaml
{
   "message": "Unauthorized"
}
```
</details>

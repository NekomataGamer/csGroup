###################
FUNCIONALIDADES ADCIONAIS
###################

Autenticação de usuários baseada no hook

hooks/Authenticate.php

###################
Configurações no controller
###################
É possível definir variáveis **públicas** para controlar a autenticação:


*******************
**$needAuth** (bool)
*******************
true caso seja necessária a autenticação para acessar o controller, false caso contrário.


*******************
**$authRedirect** (string)
*******************
url de redirecionamento caso seja obrigatória a autenticação para acessar o controller e o usuário esteja deslogado.


*******************
**Formato** 
*******************
controller/método.


*******************
**$authModel** (string)
*******************
Padrão: "users_model" - Model de onde são retornadas as informações de usuário.

###################
Métodos do hook
###################

*******************
**static bool is_guest()**
*******************
Retorno: (true, false)
Retorna true caso o usuário esteja deslogado, false caso contrário.


*******************
**static bool getUser()**
*******************
Retorno: (Objeto)
Retorna o objeto do usuário logado.


*******************
**static bool userValue($key)**
*******************
Parâmetros: $key (string) - chave do usuário a ser buscada (exemplo: "nome").
Retorno: (string, int, float, array...) - retorna o valor salvo do usuário retornado pelo model.

###################
Alterações no core model
###################
É possível alterar 2 variáveis **protected** do model e assim utilizar suas novas funcionalidades:


*******************
**protected $table** (string) - nome da tabela que o model utiliza.
*******************


*******************
**protected primary** (string) - nome da coluna primária da tabela. (padrão **id**).
*******************

###################
Métodos adcionados
###################

*******************
**get(string primary, string type='array')** - recebe apenas 1 valor do banco de dados baseado no parâmetro **primary** enviado.
*******************
**ex:** $this->model->get(1);
**ex:** $this->model->get(2, 'object');


*******************
**all()** - recebe todos os valores da tabela.
*******************
**ex:** $this->model->all();


*******************
**setTable(string table)** - seta a tabela na chamada.
*******************
**ex:** $this->model->setTable('tabela')->all();


*******************
**setPrimary(string primary)** - seta a primary key na chamada.
*******************
**ex:** $this->model->setTable('tabela')->setPrimary('id_tabela')->all();


*******************
**attributes(array atributos[])** - seta os atributos retornados na chamada.
*******************
**ex:** $this->model->attributes(['id', 'nome', 'login'])->all();


*******************
**rawString(string $sql)** - adciona um comando sql sem filtros à query atual.
*******************
**ex:** $this->model->rawString("SELECT * FROM users WHERE id = 1 ");


*******************
**fetch()** - executa a query atual do model e retorna os valores encontrados.
*******************
**ex**: $this->model->rawString("SELECT * FROM users WHERE id = 1 ")->fetch();


*******************
**where(string $key, string $value, string $op = '=')** - adiciona à query atual parâmetros de busca baseados na **key**, **value**, **op** enviados.
*******************
**ex**: $this->model->where(id, 1)->fetch();
**ex**: $this->model->where(nome, "user")->where("id", 3, ">")->fetch();


*******************
**insert(array $data, bool $returnId)** - insere valores no banco de dados e retorna ou não o id inserido.
*******************
**ex**: $this->model->insert(['nome' => 'user', 'login' => 'user']);


*******************
**update(array $data, int $primary)** - altera valores no banco de dados baseado no valor **primary** enviado.
*******************
**ex**: $this->model->update(['nome' => 'user2', 'login' => 'alter'], 1);


*******************
**delete(int $primary)** - deleta valores no banco de dados baseado no valor **primary** enviado.
*******************
**ex**: $this->model->delete(1);


*******************
**deleteKey(string $key, int $primary)** - deleta valores no banco de dados baseado no valor **primary** da key **$key** enviado.
*******************
**ex**: $this->model->deleteKey("id_parente", 2);

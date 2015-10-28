# html_helper
Classe para gerar códigos HTML através do PHP.

```
{
    "require": {
        "mayronceccon/html_helper": "^1.0"
    }
}
```

Utilização.

1 - Passando um array com os elementos válidos de cada função no primeiro parâmetro da função.
Ex:

```
fDiv(array('id' => 'id_div', 'class' => 'class_div'));
```
ou

2 - Passando parâmetro por parâmetro da função.

```
fDiv(null, 'id_div', 'class_div');
```

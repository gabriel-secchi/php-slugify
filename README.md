# php-slugify
Simples pacote para converter uma string qualquer em Slug

## instalação
Obtero pacote pelo composer:

```shell
composer require php-slugify
```

## Uso
Para usar é muito simples:

```php
$seuTexto = 'Texto para gerar Slug';
$separador = '-';
$result = \PhpSlugify\Slugify::convert($seuTexto, $separador);
```

O resultado será:
```
texto-para-gerar-slug
```

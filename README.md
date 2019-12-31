# php-slugify
Simples pacote para converter uma string qualquer em Slug

## instalação
Obtero pacote pelo composer:

```shell
composer require php-slugify
```

## Uso
```php
$seuTexto = 'Texto para gerar Slug';
$separador = '-';
$result = \PhpSlugify\Slugify::convert($seuTexto, $separador);
```

Ou apenas

```php
$seuTexto = 'Texto para gerar Slug';
$separador = '-';
$result = slug($seuTexto, $separador);
```

O resultado será:
```
texto-para-gerar-slug
```

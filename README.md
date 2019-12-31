# php-slugify
Simples pacote para converter uma string qualquer em Slug

## instalação
Obter o pacote pelo composer:

```shell
composer require gabriel-secchi/php-slugify
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

Em ambos os casos o resultado será:
```
texto-para-gerar-slug
```

# Republic of Turkey Identity Number Verification Package

## Description
This package was developed to facilitate the verification process of the Turkish Republic Identity Number.

## Setup

Run the following command to add your package to the project:

```bash
composer require yunusasuroglu/kimlikno
```

## Use

You can use the verification functionality provided by the package as follows:

### **1. Using Laravel**

1. Add your service provider to `config/app.php` file:

```php
'providers' => [
    yunusasuroglu\KimlikNo\KimlikNoServiceProvider::class,
];
```

2. Facade Add:

```php
'aliases' => [
    'KimlikNo' => yunusasuroglu\KimlikNo\Facades\KimlikNo::class,
];
```

3. Use:

```php
use yunusasuroglu\KimlikNo\KimlikNo;

$tcNo = "12345678901";

if (KimlikNo::dogrula($tcNo)) {
    echo "Turkish Republic Identity Number is valid.";
} else {
    echo "Turkish Republic Identity Number is not valid.";
}
```

## Requirements

- PHP 8.0 or above
- Composer

## Contribute

1. Bu projeyi fork'layın.
2. Yeni bir özellik dalı (`feature/ozellik-adi`) oluşturun.
3. Değişikliklerinizi commit edin (`git commit -m 'Yeni özellik eklendi'`).
4. Dalı master’a push edin (`git push origin feature/ozellik-adi`).
5. Bir Pull Request açın.

## Lisans
Bu proje [MIT Lisansı](LICENSE) ile lisanslanmıştır.


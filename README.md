# T.C. Kimlik Numarası Doğrulama Paketi

## Açıklama
Bu paket, T.C. Kimlik Numarası doğrulama işlemlerini kolaylaştırmak amacıyla geliştirilmiştir.

## Kurulum

Paketinizi projeye eklemek için aşağıdaki komutu çalıştırın:

```bash
composer require yunusasuroglu/kimlikno
```

## Kullanım

Paketin sağladığı doğrulama işlevini aşağıdaki gibi kullanabilirsiniz:

### **1. Laravel Kullanımı**

1. Servis sağlayıcınızı `config/app.php` dosyasına ekleyin:

```php
'providers' => [
    yunusasuroglu\KimlikNo\KimlikNoServiceProvider::class,
];
```

2. Facade ekleyin:

```php
'aliases' => [
    'KimlikNo' => yunusasuroglu\KimlikNo\Facades\KimlikNo::class,
];
```

3. Kullanımı:

```php
use yunusasuroglu\KimlikNo\KimlikNo;

$tcNo = "12345678901";

if (KimlikNo::dogrula($tcNo)) {
    echo "T.C. Kimlik Numarası geçerlidir.";
} else {
    echo "T.C. Kimlik Numarası geçerli değildir.";
}
```

## Gereksinimler

- PHP 8.0 veya üstü
- Composer

## Katkıda Bulunma

1. Bu projeyi fork'layın.
2. Yeni bir özellik dalı (`feature/ozellik-adi`) oluşturun.
3. Değişikliklerinizi commit edin (`git commit -m 'Yeni özellik eklendi'`).
4. Dalı master’a push edin (`git push origin feature/ozellik-adi`).
5. Bir Pull Request açın.

## Lisans
Bu proje [MIT Lisansı](LICENSE) ile lisanslanmıştır.


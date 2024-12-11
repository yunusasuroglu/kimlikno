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

### **1. Servis Kullanımı**

```php
require_once 'vendor/autoload.php';

use TCKimlik\KimlikNo;

$kimlikNo = new KimlikNo();

// Geçerli bir T.C. kimlik numarası
$tcNo = "12345678901";

if ($kimlikNo->dogrula($tcNo)) {
    echo "T.C. Kimlik Numarası geçerlidir.";
} else {
    echo "T.C. Kimlik Numarası geçerli değildir.";
}
```

## Gereksinimler

- PHP 7.4 veya üstü
- Composer

## Katkıda Bulunma

1. Bu projeyi fork'layın.
2. Yeni bir özellik dalı (`feature/ozellik-adi`) oluşturun.
3. Değişikliklerinizi commit edin (`git commit -m 'Yeni özellik eklendi'`).
4. Dalı master’a push edin (`git push origin feature/ozellik-adi`).
5. Bir Pull Request açın.

## Lisans
Bu proje [MIT Lisansı](LICENSE) ile lisanslanmıştır.


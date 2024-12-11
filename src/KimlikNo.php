<?php

namespace yunusasuroglu\KimlikNo;

class KimlikNo
{
    /**
     * TC Kimlik No doğrulama işlemi.
     *
     * @param  string  $tcKimlikNo
     * @return bool
     */
    public static function doğrula($tcKimlikNo)
    {
        // Kimlik No'nun 11 karakterden oluşması gerekir.
        if (strlen($tcKimlikNo) != 11) {
            return false;
        }

        // Kimlik No'nun ilk rakamı sıfır olamaz.
        if ($tcKimlikNo[0] == '0') {
            return false;
        }

        // İlk 9 rakama göre hesaplama
        $dizi = str_split($tcKimlikNo);
        $toplam1 = $dizi[0] + $dizi[2] + $dizi[4] + $dizi[6] + $dizi[8];
        $toplam2 = $dizi[1] + $dizi[3] + $dizi[5] + $dizi[7];
        $onuncuHane = $toplam1 * 7 - $toplam2;
        $onuncuHane = $onuncuHane % 10;

        // 11. hane kontrolü
        $onbirinciHane = 0;
        for ($i = 0; $i < 10; $i++) {
            $onbirinciHane += $dizi[$i];
        }
        $onbirinciHane = $onbirinciHane % 10;

        return $onuncuHane == $dizi[9] && $onbirinciHane == $dizi[10];
    }
}

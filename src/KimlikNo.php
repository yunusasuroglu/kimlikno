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
    public static function verification(string $tcKimlikNo): bool
    {
        if (strlen($tcKimlikNo) !== 11) {
            return false;
        }

        if ($tcKimlikNo[0] === '0') {
            return false;
        }

        $dizi = str_split($tcKimlikNo);
        $toplam1 = $dizi[0] + $dizi[2] + $dizi[4] + $dizi[6] + $dizi[8];
        $toplam2 = $dizi[1] + $dizi[3] + $dizi[5] + $dizi[7];
        $onuncuHane = ($toplam1 * 7) - $toplam2;
        $onuncuHane = $onuncuHane % 10;

        // 11. hane kontrolü
        $onbirinciHane = array_sum(array_slice($dizi, 0, 10)) % 10;

        return $onuncuHane === (int)$dizi[9] && $onbirinciHane === (int)$dizi[10];
    }
}

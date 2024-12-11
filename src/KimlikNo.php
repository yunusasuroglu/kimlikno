<?php

namespace TCKimlik;

class TCKimlik
{
    public function validate($tckn)
    {
        if (!is_numeric($tckn) || strlen($tckn) !== 11) {
            return false;
        }
        
        $digits = str_split($tckn);
        $checksum1 = (
            (7 * ($digits[0] + $digits[2] + $digits[4] + $digits[6] + $digits[8])) -
            ($digits[1] + $digits[3] + $digits[5] + $digits[7])
        ) % 10;

        $checksum2 = array_sum(array_slice($digits, 0, 10)) % 10;

        return $checksum1 == $digits[9] && $checksum2 == $digits[10];
    }
}

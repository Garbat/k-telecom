<?php

namespace App\Helpers;

class Helpers{

    /**
     * Проверяет серийный номер на соответствие с маской
     * @param $mask string Маска
     * @param $str string Строка для проверки
     * @return false|int
     */
    public static function customRegex(string $mask, string $str){

        if(strlen($mask)==strlen($str)){
            $map = [
                'N'=>'[0-9]',
                'A'=>'[A-Z]',
                'a'=>'[a-z]',
                'X'=>'[a-zA-Z0-9]',
                'Z'=>'[-_@]',
            ];

            $result = false;
            $regexp = '';

            foreach (str_split($mask) as $char) {
                $regexp.=$map[$char];
            }
        } else {
            return 0;
        }

        return preg_match("#{$regexp}#", $str);
    }

}

<?php

namespace app\components;

use Yii;
use yii\base\Component;

//use yii\base\InvalidConfigException;

class MyComponent extends Component
{

    public function mb_ucfirst($string, $encoding)
    {
        $strlen = mb_strlen($string, $encoding);
        $firstChar = mb_substr($string, 0, 1, $encoding);
        $then = mb_substr($string, 1, $strlen - 1, $encoding);
        return mb_strtoupper($firstChar, $encoding) . $then;
    }

    public function pluralCategory($count)
    {
        $mod10 = $count % 10;
        $mod100 = $count % 100;

        if (is_int($count) && $mod10 == 1 && $mod100 != 11) {
            return 'one';
        } elseif (($mod10 > 1 && $mod10 < 5) && ($mod100 < 12 || $mod100 > 14)) {
            return 'few';
        } elseif ($mod10 == 0 || ($mod10 > 4 && $mod10 < 10) || ($mod100 > 10 && $mod100 < 15)) {
            return 'many';
        } else {
            return 'other';
        }
    }

    public function arrayCopy(array $array)
    {
        $result = array();
        foreach ($array as $key => $val) {
            if (is_array($val)) {
                $result[$key] = $this->arrayCopy($val);
            } elseif (is_object($val)) {
                $result[$key] = clone $val;
            } else {
                $result[$key] = $val;
            }
        }
        return $result;
    }
}
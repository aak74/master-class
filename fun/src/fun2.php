<?php

/* Заменяет элементы входного массива, содержащие подстроки
   «серебряный обрез», «золотой обрез», «с серебряным обрезом»,
   «с золотым обрезом», «серебро» или «золото», на название материала,
   присутствующего в названии, т.е. на «серебро» или «золото».  */
function transform($inArray)
{
    $replaces = [
      "серебро" => "серебро",
      "серебряный обрез" => "серебро",
      "с серебряным обрезом" => "серебро",
      "золото" => "золото",
      "золотой обрез" => "золото",
      "с золотым обрезом" => "золото",
    ];

    return array_map(function ($item) use ($replaces) {
      foreach ($replaces as $from => $to) {
        if (strpos($item, $from) !== false) {
          return $to;
        }
      }
      return $item;
    }, $inArray);
}

<?php

/* Заменяет элементы входного массива, содержащие подстроки
   «серебряный обрез», «золотой обрез», «с серебряным обрезом»,
   «с золотым обрезом», «серебро» или «золото», на название материала,
   присутствующего в названии, т.е. на «серебро» или «золото».  */
function transform($a)
{
    for ($i=0; $i<count($a); $i++) {
        $a[$i] = str_replace("серебряный обрез", "серебро", $a[$i]);
        $a[$i] = str_replace("с серебряным обрезом", "серебро", $a[$i]);
        $a[$i] = str_replace("золотой обрез", "золото", $a[$i]);
        $a[$i] = str_replace("с золотым обрезом", "золото", $a[$i]);
    }
    return $a;
}

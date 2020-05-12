<?php

declare(strict_types=1);

function printSelfIntroduction (String $name, String $food)
{
    echo "${name}は${food}が好きです。<br>";
}

printSelfIntroduction("織田信長", "りんご");
printSelfIntroduction("豊臣秀吉", "みかん");
printSelfIntroduction("徳川家康", "レモン");

<?php
$sumary = <<<summary
Returns an array of strings, each of which is a substring
of string formed by splitting it on boundaries
 formed by the string separator
summary;
$word =sizeof(explode(' ', strip_tags($sumary)));
echo "total words are :$word";
?>
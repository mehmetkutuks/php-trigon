<?php

function ucgen($sayi)
{
    $newSayi = $sayi - 2;
    $b = -1;
    while ($newSayi >= $b)
    {
        $b++;
        for ($a = 0; $a <= $b; $a++)
        {
            print 'O';
        }
        print "<br>";
    }
}

ucgen(20);

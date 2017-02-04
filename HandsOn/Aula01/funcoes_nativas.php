<?php
// funcoes_nativas.php

$var = '20';

// funçoes de verificação de tipo
echo 'Variavel "20" é array? ' . (is_array($var) ? 'sim' : 'não') . '<br />';
echo 'Variavel "20" é bool? ' . (is_bool($var) ? 'sim' : 'não') . '<br />';
echo 'Variavel "20" é int? ' . (is_int($var) ? 'sim' : 'não') . '<br />';
echo 'Variavel "20" é float? ' . (is_float($var) ? 'sim' : 'não') . '<br />';
echo 'Variavel "20" é object? ' . (is_object($var) ? 'sim' : 'não') . '<br />';
echo 'Variavel "20" é string? ' . (is_string($var) ? 'sim' : 'não') . '<br />';

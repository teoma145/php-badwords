<?php
$testo = $_GET['testo'];
$censored = $_GET['censored'];
$censored_senza_spazi = str_replace(' ', '', $censored);
$testo_censurato = str_replace($censored_senza_spazi, '***', $testo);
$lunghezza_originale = strlen($testo);
$lunghezza_censura = strlen($testo_censurato);
$lunghezza_asterischi =strlen('***');
$lunghezza_effettiva_censura = $lunghezza_censura - $lunghezza_asterischi;
echo "Testo originale: $testo <br>";
echo "Lunghezza del testo originale: $lunghezza_originale <br>";
echo "Testo censurato: $testo_censurato <br>";
echo "Lunghezza del testo censurato: $lunghezza_effettiva_censura <br>";
?>
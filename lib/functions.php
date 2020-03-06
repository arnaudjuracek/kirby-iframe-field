<?php

function fraction ($fract, $dec = 6) {
  $numbers = explode('/', $fract);
  return round($numbers[0] / $numbers[1], $dec);
}

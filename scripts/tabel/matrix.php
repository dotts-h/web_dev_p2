<?php

class Matrix
{
    private $i, $j;
    private $matrix;

    function __construct($i, $j, $random = true)
    {
        $this->i = $i;
        $this->j = $j;
        if ($random) {
            $this->generateRandomArray($i, $j);
        }
    }

    private function generateRandomArray($i, $j)
    {
        for ($a = 0; $a < $i; $a++) {
            for ($b = 0; $b < $j; $b++) {
                $this->matrix[$a][$b] = random_int(0, 10);
            }
        }
    }

    public function getRandomMatrix()
    {
        return $this->matrix;
    }
}

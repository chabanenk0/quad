<?php

namespace QuadraticEquation;

class QuadraticEquation
{

    /**
     * Calculates the roots of the quadratic equation
     * ax + b + c=0
     * d = sqrt(b*b-4*a*c)
     * x = -b +- sqrt(d)/2a
     * @param $a
     * @param $b
     * @param $c
     * @return array|float
     */
    public function getRoots($a, $b, $c)
    {
        if ($a == 0 ) {
            return $this->getLinearRoots($b, $c);
        }

        $d = $b * $b - 4 * $a *$c;
        if ($d > 0) {
            $x1 = (-$b + sqrt($d))/ (2 * $a);
            $x2 = (-$b - sqrt($d))/ (2 * $a);
            return array($x1, $x2);
        } else {
            if ($d == 0) {
                $x = (-$b)/ (2 * $a);
                return array($x);
            } else {
                return [];
            }
        }
    }

    /**
     * Calculate the roots of linear equation
     * ax+b =0
     * x = -b/a
     * @param $a
     * @param $b
     * @return float
     */
    private function getLinearRoots($a, $b)
    {
        return -$b / $a;
    }
}
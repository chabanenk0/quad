<?php
class QuadraticEquationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testGetRoots($a, $b, $c, $expected)
    {
        $solver = new \QuadraticEquation\QuadraticEquation();
        $roots = $solver->getRoots($a, $b, $c);
        var_dump($roots);
        sort($roots);
        sort($expected);
        $this->assertEquals($expected, $roots);
    }

    public function additionProvider()
    {
        return array(
            array(1, -2, 1, [1]),
            array(1, -3, 2, [1.0, 2.0]),
            array(1, 2, 3, []),
            array(0, 1, 3, [-3.0]),
            array(0, 1, 0, [0]),
            array(0, 0, 0, ['anyRealNumber'])
        );
    }
}
?>o
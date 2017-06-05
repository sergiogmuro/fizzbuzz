<?php

use App\Http\Controllers\FizzBuzzController;

class FizzBuzzTest extends TestCase
{
    private $instance = null;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->instance = new FizzBuzzController();
    }

    /**
     * @expectedException \Exception
     *
     * @return void
     */
    public function testEmpty()
    {
        $value = $this->instance->index();
    }

    /**
     * @dataProvider stringsProvider
     * @expectedException \Exception
     *
     * @return void
     */
    public function testStrings($a, $b)
    {
        $value = $this->instance->index($a, $b);
    }

    /**
     * @dataProvider integersProvider
     * @return void
     */
    public function testIntegers($a, $b)
    {
        print_r($a);
        print_r($b);
        $value = $this->instance->index($a, $b);
        $this->assertEquals('', $value);
    }

    public function stringsProvider()
    {
        return [
            ['a', 0],
            [1, '1s'],
            ['zero', '']
        ];
    }

    public function integersProvider()
    {
        return [
            [-50, 50],
            [10, 1],
            [10, 20]
        ];
    }
}

{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Trait.')}}
<?php

namespace {{=$.NAMESPACE}};

use PHPUnit\Framework\TestCase;

class {{=$.NAME}} extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
}

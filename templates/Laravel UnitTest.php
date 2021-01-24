{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Unit Test.')}}
<?php

namespace {{=$.NAMESPACE}};

use Tests\TestCase;

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

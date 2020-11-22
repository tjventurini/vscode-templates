{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Exception.')}}
<?php

namespace {{=$.NAMESPACE}};

use Exception;

class {{=$.NAME}} extends Exception
{
    public function __construct($message = null)
    {
        $this->message = $message;
    }
}
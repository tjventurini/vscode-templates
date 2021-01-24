{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Exception.')}}
<?php

namespace {{=$.NAMESPACE}};

use Exception;

class {{=$.NAME}} extends Exception
{
    /**
     * Constructor of this custom exception.
     * 
     * Should have the stacktrace available.
     */
    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
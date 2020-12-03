{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Facade.')}}
{{#def.prompt('FACADE_KEY', 'Enter a Accessor for your Facade.')}}
<?php

namespace {{=$.NAMESPACE}};

use Illuminate\Support\Facades\Facade;

class {{=$.NAME}} extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '{{=$.FACADE_KEY}}';
    }
}

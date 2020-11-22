{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Trait.')}}
{{#def.prompt('DESCRIPTION', 'What is this Pipe supposed to do?.')}}
<?php

namespace {{=$.NAMESPACE}};

class {{=$.NAME}}
{
    /**
    * {{=$.DESCRIPTION}}
     * 
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
    }
}

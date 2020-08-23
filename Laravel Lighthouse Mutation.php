{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Trait.')}}
<?php

namespace {{=$.NAMESPACE}};

class {{=$.NAME}}
{
    /**
     * @param null                 $_
     * @param array<string, mixed> $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
    }
}

{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Pipe.')}}
{{#def.prompt('DESCRIPTION', 'What is this Pipe supposed to do?.')}}
<?php

namespace {{=$.NAMESPACE}};

use Closure;

class {{=$.NAME}}
{
    /**
     * {{=$.DESCRIPTION}}
     *
     * @param  $Capsule
     * @param  Closure         $next
     * @return mixed
     */
    public function handle($Capsule, Closure $next)
    {
        // run the final $next callback
        return $next($Capsule);
    }
}

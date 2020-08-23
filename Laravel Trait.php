{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Trait.')}}
<?php

namespace {{=$.NAMESPACE}};

trait {{=$.NAME}}
{
    /**
     * Eloquent will call this method while booting the model using it.
     * 
     * @return void
     */
    public function boot{{=$.NAME}}()
    {
        // do something
    }
}

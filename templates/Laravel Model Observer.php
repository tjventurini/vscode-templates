{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Observer.')}}
{{#def.prompt('MODEL', 'Enter the name of the Model this Observer is for.')}}
<?php

namespace {{=$.NAMESPACE}};

class {{=$.NAME}}
{
    /**
     * Handle the {{=$.MODEL}} "created" event.
     *
     * @param  {{=$.MODEL}}  $model
     * @return void
     */
    public function created({{=$.MODEL}} $model)
    {
        //
    }

    /**
     * Handle the {{=$.MODEL}} "updated" event.
     *
     * @param  {{=$.MODEL}}  $model
     * @return void
     */
    public function updated({{=$.MODEL}} $model)
    {
        //
    }

    /**
     * Handle the {{=$.MODEL}} "deleted" event.
     *
     * @param  {{=$.MODEL}}  $model
     * @return void
     */
    public function deleted({{=$.MODEL}} $model)
    {
        //
    }

    /**
     * Handle the {{=$.MODEL}} "restored" event.
     *
     * @param  {{=$.MODEL}}  $model
     * @return void
     */
    public function restored({{=$.MODEL}} $model)
    {
        //
    }

    /**
     * Handle the {{=$.MODEL}} "force deleted" event.
     *
     * @param  {{=$.MODEL}}  $model
     * @return void
     */
    public function forceDeleted({{=$.MODEL}} $model)
    {
        //
    }
}

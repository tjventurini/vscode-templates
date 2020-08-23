{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Class.')}}
<?php

namespace {{=$.NAMESPACE}};

use Illuminate\Database\Eloquent\Model;

class {{=$.NAME}} extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}

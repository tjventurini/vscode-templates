{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Class.')}}
<?php

namespace {{=$.NAMESPACE}};

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class {{=$.NAME}} extends Model
{
    use HasFactory;
    
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}

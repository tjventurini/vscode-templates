{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Seeder.')}}
<?php
{{?$.NAMESPACE != ""}}
namespace {{=$.NAMESPACE}};
{{?}}

use Illuminate\Database\Seeder;

class {{=$.NAME}} extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }
}

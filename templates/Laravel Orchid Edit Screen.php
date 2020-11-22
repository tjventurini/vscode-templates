{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Screen.')}}
{{#def.prompt('MODEL', 'Enter the Model this Screen is for.')}}
{{#def.prompt('TARGET', 'Enter the Target (singular) this Screen is for.')}}
<?php

namespace {{=$.NAMESPACE}};

use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Alert;

class {{=$.NAME}} extends Screen
{

    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create {{=$.TARGET}}';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Create a new {{=$.TARGET}}';

    /**
     * Permission.
     *
     * @var string|array
     */
    public $permission = 'platform.{{=$.TARGET}}s';

    /**
     * True if the model already exists.
     *
     * @var bool
     */
    public $exists = false;

    /**
     * Query data.
     * 
     * @param {{=$.MODEL}} ${{=$.MODEL}} 
     * @return array 
     */
    public function query({{=$.MODEL}} ${{=$.MODEL}}): array
    {
        // save the state of the model
        $this->exists = ${{=$.MODEL}}->exists;

        // when the model exists
        if ($this->exists) {
            // - update the name and description of the screen
            $this->name        = 'Edit {{=$.TARGET}}';
            $this->description = 'Update an existing {{=$.TARGET}}';

            // - load relationships
            // ${{=$.MODEL}}->load(['location']);
        }

        return [
            '{{=$.TARGET}}' => ${{=$.MODEL}},
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create {{=$.TARGET}}')
                ->icon('pencil')
                ->method('updateOrCreate')
                ->canSee(!$this->exists),
            Button::make('Update {{=$.TARGET}}')
                ->icon('note')
                ->method('updateOrCreate')
                ->canSee($this->exists),
            Button::make('Remove {{=$.TARGET}}')
                ->icon('trash')
                ->confirm('Are you sure you want to delete this {{=$.TARGET}}?')
                ->method('delete')
                ->canSee($this->exists),
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        // return [
        //     {{=$.MODEL}}EditLayout::class,
        // ];
    }

    /**
     * Action to update or create an event.
     *
     * @param  {{=$.MODEL}}   ${{=$.MODEL}}
     * @param  Request $Request
     * @return void
     */
    public function updateOrCreate({{=$.MODEL}} ${{=$.MODEL}}, Request $Request)
    {
        // pass data to service
        {{=$.MODEL}}s::updateOrCreate(${{=$.MODEL}}, $Request->get('{{=$.TARGET}}'));

        // print info
        Alert::info('You have successfully saved the {{=$.TARGET}}.');

        // redirect back to list
        return redirect()->route('platform.{{=$.TARGET}}s');
    }
}
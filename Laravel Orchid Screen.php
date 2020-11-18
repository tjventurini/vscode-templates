{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Screen.')}}
{{#def.prompt('MODEL', 'Enter the Model this Screen is for.')}}
{{#def.prompt('TARGET', 'Enter the Target (singular) this Screen is for.')}}
<?php

namespace {{=$.NAMESPACE}};

use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use Marqant\Events\Models\Event;
use Orchid\Support\Facades\Alert;
use Marqant\Events\Facades\Events;

class {{=$.NAME}} extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = '{{=$.MODEL}}s';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All {{=$.MODEL}}s';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            '{{=$.TARGET}}s' => {{=$.MODEL}}::paginate(),
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
            Link::make('Create new {{=$.TARGET}}')
                ->icon('pencil')
                ->route('platform.{{=$.TARGET}}.edit'),
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            // {{=$.MODEL}}ListLayout::class
        ];
    }

    /**
     * Delete the entry.
     * 
     * @param {{=$.MODEL}} ${{=$.MODEL}}
     */
    public function delete({{=$.MODEL}} ${{=$.MODEL}})
    {
        // delete the model
        ${{=$.MODEL}}->delete();

        // push alert info
        Alert::info('You have successfully deleted the {{=$.MODEL}}.');

        // redirect to event list
        return redirect()->route('platform.{{=$.TARGET}}s');
    }
}

{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Screen.')}}
{{#def.prompt('MODEL', 'Enter the Model this Screen is for.')}}
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
    public $name = '{{=$.NAME}}';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All {{=$.NAME}}';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            // 'events' => Event::paginate(),
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
            // Link::make('Create new event')
            //     ->icon('pencil')
            //     ->route('platform.event.edit'),
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
            // EventListLayout::class
        ];
    }

    public function delete({{=$.MODEL}} ${{=$.MODEL}})
    {
        // delete event using the service
        ${{=$.MODEL}}->delete();

        // push alert info
        Alert::info('You have successfully deleted the {{=$.MODEL}}.');

        // redirect to event list
        // return redirect()->route('platform.events');
    }
}

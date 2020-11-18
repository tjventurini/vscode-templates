{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Layout.')}}
{{#def.prompt('TARGET', 'Enter the Data Target this Layout is for.')}}
<?php

namespace {{=$.NAMESPACE}};

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\DateTimer;
use Marqant\Events\Models\EventCategory;
use Marqant\Events\Models\EventLocation;

class {{=$.NAME}} extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): array
    {
        return [
            Input::make('{{=$.TARGET}}.title')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Title'))
                ->placeholder(__('Title')),
            Input::make('{{=$.TARGET}}.slug')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Slug'))
                ->placeholder(__('Slug')),

            // Relation::make('{{=$.TARGET}}.event_location_id')
            //     ->title(__('Event Location'))
            //     ->fromModel(EventLocation::class, 'title')
            //     ->required(),
            // Relation::make('{{=$.TARGET}}.categories.')
            //     ->title(__('Event Categories'))
            //     ->fromModel(EventCategory::class, 'title')
            //     ->multiple()
            //     ->required(),

            DateTimer::make('{{=$.TARGET}}.created_at')
                ->title(__('Created at'))
                ->allowInput()
                ->format('Y-m-d H:i:s')
                ->enableTime()
                ->format24hr(),
            DateTimer::make('{{=$.TARGET}}.updated_at')
                ->title(__('Updated at'))
                ->allowInput()
                ->format('Y-m-d H:i:s')
                ->enableTime()
                ->format24hr(),
            // DateTimer::make('{{=$.TARGET}}.deleted_at')
            //     ->title(__('Deleted at'))
            //     ->allowInput()
            //     ->format('Y-m-d H:i:s')
            //     ->enableTime()
            //     ->format24hr(),
        ];
    }
}

{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Layout.')}}
{{#def.prompt('MODEL', 'Enter the Model this Layout is for.')}}
{{#def.prompt('TARGET', 'Enter the Target (singular) this Layout is for.')}}
<?php

namespace {{=$.NAMESPACE}};

use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;

class {{=$.NAME}} extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = '{{=$.TARGET}}s';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::set('name', __('Name'))
                ->sort()
                ->cantHide()
                ->filter(TD::FILTER_TEXT)
                ->render(function ({{=$.MODEL}} ${{=$.MODEL}}) {
                    return Link::make(${{=$.MODEL}}->name)
                        ->route('platform.{{=$.TARGET}}.edit', ${{=$.MODEL}});
                }),
                
            TD::set(__('Actions'))
                ->cantHide()
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function ({{=$.MODEL}} ${{=$.MODEL}}) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([
                            Link::make(__('Edit'))
                                ->route('platform.{{=$.TARGET}}.edit', ${{=$.MODEL}}->id)
                                ->icon('pencil'),

                            Button::make(__('Delete'))
                                ->method('delete')
                                ->confirm(__('Are you sure you want to delete this {{=$.TARGET}}?'))
                                ->parameters([
                                    'id' => ${{=$.MODEL}}->id,
                                ])
                                ->icon('trash'),
                        ]);
                }),
        ];
    }
}

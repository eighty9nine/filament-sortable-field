<?php

namespace EightyNine\SortableField\Forms\Components;

use Filament\Forms\Components\Field;

class SortableField extends Field
{
    protected string $view = 'filament-sortable-field::forms.components.sortable-field';

    public array $sortableItems;


    public function items(array $sortableItems): static
    {
        $this->sortableItems = $sortableItems;
        return $this;
    }

    public function getSortableItems(): array
    {

        $state = $this->getState();
        $sortableItems = $this->sortableItems;
        info("updating state...", [$state]);

        $newState = [];
        if($state){
            foreach ($state as $key => $value) {
                if(isset($sortableItems[$key])){
                    $newState[$key] = $value;
                }
            }
        }else{
            $newState = $sortableItems;
        }
        return $newState;
    }

}

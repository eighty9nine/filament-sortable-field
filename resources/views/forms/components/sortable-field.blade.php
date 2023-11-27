<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    @php
        $items = $getSortableItems();
        $data = $getState();

    @endphp
    <div
        x-data="{ state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$getStatePath()}')") }}}"
        x-load-js="[@js(\Filament\Support\Facades\FilamentAsset::getScriptSrc('sortable-field', package: 'eightynine/filament-sortable-field'))]"
        x-init="(() => {
            // List with handle
            let options = @js($items);
            new Sortable(document.getElementById('sortableList'), {
              animation: 150,
              store: {
                set: function (sortable) {
                  try{
                    let sortedItems = {}
                    sortable.toArray().forEach(item => {
                        sortedItems[item] = options[item]
                    });
                    state = JSON.stringify(sortedItems)
                  }catch(e){
                    console.log(e)
                  }
                },
              },
            });

        })()"
        x-cloak
        wire:ignore>
        <!-- Interact with the `state` property in Alpine.js -->

        <!-- List with handle -->
        <div id="sortableList" class="list-group border flex flex-col w-full rounded-lg overflow-hidden">
            @foreach ($items as $key => $item)
                <div
                    class="w-full border-b dark:border-gray-700 dark:bg-gray-800 bg-white p-2 flex flex-row items-center gap-2 cursor-crosshair"
                    data-id="{{$key}}">
                    <svg class="fi-icon-btn-icon h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M2 6.75A.75.75 0 012.75 6h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 6.75zm0 6.5a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z" clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-sm">
                        {{$item}}
                    </p>
                </div>
            @endforeach
        </div>
        {{-- <input type="hidden" wire:model.defer="{{ $getStatePath() }}" id="{{ $getStatePath() }}"> --}}
    </div>
</x-dynamic-component>

@php
    $entries = is_string($getState()) ? json_decode($getState(), true) : $getState();
@endphp
<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <div class="w-full border rounded-lg dark:border-gray-700">
        @if ($entries)
            @foreach ($entries as $item)
                <div class="border-b dark:border-gray-700 p-2">
                    <p>{{ $loop->iteration }}.{{ $item }}</p>
                </div>
            @endforeach
        @endif
    </div>
</x-dynamic-component>

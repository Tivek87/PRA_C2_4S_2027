<x-layouts.app>

    <x-slot:breadcrumb>
        <li><a href="/{{ $letter }}">Merken met letter {{ $letter }}</a></li>
    </x-slot:breadcrumb>

    <h1>Merken die beginnen met een {{ $letter }}</h1>

    <div class="letter-menu my-3">
        <p class="mb-1"><strong>Kies een letter:</strong></p>
        <p>
            @foreach(range('A', 'Z') as $l)
                <a href="/{{ $l }}" style="{{ $l === $letter ? 'font-size: 1.25rem; font-weight: bold; color: #007bff;' : '' }}">{{ $l }}</a>@if(!$loop->last) - @endif
            @endforeach
        </p>
    </div>

    <div class="brands-container">
        @if ($brands->count() > 0)
            <div class="row">
                @foreach ($brands as $brand)
                    <div class="col-md-4 mb-2">
                        <a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/">
                            {{ $brand->name }}
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p>Er zijn geen merken gevonden die beginnen met de letter {{ $letter }}.</p>
        @endif
    </div>

</x-layouts.app>


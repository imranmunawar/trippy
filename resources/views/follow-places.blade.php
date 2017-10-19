<ul>
    @foreach ($locations as $loc)
    <li>
        <a>{{ $loc->city }} ({{ $loc->country }})</a>
        <span class="pull-right delete-location" style="cursor: pointer;" data-content="{{ $loc->id }}">x</span>
    </li>
    @endforeach
</ul>
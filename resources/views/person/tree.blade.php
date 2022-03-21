<ul class="tree">
    <li class="whitespace-nowrap"><a
            href='{{ route('person.create', ['father' => $person->id]) }}'>{{ $person->name }}</a>
        <div class="expander"></div>
        <ul>
            @foreach ($person->children as $child)
                <li><a
                        href='{{ route('person.create', ['father' => $child->id]) }}'>{{ $child->name }}</a>
                    @if(count($child->children))
                        <div class="expander"></div>
                        <ul>@include('person.subTree',['children' => $child->children])</ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </li>
</ul>

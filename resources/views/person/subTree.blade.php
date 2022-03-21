@foreach($children as $child)
    <li class="whitespace-nowrap">
        <a
            href='{{ route('person.create', ['father' => $child->id]) }}'>{{ $child->name }}</a>
        @if(count($child->children))
            <div class="expander"></div>
            <ul>@include('person.subTree',['children' => $child->children])</ul>
        @endif
    </li>
@endforeach

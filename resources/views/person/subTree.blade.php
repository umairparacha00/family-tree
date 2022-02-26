@foreach($children as $child)
    <li>
        {{ $child->name }}
        @if(count($child->children))
            <div class=expander></div>
            <ul>@include('person.subTree',['children' => $child->children])</ul>
        @endif
    </li>
@endforeach

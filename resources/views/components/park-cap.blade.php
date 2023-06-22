@props(['tagsCsv'])

@php
$caps = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @foreach($caps as $cap)
    <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
        <a href="/?cap={{$cap}}">{{$cap}}</a>
    </li>
    @endforeach
</ul>
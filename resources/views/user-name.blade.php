NEW VIEW. WOOOOU!

<br>

@if($name)
    Name: {{ $name }}
@else
    Name not found
@endif

<br><br>

<ul>
    @foreach($fakeData as $item)
       <li>
           Lesson: {{ $item['lesson'] }};
           Level: {{ $item['level'] }}
       </li>
    @endforeach
</ul>

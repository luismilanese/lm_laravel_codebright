<h1>Dear Lord Otwell</h1>
<p>I hereby challenge you to a duel for the honour of Laravel.</p>
<p>{{ $msg }} on {{ date('d/m/y') }}</p>

<hr />

<p>{{{ '<script>alert("Chuncky bacon!");</script>' }}}</p>

<hr />

@if ($something == 'Red Panda')
    <p>Something is red, white, and brown!</p>
@elseif ($something == 'Giant Panda')
    <p>Something is black and white!</p>
@else
    <p>Something could be a squirrel</p>
@endif

<hr />

<ul>
    @foreach ($animals as $animal)
        <li> {{{ $animal }}} </li>
    @endforeach
</ul>

<hr />

@for ($i = 0; $i < 20; $i++)
    @if ($i % 2 == 0)
        <p><strong>Even {{ $i }} red pandas, aren't enough.</strong></p>
    @else
        <p>Odd {{ $i }} red pandas, aren't enough.</p>
    @endif
@endfor
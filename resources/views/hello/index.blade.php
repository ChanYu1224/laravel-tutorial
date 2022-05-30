<html>
<head>
    <title>Hello</title>
    <style>
        body { font-size:16pt; color:#999; }
        h1 { font-size:30pt; text-align:right; color:#eee; margin: -15px 0px 0px 0px; }
    </style>
</head>
<body>
    <h1>Blade/Index</h1>
    <ol>
    @for ($i = 1; $i < 100; $i++)
        @if($i % 2 == 0)
            @continue
        @elseif($i <= 10)
            <li>No. {{$i}}
        @else
            @break
        @endif
    @endfor
    </ol>
</body>
</html>
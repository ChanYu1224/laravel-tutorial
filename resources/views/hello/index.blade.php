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
    @php
        $counter = 0;
    @endphp
    <ol>
    @while ($counter < count($data))
        <li>{{$data[$counter]}}</li>
        @php
            $counter++;
        @endphp
    @endwhile
    </ol>
</body>
</html>
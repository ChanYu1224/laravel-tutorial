<html>
<head>
    <title>Hello</title>
    <style>
        body { font-size:16pt; color:#999; }
        h1 { font-size:30pt; text-align:right; color:#eee; margin: -15px 0px 0px 0px; }
    </style>
</head>
<body>
    <h1>Index</h1>
    <p>{{$msg}}</p>
    <form action="/hello" method="POST">
        @csrf
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body>
</html>
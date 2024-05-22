<!DOCTYPE html>
<html>
<head>
    <title>Advanced Websocket Data Manage</title>
</head>
<body>
<div id="app">
    <h1>Random Data Generated Automatically In Console Every Second</h1>
</div>

<script src="{{ mix('js/app.js') }}"></script>

<script>
    Echo.channel('random-data-generated')
        .listen('WebSocketRandomDataGenerated', (e) => {
            document.getElementById('column_a').innerText = e.data.column_a;
            document.getElementById('column_b').innerText = e.data.column_b;
            document.getElementById('column_c').innerText = e.data.column_c;
        });
</script>

<script>

    setInterval(() => {
        fetch('/random-data')
            .then(response => response.json())
            .then(data => {
                console.log('Random data generated:', data);
            });
    }, 1000);
</script>

</body>
</html>



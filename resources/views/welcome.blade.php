<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Socket Project</title>
</head>
<body>

{{\Illuminate\Support\Facades\Auth::id()}}

@vite('resources/js/app.js')
<script>
    // for normal channe;
    // setTimeout(() => {
    //     window.Echo.channel('testChannel').listen('TestEvent', (e) => {
    //         console.log(e)
    //     });
    // }, 200);

    //for private channel
    setTimeout(() => {
        window.Echo.private('privateChannel.user.{{\Illuminate\Support\Facades\Auth::id()}}').listen('PrivateEvent', (e) => {
            console.log(e)
        });
    }, 200);
</script>
</body>
</html>

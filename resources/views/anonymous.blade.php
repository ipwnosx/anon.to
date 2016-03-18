<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1; url={{ $url }}" name="url">
    <title>Redirecting to {{ $url }}</title>
    <style>
        html{margin:0;padding:0;width:100%;height:100%;}body{margin:0;padding:0;width:100%;height:100%;color:#B0BEC5;display:table;font-weight:100;font-family:Menlo,Monaco,Consolas,"Courier New",monospace}.container{text-align:center;display:table-cell;vertical-align:middle}.content{text-align:center;font-size:18px;display:inline-block}.content a{color:#5bc0de;text-decoration:none}
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <h1>Redirecting to <a href="{{ $url }}" title="{{ $url }}" rel="noreferrer nofollow">{{ \Illuminate\Support\Str::limit($url,32) }}</a>
        </h1>
    </div>
</div>

<script>
    (function(){
        if(window.location.hash) {
            document.getElementsByName('url')[0].setAttribute('content', '0; url={{ $url }}' + window.location.hash);
        }
    })();
</script>

</body>
</html>
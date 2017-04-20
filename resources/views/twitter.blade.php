<!DOCTYPE html>
<html>
    <head>
        <title>Timeline - Twitter</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="css/app.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1 id="timeline">@ {{ $name }}</h1>
            </div>
            <ul class="timeline">
                @foreach($data as $key => $value)
                <li>
                    <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> {{ $value['created_at'] }}</small></p>
                        </div>
                        <div class="timeline-body">
                            <p>{{ $value['text'] }}</p>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </body>
</html>

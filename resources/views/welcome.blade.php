<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h2>This is a completely dummy page. If you see Jane Doe below though, you did everything right!</h2>

                <h3>Tourists:</h3>
                @foreach (App\User::all() as $user)
                    <p>ID: {{ $user->_id }} </p>
                    <p>Name: {{ $user->name }}</p>
                    <p>Email: {{ $user->email }}</p>
                @endforeach
            </div>
        </div>
    </body>
</html>

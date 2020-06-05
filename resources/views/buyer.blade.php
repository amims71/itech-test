<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Itech Test</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 600;
            height: 100vh;
            margin: 0;
            padding: 10px;
        }
        table{
            margin-left: 45px;
        }

        td{
            border: 1px solid #eee;
            padding: 3px;
            text-align: center;
        }
        code{
            color: #007b00;
        }
        a{
            color: red;
        }
    </style>
</head>
<body>
    <div class="content">

        <table>
            <tr><td>Buyer id</th><td>Buyer Name</th><td>Total Diary Taken</th><td>Total Pen Taken</th><td>Total Eraser Taken</th><td>Total items Taken</th></tr>

                <tr><td>{{$buyer->id}}</td><td>{{$buyer->name}}</td><td>{{$buyer->total_diary_taken}}</td>
                    <td>{{$buyer->total_pen_taken}}</td><td>{{$buyer->total_eraser_taken}}</td><td>{{$buyer->total_item_taken}}</td></tr>

        </table>

    </div>
</body>
</html>

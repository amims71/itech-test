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
        <h1 class="m-b-md" style="font-size: 40px">Let's have some coffee...</h1>
<pre>

var arrayToMap = [
  {firstname : "First1", lastname: "Last1"},
  {firstname : "First2", lastname: "Last2"},
  {firstname : "First3", lastname: "Last3"}
];

var mapedArray = arrayToMap.map(item=>{
    var fullname = [item.firstname,item.lastname].join(" ");
    return fullname;
});
console.log(mapedArray)

        </pre>
        <h1 class="m-b-md" style="font-size: 40px">Its done!!</h1>
        <br/><br/>
        <br/><br/>
    </div>
</body>
</html>

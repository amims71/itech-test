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

var arrayToFilter = [
	{name: "Some Name", email: "example@example.com", age: 22, salary: 10000},
	{name: "Some Name", email: "example1@example.com", age: 19, salary: 15000},
	{name: "Some Name", email: "example2@example.com", age: 35, salary: 23000}
];


var filteredArray = arrayToFilter.filter(item => {
	return item.age <= 30
})

console.log(filteredArray)
        </pre>
        <h1 class="m-b-md" style="font-size: 40px">Its done!!</h1>
        <br/><br/>
        <br/><br/>
    </div>
</body>
</html>

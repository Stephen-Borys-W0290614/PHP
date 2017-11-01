<!DOCTYPE html>

<html>

<head>

    <title></title>


</head>

<body>

<h1>Hello, <?= $name ?></h1>
<ul>

    @foreach ($tasks as $task)

        <li>
            <a href="/tasks/{{ $task->id }}">

                {{ $task->body }}

            </a>

        </li>
    @endforeach



    <h1>Hello World</h1>

</ul>
</body>




</html>
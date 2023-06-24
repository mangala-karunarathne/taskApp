<!DOCTYPE html>
<html>
<head>
    <title>Task App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        div.task {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        h3 {
            margin-top: 0;
        }

        p {
            margin-bottom: 10px;
        }

        a.edit-link {
            color: blue;
            text-decoration: none;
            margin-right: 10px;
        }

        button.delete-button {
            background-color: #ff4444;
            color: #fff;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            border-radius: 3px;
        }

        hr {
            border: none;
            border-top: 1px solid #ccc;
            margin: 20px 0;
        }

        a.create-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Task List</h1>

    @foreach ($tasks as $task)
        <div class="task">
            <h3>{{ $task->title }}</h3>
            <p>{{ $task->description }}</p>

            <a class="edit-link" href="{{ route('tasks.edit', $task->id) }}">Edit</a>

            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="delete-button" type="submit">Delete</button>
            </form>
        </div>
        <hr>
    @endforeach

    <a class="create-link" href="{{ route('tasks.create') }}">Create New Task</a>
</body>
</html>

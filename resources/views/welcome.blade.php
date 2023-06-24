<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Task App</title>
    <style>
        .container {
            text-align: center;
            margin-top: 200px;
        }

        .create-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Task App</h1>

        <a href="{{ route('tasks.create') }}" class="create-button">Create Task</a>
    </div>
</body>
</html>

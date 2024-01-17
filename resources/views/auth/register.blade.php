<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <form action="{{route('auth.store')}}" method="post">
        @csrf
        @method('post')
        <div class="mx-auto mt-40 w-1/6 h-full flex flex-col">
                   
                    <h1 class="text-lg ">Register Form</h1>
                    <input type="text" name="name" id="" class="border-lg border-gray-500 ring-2 ring-gray-500 focus:outline-gray-500 my-4 h-10 rounded shadow-2xl text-center" placeholder="Name">
                    <input type="email" name="email" id="" class="border-lg border-gray-500 ring-2 ring-gray-500 focus:outline-gray-500 my-4 h-10 rounded shadow-2xl text-center" placeholder="Email">
                    <input type="password" name="password" id="" class="border-lg border-gray-500 ring-2 ring-gray-500 focus:outline-gray-500 my-4 h-10 rounded shadow-2xl text-center" placeholder="Password">
                    <button type="submit" class="bg-gray-500 rounded h-10 hover:bg-gray-600">Register</button>
        </div>
    </form>
</body>
</html>
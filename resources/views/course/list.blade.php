<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Many To Many</title>
</head>
<body>
    <div class="w-full flex flex-rows">
        <div class="w-1/12 h-24 border m-4 text-center leading-7">
            <h1>English</h1>
            <p>Monday to Firthday</p>
            <div>
                <form action="" method="post">
                    <button type="submit" class="bg-gray-400 rounded px-1 text-sm hover:bg-gray-600">Enroll</button>
                </form>
            </div>
        </div>
        <div class="w-1/12 h-24 border m-4 text-center leading-7">
            <h1>English</h1>
            <p>Monday to Firthday</p>
            <div>
                <form action="" method="post">
                    @csrf
                    @method('post')
                    <button type="submit" class="bg-gray-400 rounded px-1 text-sm hover:bg-gray-600">Enroll</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
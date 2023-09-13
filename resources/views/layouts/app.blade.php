<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devstagram @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>

    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between
            items-center">
                <h1 class="text-3xl font-black">
                    <a href="{{ route('home') }}"> Devstagram </a>
                </h1>

                <nav class="flex gap-2 items-center">
                    <a class="font-bold uppercase text-gray-600 text-sm " href="#">Login</a>
                    <a class="font-bold uppercase text-gray-600 text-sm " href="{{ route('register-account') }}">Crear
                        Cuenta</a>
                </nav>

            </div>
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('title')
            </h2>
            @yield('content')
        </main>

        <footer class=" m-10 text-center p5  text-gray-500 font-bold uppercase">
            Devstagram - Todos los derechos reservados {{ now()->year }}
        </footer>

    </body>

</body>

</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TKD Servers</title>
    <link rel="stylesheet" href="/css/main.css">
    @livewireStyles
</head>
<body class="bg-gray-900 text-white">
<header class="border-b border-gray-800">
    <nav class="container mx-auto flex items-center justify-between px-4 py-6">
        <div class="flex items-center">
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="204.7" height="49.3" overflow="visible"><style>.st0{fill:#fff}</style><path class="st0" d="M0 0h19.1v4.8h-6.7v17.5H6.6V4.8H0V0zm34.6 16.5c.8.8 1.9 1.3 3.2 1.3 1.3 0 2.3-.4 3-1.3.8-.8 1.2-2 1.2-3.4V0h5.8v13.1c0 1.9-.4 3.6-1.2 5.1-.8 1.5-2 2.6-3.5 3.4-1.5.8-3.3 1.2-5.3 1.2s-3.8-.4-5.4-1.2c-1.5-.8-2.7-1.9-3.6-3.4-.8-1.5-1.3-3.1-1.3-5.1V0h5.8v13.1c0 1.4.4 2.5 1.3 3.4zm36.9 5.8l-3.2-6.2H64v6.2h-5.8V0h10c3 0 5.2.7 6.9 2.1s2.4 3.3 2.4 5.8c0 1.7-.3 3.1-1 4.3-.7 1.2-1.7 2.2-3 2.9l4.6 7.3h-6.6zm-7.6-10.8h4.2c1.2 0 2.1-.3 2.8-.9.6-.6 1-1.5 1-2.6s-.3-1.9-1-2.5c-.6-.6-1.6-.9-2.8-.9h-4.2v6.9zM102.8 0h5.4v22.3h-5.1L93 9v13.3h-5.4V0h5.1l10.2 13.4-.1-13.4zm37.6 22.3h-7l-5.9-8.7-2.8 3.1v5.5h-5.8V0h5.8v9.7l8.4-9.7h6.8l-8.3 9.2 8.8 13.1zM149.1 0h17.6v4.6H155v4.2h10.6v4.6H155v4.2h12.1v4.6h-17.9V0zm47.7 0l-8.1 15.2v7.1h-5.8v-7L174.7 0h5.8l5.3 9.6L191 0h5.8zM61.4 38.7c.9.5 1.6 1.1 2.1 1.9.5.8.7 1.8.7 2.9 0 1.1-.2 2-.7 2.9-.5.8-1.2 1.5-2.1 1.9-.9.5-1.9.7-3.1.7h-4.6V38h4.7c1 .1 2.1.3 3 .7zm-1.5 7.6c.4-.3.8-.6 1-1.1.2-.5.4-1 .4-1.6 0-.6-.1-1.2-.4-1.7s-.6-.9-1.1-1.1c-.5-.3-1-.4-1.5-.4h-1.8v6.3h1.9c.5 0 1-.1 1.5-.4zm10.4-8.2h2.9v11h-2.9v-11zm17 5.3h2.5v4.4c-.6.4-1.3.8-2.2 1-.9.3-1.7.4-2.4.4-1.1 0-2.1-.2-3-.7-.9-.5-1.6-1.2-2.1-2-.5-.9-.8-1.8-.8-2.9 0-1.1.3-2 .8-2.9.5-.9 1.3-1.5 2.2-2 .9-.5 2-.7 3.1-.7.8 0 1.6.2 2.4.4.8.3 1.5.7 2.1 1.2l-1.6 2c-.4-.4-.9-.7-1.4-.9-.5-.2-1-.3-1.5-.3-.6 0-1.1.1-1.6.4-.5.3-.8.7-1.1 1.2-.3.5-.4 1-.4 1.6 0 .6.1 1.2.4 1.7.3.5.6.9 1.1 1.2.5.3 1 .4 1.6.4.6 0 1.2-.2 1.9-.5v-3zm9.1-5.3h2.9v11h-2.9v-11zm8.7 0h9.4v2.4h-3.3v8.6h-2.9v-8.6H105v-2.4zm22.3 11l-.8-1.9h-4.8l-.8 1.9h-3l4.7-11h3l4.6 11h-2.9zm-4.7-4.2h3l-1.5-3.9-1.5 3.9zm13.4-6.8h2.9v8.6h4.7v2.4h-7.5v-11zM198.8 0h2.3v.4h-.9V3h-.5V.4h-.9V0zm2.7 0h.6l1 2 1-2h.6v3h-.5V.7l-.9 2h-.3l-.9-2V3h-.5V0z"/></svg>
            </a>
            <ul class="flex ml-16 space-x-8">
                <li><a href="/nova/resources/domains/new" class="hover:text-gray-400">New Domain</a></li>
                <li><a href="/nova/resources/servers/new" class="hover:text-gray-400">New Server</a></li>
            </ul>
        </div>
        <div class="flex items-center">
            <div class="ml-6">
                <a href="/nova"><img src="{{ gravatar('$auth->user->email') }}" alt="avatar" class="rounded-full w-8"></a>
            </div>
        </div>
    </nav>
</header>

<div class="container mx-auto">
    @yield('content')
</div>
@livewireScripts
</body>
</html>

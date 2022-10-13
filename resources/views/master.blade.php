<html>

<head>
    
    <title>Master page</title>
    @livewireStyles
    @vite(['resources/css/app.scss'])
</head>

<body>
    
    {{ $slot  }}
    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>

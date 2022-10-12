<html>

<head>
    
    <title>Master page</title>
    <!--<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">-->
    @livewireStyles
    @vite(['resources/css/app.scss', 'node_modules/font-awesome/scss/font-awesome.scss'])
</head>

<body>
    
    {{ $slot  }}
    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>

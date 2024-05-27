<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminatan SMK 4</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @livewireStyles
</head>

<body>

    <div class="">
        {{ $slot }}
    </div>

    @livewireScriptConfig
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#EDE6E0]">

    <header class="text-[Montserrat] z-10 border-b border-b-[#3d3d3d] bg-[#EDE6E0] fixed w-full">
        <h2 class="logo cursor-pointer text-center ">Alabaster & Ochre</h2>
    </header>
    <div>
         {{$slot}}
    </div>
   
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

    <h1 class="justify-center my-5 text-center text-3xl">Vista INICIO LARAVEL</h1>

    <ul class="flex flex-row m-auto my-6">
        <li class="my-1.5 mx-3.5 text-xl">
            <a href="">Dispositivos generales</a>
        </li>

        <li class="my-1.5 mx-3.5 text-xl">
            <a href="">Mantenimientos</a>
        </li>

        <li class="my-1.5 mx-3.5 text-xl">
            <a href="{{ route('planoDepa.index') }}">Plano departamentos</a>
        </li>

        <li class="my-1.5 mx-3.5 text-xl">
            <a href="">Ver todo</a>
        </li>
    </ul>

    <!-- JavaScrip -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/output.css">
    <script src="https://kit.fontawesome.com/e706368421.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body class="bg-honeydew">

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>

    <div class="bg-berkeley_blue sm:rounded-none md:rounded-3xl mx-auto h-auto sm:h-screen md:h-auto" style="width: 500px;">
    <img src="images/undraw_pair_programming.svg" class="w-60  mx-auto py-2 lg:py-6" alt="">
        <div class="px-8">
            <p class="text-white text-2xl font-semibold block text-center my-6">Inicio de sesión</p>
            <p class="text-white text-center">Por favor inicie sesión para continuar.</p>
        </div>

        <form method="POST" action="" id="formLogin">
            <div class="flex flex-col items-center my-6">
                <div class="flex flex-col w-11/12">
                    <label for="email" class="text-berkeley_blue text-sm px-2">Correo</label>
                    <div class="flex flex-row items-center bg-honeydew p-2 my-2 rounded-2xl space-x-4">
                        <i class="fa-solid fa-envelope text-berkeley_blue text-lg ml-4"></i>
                        <input type="text" name="email" id="email" class="flex-1 focus:outline-none focus:font-semibold bg-honeydew h-12 ml-2 text-berkeley_blue"  placeholder="example@mail.com" autocomplete="off" title="ingrese un correo">
                    </div>
                </div>
                <div class="flex flex-col w-11/12">
                    <label for="password" class="text-berkeley_blue text-sm px-2">Contraseña</label>
                    <div class="flex flex-row items-center bg-honeydew p-2 my-2 rounded-2xl space-x-4">
                        <i class="fa-solid fa-lock text-berkeley_blue text-lg ml-4"></i>
                        <input type="password" name="password" id="password" class="flex-1 focus:outline-none bg-honeydew h-12 ml-2 text-berkeley_blue" placeholder="*****">
                    </div>
                </div>

                <div class="text-red-700 my-2 text-right errores">

                </div>

            </div>

            <div class="flex flex-col items-center space-y-2 p-3">
                <button class="text-lg font-semibold rounded-3xl bg-red_pantone text-white p-2" style="width: 200px; height: 50px;" type="submit">LOGIN</button>
                <span class="text-slate-500 sm:pt-2 md:pt-2 lg:pt-10">¿Desarrollador? <a href="" class="text-white font-bold">Ingrese aquí</a></span>
            </div>
        </form>
    </div>
</body>

</html>
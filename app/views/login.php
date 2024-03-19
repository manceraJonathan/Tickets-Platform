<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <link rel="stylesheet" href="../../public/css/output.css" />
    <script src="https://kit.fontawesome.com/e706368421.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Inicio de sesión</title>
</head>

<body class="bg-gradient-to-r from-[#201A30] to-[#0DD0C4]">

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>

    <div class="bg-[#201A30] sm:rounded-none md:rounded-3xl mx-auto h-auto sm:h-screen md:h-auto" style="width: 500px;">
        <img src="../../public/images/undraw_pair_programming.svg" class="w-60  mx-auto py-2 lg:py-6" alt="">
        <div class="px-8">
            <span class="text-white text-2xl font-semibold block">Iniciar sesión</span>
            <span class="text-slate-500 block">Por favor ingresa tus datos para continuar.</span>
        </div>

        <form method="POST" id="formLogin" action="../controllers/loginController.php">
            <div class="flex flex-col items-center my-6">
                <div class="flex flex-col w-11/12">
                    <label for="email" class="text-gray-500 text-sm px-2">CORREO</label>
                    <div class="flex flex-row items-center bg-[#38304C] p-2 my-2 rounded-lg space-x-4">
                        <i class="fa-solid fa-envelope text-white text-lg ml-4"></i>
                        <input type="email" name="correo" id="correo"
                            class="flex-1 focus:outline-none focus:font-semibold bg-[#38304C] border-0 h-12 ml-2 text-white"
                            value="" placeholder="example@mail.com" autocomplete="off"
                            title="ingrese un correo" require>
                    </div>
                </div>
                <div class="flex flex-col w-11/12">
                    <label for="password" class="text-gray-500 text-sm px-2">CONTRASEÑA</label>
                    <div class="flex flex-row items-center bg-[#38304C] p-2 my-2 rounded-lg space-x-4">
                        <i class="fa-solid fa-lock text-white text-lg ml-4"></i>
                        <input type="password" name="contrasena" id="contrasena"
                            class="flex-1 focus:outline-none bg-[#38304C] border-0 h-12 ml-2 text-white" placeholder="*****" require>
                    </div>
                </div>

                <div class="text-red-700 my-2 text-right errores">

                </div>

            </div>

            <div class="flex flex-col items-center space-y-2 p-3">
                <button class="text-lg font-semibold rounded-3xl bg-[#0DF5E3] p-2" style="width: 200px; height: 50px;"
                    type="submit">Ingresar</button>
                <!-- <a class="text-[#0DD0C4]" href="">Forgot Password?</a> -->
            </div>
        </form>
    </div>
</body>
<script>
    const form = document.getElementById('formLogin')
    const email = document.getElementById('email')
    const password = document.getElementById('password')
    const errores = document.querySelector('.errores')

    email.addEventListener('keydown', (event) => {
        const error = errores.querySelector('span')
        if (this.value != '' && error != null) {
            errores.removeChild(error)
        }
    })

    /* form.addEventListener('submit', (event) => {
        event.preventDefault();

        if (email.value == '' || password.value == '') {
            if (!errores.querySelector('span')) {
                let sp = document.createElement('span');
                sp.innerHTML = 'Todos los campos son necesarios';
                errores.appendChild(sp)
            }
        } else {
            const data = JSON.stringify({
                email: email.value,
                password: password.value
            })
            fetch('http://127.0.0.1:8000/api/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: data

                })
                .then(response => response.json())
                .then(data => {
                    if (data.status == "success") {
                        form.submit()
                    } else {
                        if (!errores.querySelector('span')) {
                            let sp = document.createElement('span');
                            sp.innerHTML = data.message;
                            errores.appendChild(sp)
                        }
                    }
                })

        }
    }) */
</script>

</html>

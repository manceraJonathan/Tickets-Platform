<?php
session_start();
include('../models/perfilModel.php');
require('layout.php');

html_head('usuarios');
aside_header();
?>
<div class="w-4/5 mx-auto my-4 text-md p-4">
    <section class="font-[Poppins]">
        <h1 class="text-2xl border-l-8 pl-4 border-red_pantone">CREAR NUEVO USUARIO</h1>
<form id="crearusu">
        <div class="my-4">
            <label for="nombre" class="block text-lg my-2"> <i class="fa-solid fa-angle-down"></i>NOMBRE</label>
            <input type="text" name="nombre" id="nombre" class="border border-berkeley_blue rounded-lg pl-4 w-full text-lg" require>
        </div>
        <div class="my-4">
            <label for="apellidos" class="block text-lg my-2"> <i class="fa-solid fa-angle-down"></i>APELLIOS</label>
            <input type="text" name="apellidos" id="apellidos" class="border border-berkeley_blue rounded-lg pl-4 w-full text-lg" require>
        </div>
        <div class="my-4">
            <label for="correo" class="block text-lg my-2"> <i class="fa-solid fa-angle-down"></i>CORREO</label>
            <input type="email" name="correo" id="correo" class="border border-berkeley_blue rounded-lg pl-4 w-full text-lg" require>
        </div>
        <div class="my-4">
            <label for="contrasena" class="block text-lg my-2"> <i class="fa-solid fa-angle-down"></i>CONTRASEÑA</label>
            <input type="password" name="contrasena" id="contrasena" class="border border-berkeley_blue rounded-lg pl-4 w-full text-lg" require>
        </div>
        <div class="my-4">
            <label for="telefono" class="block text-lg my-2"> <i class="fa-solid fa-angle-down"></i>TELEFONO</label>
            <input type="number" name="telefono" id="telefono" class="border border-berkeley_blue rounded-lg pl-4 w-full text-lg" require>
        </div>
        <div class="my-4">
            <label for="cargo" class="block text-lg my-2"> <i class="fa-solid fa-angle-down"></i>CARGO</label>
            <input type="text" name="cargo" id="cargo" class="border border-berkeley_blue rounded-lg pl-4 w-full text-lg" require>
        </div>
        <div class="flex pt-4 space-x-6 items-center">

            <!-- DropDowns -->
            <div class="">
                
                <select class="bg-berkeley_blue text-white py-1 px-4 rounded-lg border border-cerulean" id="perfil" require>
                    <option value="" disabled selected hidden>Perfil</option>
                    <?php
                    $result = obtener();
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo  "<option class='bg-white  text-berkeley_blue' value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                        }
                    } else {
                        echo "<option value=''>No hay perfiles disponibles</option>";
                    }
                    ?>
                </select>
            </div>
     
            <div class="">
                
                <select class="bg-berkeley_blue text-white py-1 px-4 rounded-lg border border-cerulean" id="estado" require>
                    <option value="" disabled selected hidden>Estado</option>
                    <option value="1" class="bg-white  text-berkeley_blue">ACTIVO</option>
                    <option value="0" class="bg-white  text-berkeley_blue">INACTIVO</option>
                </select>
            </div>


        <div class="flex justify-end space-x-6 " style="padding-left: 277px;">
            <button class="bg-berkeley_blue text-white py-1 px-4 rounded-lg border border-cerulean">Cancelar</button>
            <button class="bg-berkeley_blue text-white py-1 px-4 rounded-lg border border-cerulean">Crear</button>
        </div>
        </form>
    </section>
</div>


<?php endLayout() ?>

<script>
    $(document).ready(function(){
        $("#crearusu").on('submit', function(event) {
            event.preventDefault();

            /* Ajax  */
            const data = {
                nombre: $("#nombre").val(),
                apellidos: $("#apellidos").val(),
                cargo: $("#cargo").val(),
                contrasena: $("#contrasena").val(),
                correo:  $("#correo").val(),
                telefono:  $("#telefono").val(),
                perfil: $("#perfil").val(),
                estado: $("#estado").val()
            };

            $.ajax({
                url: "../controllers/usuarioController.php",
                method: 'POST',
                data: data,
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    if (res.estado == 1) {
                        Swal.fire({
                            title: "USUARIO GENERADO",
                            text: "Se ha generado correctamente el USUARIO!",
                            icon: "success"
                        });
                        // Actualizar la tabla u otra lógica aquí
                    } else {
                        Swal.fire({
                            text: "Error al insertar en la base de datos",
                            icon: "error"
                        });
                        console.log(res.error); // Mostrar el error en la consola
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        text: "Error en la solicitud AJAX",
                        icon: "error"
                    });
                    console.log(error); // Mostrar el error en la consola
                }
            });
        })
    })
</script>
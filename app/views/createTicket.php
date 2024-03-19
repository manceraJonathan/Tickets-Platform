<?php
session_start();
include('layout.php');
include('../models/perfilModel.php');

html_head('Nuevo Ticket');
aside_header();
?>

<div class="w-4/5 mx-auto my-4 text-md p-4">
    <section class="font-[Poppins]">
        <h1 class="text-2xl border-l-8 pl-4 border-red_pantone">CREAR TICKET</h1>
            <form action="" id="formTicket">
        <div class="my-4">
            <label for="asunto" class="block text-lg my-2"> <i class="fa-solid fa-angle-down"></i> ASUNTO</label>
            <input type="text" name="asunto" id="asunto" class="border border-berkeley_blue rounded-lg pl-4 w-full text-lg">
        </div>

        <div class="wrap pt-4 space-y-6 items-center">

            <!-- DropDowns -->
        <div  class="flex  "> 
            <div class="static" style="margin-right: 4px;"> 
                <select class="bg-berkeley_blue text-white py-1 px-4 rounded-lg border border-cerulean "name="prioridad" id="prioridad" require>
                    <option value="" disabled selected hidden>Prioridad</option>
                    <?php
                    $result = obtenerPrioridad();
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

            <div style="margin-right: 4px;">
                <select class="bg-berkeley_blue text-white py-1 px-4 rounded-lg border border-cerulean" id="requerimiento" require>
                    <option value="" disabled selected hidden>Requerimiento</option>
                    <?php
                    $result = obtenerRequerimiento();
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
            <div style="margin-right: 4px;">
                <select class="bg-berkeley_blue text-white py-1 px-4 rounded-lg border border-cerulean" id="app" require>
                    <option value="" disabled selected hidden>Aplicativo</option>
                    <?php
                    $result = obtenerApp();
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
        </div>
        <!-- Quill Editor -->
        <div class="mt-5 text-lg">
            <p class="my-4 border-l-4 border-berkeley_blue pl-4">DESCRIPCIÓN</p>
            <div id="descripcion" class="">
                
            </div>
        </div>

        <!-- File input -->
        <div class="flex items-center justify-center w-full mt-6">
            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-40 border-2 border-berkeley_blue border-dashed rounded-lg cursor-pointer bg-gray-50   hover:bg-gray-100 ">
                <div class="flex flex-col items-center justify-center pt-5 pb-6" >
                    <svg class="w-8 h-8 mb-4 text-berkeley_blue " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                    </svg>
                    <p class="mb-2 text-sm text-berkeley_blue "><span  class="font-semibold">Clic para cargar</span> o arrastrar y soltar</p>
                    <p class="text-xs text-berkeley_blue ">PNG, JPG (MAX. 5 M.B.)</p>
                </div>
                <input id="dropzone-file" type="file" class="hidden"  id="imagen"/>

            </label>

        </div>
        <input type="file" name="imagen">
        <div class="flex justify-end space-x-6 pt-6">
            <button class="bg-berkeley_blue text-white py-1 px-4 rounded-lg border border-cerulean">Cancelar</button>
            <button class="bg-berkeley_blue text-white py-1 px-4 rounded-lg border border-cerulean" id="btn-crear">Crear</button>
        </div>
        </form>
    </section>
</div>


<?php endLayout() ?>
<script>
  const quill = new Quill('#descripcion', {
    theme: 'snow'
  });
     
  $("#formTicket").on("submit", function(event){
    event.preventDefault();
    var formulario = document.getElementById("formTicket");   
    var formData = new FormData(formulario);  
    fetch('../models/ticketModel.php', {
    method: 'POST',
    body: formData
})
.then(response => {
    return response.json();
})
.then(response => {
    console.log(response);
})
.catch(error => {
    console.error('Error:', error);
})
});
 
    
    

 
</script>


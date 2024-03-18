<?php function html_head($title) { ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/e706368421.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../../public/css/layout.css" />
    <link rel="stylesheet" href="../../public/css/output.css" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css" rel="stylesheet" />

    <title> <?php echo 'Aquiles | '. $title ?> </title>
  </head>
  <?php } ?>

<?php function aside_header() { ?>

  <body class="bg-[#F1FAEE]">
    
    <div class="content">
      <aside
        class="h-full bg-berkeley_blue w-[260px] border-r-[1px] border-[#1D3557]"
      >
        <div class="flex space-x-4 p-4">
          <div
            class="w-10 h-10 bg-white rounded-md flex items-center justify-center relative"
          >
            <span class="text-[21px] font-bold">D</span>
          </div>
          <div class="flex flex-col">
            <span class="text-white">Desarrollador Junior</span>
            <span class="text-white text-sm">City Drones</span>
          </div>
        </div>
        <div class="text-secondary text-sm mt-6">
          <div class="hover:bg-[#F1FAEE] p-2 text-white hover:text-berkeley_blue">
            <a href="dashboard.php">
              <i class="fa-solid ps-2 pe-4 fa-house "></i>Página
              Principal</a
            >
          </div>
          <div class="hover:bg-[#F1FAEE] p-2 text-white hover:text-berkeley_blue">
            <a href="tickets.php">
              <i class="fa-solid ps-2 pe-4 fa-receipt "></i>Tickets</a
            >
          </div>
          <div class="hover:bg-[#F1FAEE] p-2 text-white hover:text-berkeley_blue">
            <a href="createTicket.php">
              <i class="fa-solid ps-2 pe-4 fa-plus"></i>Nuevo Ticket</a
            >
          </div>
          <div class="hover:bg-[#F1FAEE] p-2 text-white hover:text-berkeley_blue ">
            <a href="#" class="">
              <i class="fa-solid ps-2 pe-4 fa-table-list"></i
              >Registrar Actividad</a
            >
          </div>
        </div>
        <!-- Administración -->
        <div class="text-secondary text-sm">
          <span class="p-2 block font-bold text-white">Administración</span>
          <div class="hover:bg-[#F1FAEE] p-2 text-white hover:text-berkeley_blue">
            <a href="#">
              <i class="fa-solid ps-2 pe-4 fa-user"></i>Usuarios
            </a>
          </div>
          <div class="hover:bg-[#F1FAEE] p-2 text-white hover:text-berkeley_blue">
            <a href="#">
              <i class="fa-solid ps-2 pe-4 fa-user-gear"></i>Desarrolladores
            </a>
          </div>
          <div class="hover:bg-[#F1FAEE] p-2 text-white hover:text-berkeley_blue">
            <a href="#">
              <i class="fa-solid ps-2 pe-4 fa-layer-group"></i>Plataformas</a
            >
          </div>
          <div class="hover:bg-[#F1FAEE] p-2 text-white hover:text-berkeley_blue">
            <a href="#">
              <i class="fa-solid ps-2 pe-4 fa-table-cells"></i>Categorías</a
            >
          </div>
        </div>
      </aside>

      <div id="wrapper">
        <header>
          <nav class="bg-[#F1FAEE] border-b-[1px] border-[#1d3557]">
            <div class="flex justify-between">
              <div class="p-2">
              </div>

              <div class="flex space-x-4 items-center">
                <button
                  id="notification"
                  class="w-8 h-8 rounded-full hover:bg-tertiary"
                >
                  <i class="fa-solid fa-bell fa-lg text-berkeley_blue"></i>
                </button>
                <i
                  class="fa-regular fa-circle-question fa-lg text-berkeley_blue"
                ></i>
                <div class="relative pe-2">
                  <button
                    class="w-8 h-8 rounded-full my-2 bg-warning border-2 border-berkeley_blue focus:border-secondary focus:border-2"
                    id="profileIcon"
                  >
                    JR
                  </button>
                  <div
                    class="absolute right-2 my-2 w-64 border-[0.2px] bg-berkeley_blue text-white border-[#39424A] rounded-md text-secondary hidden z-10"
                    id="profileMenu"
                  >
                    <div>
                      <span class="text-xs ps-5">CUENTA</span>
                      <div class="flex space-x-4 px-5 py-3">
                        <img
                          src="https://ui-avatars.com/api?name=Jonathan Mancera"
                          alt="user"
                          class="rounded-full w-10 h-10"
                        />
                        <span class="text-sm"
                          >Jonathan David <br />
                          Mancera Ramirez <br />
                          joda01574@gmail.com
                        </span>
                      </div>
                      <div
                        class="flex justify-between items-center py-2 pe-4 hover:bg-tertiary"
                      >
                        <a href="#" class="hover:bg-tertiary px-5"
                          >Gestionar cuenta</a
                        >
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                      </div>
                      <hr
                        class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700"
                      />
                      <div class="hover:bg-tertiary py-2">
                        <a href="#" class="px-5">Cerrar sesión</a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="absolute right-2 my-2 w-[430px] border-[0.2px] bg-berkeley_blue text-white border-[#39424A] rounded-md text-secondary hidden z-10"
                    id="notificationMenu"
                  >
                    <div
                      class="flex items-center justify-between h-9 px-4 py-8"
                    >
                      <span class="text-xl font-bold">Notificaciones</span>
                      <div class="flex space-x-4 items-center">
                        <span class="text-xs">Mostrar solo no leídos </span>
                        <i class="fa-solid fa-toggle-on fa-xl"></i>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                      </div>
                    </div>
                    <hr
                      class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700"
                    />

                    <div class="relative h-96">
                      <div
                        class="absolute top-4 bottom-4 left-0 right-0 px-2 flex flex-col items-center"
                      >
                        <img
                          src="https://trello.com/assets/ee2660df9335718b1a80.svg"
                          alt="dog"
                          class="w-32 mb-8"
                        />
                        <span class="font-[500] text-[20px]"
                          >No tiene notificaciones sin leer</span
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </header>

<?php } ?>


<?php function endLayout()  { ?>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        document.getElementById("profileIcon").addEventListener("click", () => {
          document.getElementById("profileMenu").classList.toggle("hidden");
        });

/*         document.getElementById("filter").addEventListener("click", () => {
          document.getElementById("filterOptions").classList.toggle("hidden");
        }); */

        document
          .getElementById("notification")
          .addEventListener("click", () => {
            document
              .getElementById("notificationMenu")
              .classList.toggle("hidden");
          });
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  const quill = new Quill('#descripcion', {
    theme: 'snow'
  });
</script>
  </body>
</html>
<?php }?>
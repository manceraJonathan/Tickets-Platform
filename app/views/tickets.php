<?php
session_start();
include('layout.php');

html_head('Mis tickets');
aside_header();
?>


<main>
    <!-- Filter -->
    <div class="relative flex text-2xl space-x-2 text-secondary items-center">
        <button class="bg-berkeley_blue hover:bg-tertiary py-1 px-2 rounded-md" id="filter">
            <i class="fa-solid fa-arrow-up-wide-short text-white"></i>
        </button>
        <span class="text-black">Mis tickets</span>
        <div class="absolute left-0 top-full w-36 bg-[#171A1E] hidden text-base z-10 rounded-md border border-[#39424A] my-1" id="filterOptions">
            <div class="flex flex-col">
                <button class="p-2 hover:bg-tertiary">Abierto</button>
                <button class="p-2 hover:bg-tertiary">En progreso</button>
                <button class="p-2 hover:bg-tertiary">Cerrado</button>
            </div>
        </div>
    </div>
    <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700" />
    <div class="ticketsWrap">
        <div style="overflow-y: auto; height: 450px">
            <?php for ($i=0; $i < 10; $i++) { ?>
                <!-- Ticket -->
            <section class="w-full flex flex-col items-center">
                <div class="w-5/6 bg-[#F1FAEE] min-w-[420px] rounded-xl my-2 transform hover:scale-105 transition duration-300 ease-in-out border border-[#1d3557]">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <input type="checkbox" name="" id="" class="mx-2 rounded-md" />
                            <div class="w-14 h-12 rounded-md bg-cerulean text-center flex items-center justify-center">
                                <span class="text-lg text-accent"><?php echo $_SESSION["nombre"][0]?></span>
                            </div>
                            <div class="flex flex-col p-2 text-secondary">
                                <div>
                                    <span class="bg-red-400 text-red-600 text-xs font-bold border border-red-600 p-1 rounded-md">Vencidos</span>
                                </div>
                                <span class="pt-2">Devolución dinero - Reembolso</span>
                                <div class="ticket">
                                    <i class="fa-solid fa-envelope"></i>
                                    <span class="font-bold"><?php echo $_SESSION["correo"]?></span>
                                    <span> - Creado hace un día - </span>
                                    <span>Vence en un día</span>
                                </div>
                                <div></div>
                            </div>
                        </div>

                        <div class="flex flex-col space-y-2 m-2 text-secondary">
                            <div class="flex space-x-4 items-center">
                                <i class="fa-solid fa-circle text-warning"></i>
                                <span>Alta</span>
                            </div>
                            <div class="flex space-x-4 items-center">
                                <i class="fa-solid fa-user"></i> <span>-- / --</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <?php } ?>
            
            
            

            
        </div>
        <div class="">
            <div class="bg-[#F1FAEE] text-[#1D3557] flex flex-col my-2 rounded-md">
                <span class="p-2"><i class="fa-solid fa-caret-right"></i> Abiertos</span>
                <span class="p-2"><i class="fa-solid fa-caret-right"></i> En progreso</span>
                <span class="p-2"><i class="fa-solid fa-caret-right"></i> Atrasados (2)
                </span>
                <span class="p-2"><i class="fa-solid fa-caret-right"></i> Cerrado</span>
            </div>
        </div>
    </div>

</main>

<?php endLayout() ?>
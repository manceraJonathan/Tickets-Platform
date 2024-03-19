<?php
session_start();
include('layout.php');

html_head('Dashboard');
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php
aside_header();
?>
<main>
    <h1 class="text-center text-2xl mt-6"> Página Principal</h1>
    <div class="flex justify-between p-4">
    <!-- Grafico 1 -->
    <div class="w-1/4 bg-white p-4 shadow-md">
        <canvas id="chart1"></canvas>
    </div>
    <!-- Grafico 2 -->
    <div class="w-1/4 bg-white p-4 shadow-md">
        <canvas id="chart2"></canvas>
    </div>
    <!-- Grafico 3 -->
    <div class="w-1/4 bg-white p-4 shadow-md">
        <canvas id="chart3"></canvas>
    </div>
    <!-- Grafico 4 -->
    <div class="w-1/4 bg-white p-4 shadow-md">
        <canvas id="chart4"></canvas>
    </div>
</div>

<!-- Barra lateral derecha con mensajes -->
<div class="flex justify-end p-4">
    <div class="w-1/5 bg-white p-4 shadow-md">
        <!-- Botones -->
        <div class="mb-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Crear Ticket
            </button>
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Ver Mis Tickets
            </button>
        </div>
        <!-- Lista de chats pendientes -->
        <ul>
            <li class="py-2">Chat Pendiente 1</li>
            <li class="py-2">Chat Pendiente 2</li>
            <li class="py-2">Chat Pendiente 3</li>
            <li class="py-2">Chat Pendiente 4</li>
        </ul>
    </div>
</div>

<!-- Sección inferior con un gráfico de línea -->
<div class="p-4">
    <canvas id="lineChart"></canvas>
</div>

</main>


<?php endLayout() ?>
<script>
    // Datos de ejemplo para los gráficos
    const data1 = [10, 20, 30, 40];
    const data2 = [15, 25, 35, 45];
    const data3 = [20, 30, 40, 50];
    const data4 = [25, 35, 45, 55];
    const labels = ['Enero', 'Febrero', 'Marzo', 'Abril'];

    // Inicializar gráficos con Chart.js
    new Chart(document.getElementById('chart1'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{label: 'Grafico 1', data: data1}]
        }
    });
    new Chart(document.getElementById('chart2'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{label: 'Grafico 2', data: data2}]
        }
    });
    new Chart(document.getElementById('chart3'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{label: 'Grafico 3', data: data3}]
        }
    });
    new Chart(document.getElementById('chart4'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{label: 'Grafico 4', data: data4}]
        }
    });

    // Configurar y mostrar gráfico de línea
    new Chart(document.getElementById('lineChart'), {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Grafico de Linea',
                data: [30, 40, 35, 45],
                borderColor: 'blue',
                fill: false
            }]
        }
    });
</script>


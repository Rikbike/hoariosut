<!DOCTYPE html>
<html lang="en">
<head>
<style>
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            border-radius: 20px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
            border-radius: 20px;
        }
        th {
            background-color: aquamarine;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        caption {
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        td {
            background-color: pink;
        }
        .imagen {
    width: 150px; 
    height: auto; 
    display: block; 
    margin: 0 auto; 
}
    </style>
</head>
<body>
    <?php
    
    
    if (isset($_POST['filtrar'])) {
        
        $diaSeleccionado = $_POST['dia'];

        echo '<img src="avril.jpg" alt="Descripción de la imagen" class="imagen">';
        /*echo '<h1>Horarios del grupo TID31M</h1>'*/
        $horariosPorDia = [
            
            'Lunes' => [
                ["Formacion Sociocultural III", "Lunes", "7:00 am", "8:50 am", "Aula I16"],
                ["Calculo Diferencial", "Lunes", "9:10", "10:00", "Aula I16"],
                ["Probabilidad", "Lunes", "10:00", "11:00", "Aula I16"],
                ["Inglés III", "Lunes", "11:00", "13:00", "Aula I16"],
                ["Base de Datos para Aplicaciones Web", "Lunes", "13:00", "15:00", "Lab 02"],
            ],
            'Martes' => [
                ["Sistemas operativos", "Martes", "7:00 am", "8:50 am", "Lab 02"],
                ["Tutoria", "Martes", "9:10 am", "10:00 am", "Aula I16"],
                ["Probabilidad y Estadística", "Martes", "10:00 am", "12:00 pm", "Aula I16"],
                ["Base de Datos Para Aplicaciones Web", "Martes", "12:00 pm", "1:00 pm", "Lab 02"],
            ],
            'Miércoles' => [
                ["Probabilidad y Estadística", "Miércoles", "7:00 am", "8:50 am", "Aula I16"],
                ["Aplicaciones Web", "Miercoles", "9:10 am", "11:00 am", "Lab 02"],
                ["Base de Datos par Aplicaciones Web", "Miercoles", "11:00 am", "12:00 pm", "Aula I16"],
                ["Aplicaciones Web", "Miercoles", "12:00 pm", "1:00 pm", "Aula I16"],
                ["Calculo Diferencial", "Miercoles", "1:00 pm", "3:00 pm", "Aula I16"],
            ],
            'Jueves' => [
                ["Aplicaciones Web", "Jueves", "7:00 am", "8:50 am", "Aula I16"],
                ["Base de Datos para Aplicaciones Web", "Jueves", "9:10 am", "11:00 am", "Lab 02"],
                ["Sistemas Operativos", "Jueves", "11:00 am", "1:00 pm", "Lab 02"],
            ],

            'Viernes' => [
                ["Inglés III", "Viernes", "8:00 pm", "9:00 pm", "Aula I16"],
                ["Aplicaciones Web", "Viernes", "9:10 am", "11:00 am", "Aula I16"],
                ["Integradora", "Viernes", "11:00 am", "1:00 pm", "Aula I16"],
                ["Calculo Diferencial", "Viernes", "1:00 pm", "2:00 pm", "Aula I16"],
                ["Base de Datos para Aplicaciones Web", "Viernes", "2:00 pm", "3:00 pm", "Lab 02"],

            ],
            'Sabadrink' => [
                ["Hoy se pistea", "a cada", "hora", "del", "dia"],
            ],
            'Domingo' => [
                ["Se baja la cruda con un aguachilito", "y", "se toma una caguama", "para NO perder", "la costumbre"],
            ],
        ];

        echo "<h1>- $diaSeleccionado -</h1>";
        echo '<table>
                <caption>Horarios del Grupo TID31M</caption>
                <thead>
                    <tr>
                        <th>Materia</th>
                        <th>Dia</th>
                        <th>Hora de inicio</th>
                        <th>Hora termina</th>
                        <th>Aula</th>
                    </tr>
                </thead>
                <tbody>';
        switch ($diaSeleccionado) {
            case 'Lunes':
            case 'Martes':
            case 'Miércoles':
            case 'Jueves':
            case 'Viernes':
            case 'Sabadrink':
                case 'Domingo':
                foreach ($horariosPorDia[$diaSeleccionado] as $horario) {
                    echo "<tr>";
                    foreach ($horario as $dato) {
                        echo "<td>$dato</td>";
                    }
                    echo "</tr>";
                }
                break;
            default:
                echo "<tr><td colspan='5'>No se han encontrado horarios para el día seleccionado.</td></tr>";
        }

        echo '</tbody>
            </table>';
            echo '<a href="javascript:history.back()" class="back-button">Volver atrás</a>';
            
    }
    ?>
</body>
</html>
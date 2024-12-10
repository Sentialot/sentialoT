

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auditorías de Seguridad IoT Personalizadas</title>
    <style>
        /* Diseño global */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7f6;
            color: #333;
            line-height: 1.6;
        }
        header {
            background-color: #2c3e50;
            color: #fff;
            padding: 15px 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            margin: 0;
            font-size: 2rem;
            font-weight: 600;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin-top: 10px;
            text-align: center;
        }
        nav ul li {
            display: inline-block;
            margin: 0 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        nav ul li a:hover {
            background-color: #34495e;
        }

        /* Estilos de las secciones */
        .contenedor-secciones {
            padding: 30px;
        }
        h2, h3, h4, h5 {
            color: #34495e;
            font-weight: 600;
            margin-bottom: 15px;
        }
        h6 {
            font-size: 1rem;
            color: #7f8c8d;
        }
        section {
            margin-bottom: 40px;
        }

        /* Estilo para tablas */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
            font-size: 1rem;
        }
        th {
            background-color: #ecf0f1;
            color: #2c3e50;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }

        /* Estilo de los formularios */
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        button {
            background-color: #2c3e50;
            color: white;
            font-size: 1.1rem;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #34495e;
        }

        /* Estilo de la imagen */
        img {
            border-radius: 10px;
            margin-top: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-width: 100%;
            height: auto;
        }

        /* Pie de página */
        footer {
            background-color: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Auditorías de Seguridad IoT Personalizadas</h1>
        <nav>
            <ul>
                <li><a href="#seccion1">Paquetes de Auditoría</a></li>
                <li><a href="#seccion2">Configurador</a></li>
                <li><a href="#seccion3">Demo Gratuita</a></li>
            </ul>
        </nav>
    </header>

    <div class="contenedor-secciones">
        <section id="seccion1">
            <h2>Paquetes de Auditoría Personalizados</h2>
            <p>Ofrecemos paquetes de auditoría adaptados a las necesidades de cada cliente, garantizando un análisis exhaustivo de sus sistemas IoT.</p>
            <table>
                <thead>
                    <tr>
                        <th>Paquete</th>
                        <th>Servicios Incluidos</th>
                        <th>Costo Aproximado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Básico</td>
                        <td>
                            <ul>
                                <li>Escaneo de vulnerabilidades</li>
                                <li>Informe general de riesgos</li>
                            </ul>
                        </td>
                        <td>$150 - $300</td>
                    </tr>
                    <tr>
                        <td>Intermedio</td>
                        <td>
                            <ul>
                                <li>Todo en el Básico</li>
                                <li>Pruebas de penetración</li>
                                <li>Recomendaciones detalladas</li>
                            </ul>
                        </td>
                        <td>$400 - $800</td>
                    </tr>
                    <tr>
                        <td>Avanzado</td>
                        <td>
                            <ul>
                                <li>Todo en el Intermedio</li>
                                <li>Monitorización continua</li>
                                <li>Soporte técnico 24/7</li>
                            </ul>
                        </td>
                        <td>$1,000 - $2,500</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="seccion2">
            <h3>Configurador en Línea</h3>
            <p>Selecciona los servicios que necesitas y obtén una cotización personalizada.</p>
            <table>
                <thead>
                    <tr>
                        <th>Seleccionar</th>
                        <th>Servicio</th>
                        <th>Descripción</th>
                        <th>Costo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class="servicio" value="150" onchange="calcularTotal()"></td>
                        <td>Escaneo de Vulnerabilidades</td>
                        <td>Detecta puntos débiles en tus dispositivos IoT.</td>
                        <td>$150</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="servicio" value="300" onchange="calcularTotal()"></td>
                        <td>Pruebas de Penetración</td>
                        <td>Simula ataques para evaluar la seguridad.</td>
                        <td>$300</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="servicio" value="200" onchange="calcularTotal()"></td>
                        <td>Recomendaciones Personalizadas</td>
                        <td>Informe detallado con acciones específicas.</td>
                        <td>$200</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="servicio" value="500" onchange="calcularTotal()"></td>
                        <td>Monitorización Continua</td>
                        <td>Supervisa tus dispositivos IoT en tiempo real.</td>
                        <td>$500</td>
                    </tr>
                </tbody>
            </table>
            <h4>Total Estimado: $<span id="total">0</span></h4>
        </section>

        <section id="seccion3">
            <h4>Demo Gratuita o Asesoría Inicial</h4>
            <img src="monitoreo.jpg" alt="Monitoreo IA">
            <p>Solicita una demo gratuita o recibe una asesoría inicial para mejorar la seguridad de tus dispositivos IoT.</p>
            <h5>Solicita tu Demo o Asesoría Inicial:</h5>

            <article>
                <h6>¿Qué incluye la Asesoría Inicial?</h6>
                <ul>
                    <li><strong>Revisión y Diagnóstico Inicial:</strong> Análisis de dispositivos IoT y redes, identificando vulnerabilidades.</li>
                    <li><strong>Diseño Personalizado de Políticas de Seguridad:</strong> Estrategias adaptadas a tus necesidades.</li>
                    <li><strong>Recomendaciones para Configuración:</strong> Guía para configurar firewalls y actualizar firmware.</li>
                    <li><strong>Plan de Acción:</strong> Pasos a seguir con costos estimados.</li>
                </ul>
                <p><strong>Objetivo:</strong> Brindar una visión estratégica para mejorar la seguridad de IoT, ayudándote a decidir si continuar con la implementación completa.</p>
            </article>

            <form id="formulario-demo" onsubmit="enviarFormulario(event)">
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre" required><br><br>

                <label for="email">Correo Electrónico:</label><br>
                <input type="email" id="email" name="email" required><br><br>

                <label for="servicios">Servicios Seleccionados:</label><br>
                <textarea id="servicios" name="servicios" rows="4" cols="50" readonly></textarea><br><br>

                <label for="total">Total Estimado:</label><br>
                <input type="text" id="total" name="total" readonly><br><br>

                <button type="submit">Solicitar Demo</button>
            </form>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Auditorías de Seguridad IoT Personalizadas. Todos los derechos reservados.</p>
    </footer>

    <script>
        function calcularTotal() {
            let total = 0;
            const servicios = document.querySelectorAll('.servicio:checked');
            servicios.forEach(servicio => {
                total += parseFloat(servicio.value);
            });
            document.getElementById('total').textContent = total.toFixed(2);
        }

        function enviarFormulario(event) {
            event.preventDefault();  // Evita el envío del formulario por defecto
            const nombre = document.getElementById('nombre').value;
            const email = document.getElementById('email').value;
            const total = document.getElementById('total').textContent;
            const servicios = [];
            const serviciosSeleccionados = document.querySelectorAll('.servicio:checked');
            serviciosSeleccionados.forEach(servicio => {
                servicios.push(servicio.parentElement.parentElement.cells[1].textContent.trim());
            });
            document.getElementById('servicios').value = servicios.join(', ');

            alert(`Gracias por solicitar la demo, ${nombre}! Hemos recibido tu solicitud y pronto nos pondremos en contacto contigo a través del correo: ${email}.`);
            document.getElementById('formulario-demo').reset();
        }
    </script>

    <!-- Pie de página -->
    <footer style="text-align: center; padding: 50px 0; background-color: rgba(0, 0, 0, 0.7);">
            <p style="color: #1abc9c; font-size: 25px; margin: 0;">&copy; 2024 SENTIAILOT | Todos los derechos reservados</p>
             <a href="su.html" target="_blank" style="color: #1abc9c; font-size: 25px; text-decoration: none;">Regresar a la página principal</a>
            </footer>

</body>

</html>
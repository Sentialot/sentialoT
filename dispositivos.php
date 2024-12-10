


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dispositivos IoT Preconfigurados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #e3f2fd;
            color: #333;
        }
        h1 {
            color: #0288d1;
            text-align: center;
            background-color: #2c3e50;
            color: #fff;
            padding: 15px 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        p {
            color: #0277bd;
            font-size: 16px;
            line-height: 1.6;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);            
            background-color: #ecf0f1;
            color: #2c3e50;
            
        }
        th, td {
            padding: 12px;
            border: 1px solid #b3e5fc;
            text-align: left;
        }
        th {
            background-color: #81d4fa;
            color: #01579b;
        }
        td {
            background-color: #e1f5fe;
        }
        .btn {
            background-color: #03a9f4;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0288d1;
        }
        .form-group {
            margin: 10px 0;
        }
        .hidden {
            display: none;
        }
        .total {
            font-weight: bold;
            color: #0288d1;
        }
    </style>
</head>
<body>
    <h1>Dispositivos IoT Preconfigurados</h1>
    <p>A continuación, encontrarás una lista de dispositivos IoT preconfigurados para empresas y hogares, listos para agregar a tu carrito.

      1.-  Para los usuarios de empresas o de casa, aquí te doy tres cosas que se pueden hacer para optimizar y garantizar la seguridad de los dispositivos IoT:
      2.-  Monitoreo de Seguridad en Tiempo Real: Implementar sistemas de monitoreo que alerten sobre cualquier actividad sospechosa en los dispositivos IoT, previniendo accesos no autorizados y posibles vulnerabilidades.
      3.-  Actualizaciones Automáticas y Gestión de Parcheo: Asegurar que todos los dispositivos IoT se mantengan actualizados con los últimos parches de seguridad, evitando que queden expuestos a amenazas conocidas.
      4.-  Seguridad en la Red: Utilizar redes privadas virtuales (VPN) o firewalls dedicados para los dispositivos IoT, para aislarlos de otras redes y protegerlos de ataques externos.

    </p>

    
    <table>
        <thead>
            <tr>
                <th>Nombre del Dispositivo IoT</th>
                <th>Descripción</th>
                <th>Características</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Seleccionar / Agregar al Carrito</th>
            </tr>
        </thead>
        <tbody id="products-list">
            <tr>
                <td>Cámara de Seguridad IoT Pro</td>
                <td>Cámara para monitoreo remoto en hogares y oficinas.</td>
                <td>1080p HD, visión nocturna, detección de movimiento, grabación en la nube, control remoto</td>
                <td>$129.99</td>
                <td><input type="number" min="1" value="1" id="cantidad-1"></td>
                <td><button class="btn" onclick="agregarAlCarrito(1, 129.99)">Seleccionar</button></td>
            </tr>
            <tr>
                <td>Termostato Inteligente</td>
                <td>Termostato que optimiza el consumo de energía en empresas y hogares.</td>
                <td>Control vía app, programación horaria, compatible con Alexa y Google Home</td>
                <td>$159.99</td>
                <td><input type="number" min="1" value="1" id="cantidad-2"></td>
                <td><button class="btn" onclick="agregarAlCarrito(2, 159.99)">Seleccionar</button></td>
            </tr>
            <tr>
                <td>Enchufe Inteligente</td>
                <td>Enchufe para controlar dispositivos de forma remota.</td>
                <td>Programación de horarios, control con app o asistentes de voz, medición de consumo energético</td>
                <td>$39.99</td>
                <td><input type="number" min="1" value="1" id="cantidad-3"></td>
                <td><button class="btn" onclick="agregarAlCarrito(3, 39.99)">Seleccionar</button></td>
            </tr>
            <tr>
                <td>Sensor de Movimiento IoT</td>
                <td>Sensor de movimiento para aumentar la seguridad en empresas y casas.</td>
                <td>Notificaciones en tiempo real, fácil instalación, batería de larga duración</td>
                <td>$49.99</td>
                <td><input type="number" min="1" value="1" id="cantidad-4"></td>
                <td><button class="btn" onclick="agregarAlCarrito(4, 49.99)">Seleccionar</button></td>
            </tr>
            <tr>
                <td>Sensor de Puerta y Ventana IoT</td>
                <td>Sensor que detecta la apertura de puertas o ventanas.</td>
                <td>Alertas en tiempo real, fácil instalación, conectividad Wi-Fi</td>
                <td>$49.99</td>
                <td><input type="number" min="1" value="1" id="cantidad-5"></td>
                <td><button class="btn" onclick="agregarAlCarrito(5, 49.99)">Seleccionar</button></td>
            </tr>
            <tr>
                <td>Controlador de Acceso IoT</td>
                <td>Sistema de acceso sin llave para empresas o casas.</td>
                <td>Control remoto, registros de acceso, integración con sistemas de seguridad</td>
                <td>$249.99</td>
                <td><input type="number" min="1" value="1" id="cantidad-6"></td>
                <td><button class="btn" onclick="agregarAlCarrito(6, 249.99)">Seleccionar</button></td>
            </tr>
            <tr>
                <td>Bombilla LED Inteligente</td>
                <td>Bombilla LED inteligente para hogares y oficinas.</td>
                <td>Ajuste de brillo y color, control remoto desde la app, programación horaria</td>
                <td>$19.99</td>
                <td><input type="number" min="1" value="1" id="cantidad-7"></td>
                <td><button class="btn" onclick="agregarAlCarrito(7, 19.99)">Seleccionar</button></td>
            </tr>
            <tr>
                <td>Detector de Fugas de Agua IoT</td>
                <td>Sensor que detecta fugas de agua en hogares o empresas.</td>
                <td>Alertas instantáneas, conexión a la app, batería de larga duración</td>
                <td>$59.99</td>
                <td><input type="number" min="1" value="1" id="cantidad-8"></td>
                <td><button class="btn" onclick="agregarAlCarrito(8, 59.99)">Seleccionar</button></td>
            </tr>
            <tr>
                <td>Aire Acondicionado Inteligente IoT</td>
                <td>Aire acondicionado que puede controlarse desde cualquier lugar.</td>
                <td>Control remoto, integración con Alexa/Google Home, eficiencia energética</td>
                <td>$499.99</td>
                <td><input type="number" min="1" value="1" id="cantidad-9"></td>
                <td><button class="btn" onclick="agregarAlCarrito(9, 499.99)">Seleccionar</button></td>
            </tr>
            <tr>
                <td>Cerradura Inteligente IoT</td>
                <td>Cerradura electrónica sin llave para mayor seguridad en empresas y casas.</td>
                <td>Control remoto, integración con dispositivos móviles, acceso por código o huella dactilar</td>
                <td>$199.99</td>
                <td><input type="number" min="1" value="1" id="cantidad-10"></td>
                <td><button class="btn" onclick="agregarAlCarrito(10, 199.99)">Seleccionar</button></td>
            </tr>
            <tr>
                <td>Sistemas de Iluminación Inteligente</td>
                <td>Iluminación inteligente para oficinas y hogares.</td>
                <td>Programación de encendido/apagado, control de color y brillo, compatible con Alexa/Google Home</td>
                <td>$89.99</td>
                <td><input type="number" min="1" value="1" id="cantidad-11"></td>
                <td><button class="btn" onclick="agregarAlCarrito(11, 89.99)">Seleccionar</button></td>
            </tr>
            <tr>
                <td>Riego Inteligente IoT</td>
                <td>Sistema de riego automático y eficiente para jardines en empresas o casas.</td>
                <td>Control remoto, ajuste según clima, ahorro de agua</td>
                <td>$79.99</td>
                <td><input type="number" min="1" value="1" id="cantidad-12"></td>
                <td><button class="btn" onclick="agregarAlCarrito(12, 79.99)">Seleccionar</button></td>
            </tr>
        </tbody>
    </table>
    
    <h3>Resumen de la compra</h3>
    <p id="total">Total: $0</p>

    <h3>Opciones de pago</h3>
    <label>
        <input type="radio" name="pago" value="paypal" onclick="mostrarFormularioPago('paypal')"> PayPal
    </label>
    <label>
        <input type="radio" name="pago" value="tarjeta" onclick="mostrarFormularioPago('tarjeta')"> Tarjeta de Crédito/Débito
    </label>

    <div id="formulario-paypal" class="hidden">
        <h3>Pago con PayPal</h3>
        <div class="form-group">
            <label for="idPaypal">ID de PayPal:</label>
            <input type="text" id="idPaypal" required>
        </div>
        <p id="total-paypal">Total: $0</p>
        <button class="btn" onclick="realizarPago('paypal')">Pagar con PayPal</button>
    </div>

    <div id="formulario-tarjeta" class="hidden">
        <h3>Pago con Tarjeta</h3>
        <div class="form-group">
            <label for="numeroTarjeta">Número de tarjeta:</label>
            <input type="text" id="numeroTarjeta" required>
        </div>
        <div class="form-group">
            <label for="cedula">Cédula:</label>
            <input type="text" id="cedula" required>
        </div>
        <div class="form-group">
            <label for="fechaVencimiento">Fecha de vencimiento:</label>
            <input type="text" id="fechaVencimiento" placeholder="MM/AA" required>
        </div>
        <div class="form-group">
            <label for="codigoSeguridad">Código de seguridad (CVC):</label>
            <input type="text" id="codigoSeguridad" required>
        </div>
        <p id="total-tarjeta">Total: $0</p>
        <button class="btn" onclick="realizarPago('tarjeta')">Pagar con Tarjeta</button>
    </div>

    <script>
        let total = 0;

        // Función para agregar productos al carrito
        function agregarAlCarrito(productId, price) {
            const cantidad = document.getElementById(`cantidad-${productId}`).value;
            total += price * cantidad;
            document.getElementById("total").textContent = `Total: $${total.toFixed(2)}`;
            document.getElementById("total-paypal").textContent = `Total: $${total.toFixed(2)}`;
            document.getElementById("total-tarjeta").textContent = `Total: $${total.toFixed(2)}`;
        }

        // Función para mostrar el formulario adecuado según el método de pago seleccionado
        function mostrarFormularioPago(metodo) {
            // Ocultar ambos formularios
            document.getElementById("formulario-paypal").classList.add("hidden");
            document.getElementById("formulario-tarjeta").classList.add("hidden");

            // Mostrar el formulario correspondiente
            if (metodo === 'paypal') {
                document.getElementById("formulario-paypal").classList.remove("hidden");
            } else if (metodo === 'tarjeta') {
                document.getElementById("formulario-tarjeta").classList.remove("hidden");
            }
        }

        // Función para realizar el pago (solo simula el proceso)
        function realizarPago(metodo) {
            if (metodo === 'paypal') {
                const idPaypal = document.getElementById("idPaypal").value;
                if (!idPaypal) {
                    alert("Por favor ingresa tu ID de PayPal.");
                    return;
                }
                alert(`Pago realizado con PayPal. ID: ${idPaypal} - Total: $${total.toFixed(2)}`);
            } else if (metodo === 'tarjeta') {
                const numeroTarjeta = document.getElementById("numeroTarjeta").value;
                const cedula = document.getElementById("cedula").value;
                const fechaVencimiento = document.getElementById("fechaVencimiento").value;
                const codigoSeguridad = document.getElementById("codigoSeguridad").value;

                if (!numeroTarjeta || !cedula || !fechaVencimiento || !codigoSeguridad) {
                    alert("Por favor, completa todos los campos de la tarjeta.");
                    return;
                }

                alert(`Pago realizado con tarjeta. Número de tarjeta: ${numeroTarjeta} - Total: $${total.toFixed(2)}`);
            }
        }
    </script>


    <h3>Tipo de entrega</h3>
    <label>
        <input type="radio" name="entrega" value="local" onclick="toggleFormulario(false)"> Recoger en local
    </label>
    <label>
        <input type="radio" name="entrega" value="domicilio" onclick="toggleFormulario(true)"> A domicilio
    </label>

    <div id="formulario-entrega" class="hidden">
        <h3>Formulario de Entrega a Domicilio</h3>
        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" required>
        </div>
        <!-- Botón Enviar -->
        <button class="btn" onclick="enviarFormulario()">Enviar</button>
    </div>

    <script>
        let total = 0;

        // Función para agregar productos al carrito
        function agregarAlCarrito(productId, price) {
            const cantidad = document.getElementById(`cantidad-${productId}`).value;
            total += price * cantidad;
            document.getElementById("total").textContent = `Total: $${total.toFixed(2)}`;
        }

        // Función para mostrar/ocultar el formulario de entrega
        function toggleFormulario(show) {
            const form = document.getElementById("formulario-entrega");
            if (show) {
                form.classList.remove("hidden");
                llenarFormulario();  // Llenar los datos de entrega a domicilio
            } else {
                form.classList.add("hidden");
            

        // Función para llenar los datos automáticamente al seleccionar "A domicilio"
        function llenarFormulario() {
            document.getElementById("direccion").value = "Av. Siempre Viva 123, Springfield";
            document.getElementById("correo").value = "cliente@ejemplo.com";
            document.getElementById("telefono").value = "123-456-7890";
        }
    }
}

        // Función para enviar el formulario
        function enviarFormulario() {
            const direccion = document.getElementById("direccion").value;
            const correo = document.getElementById("correo").value;
            const telefono = document.getElementById("telefono").value;

            if (!direccion || !correo || !telefono) {
                alert("Por favor, completa todos los campos.");
                return;
            }

            // Simula el envío del formulario (esto puede ser reemplazado por un proceso real de backend)
            alert(`Formulario enviado con los siguientes datos:\nDirección: ${direccion}\nCorreo: ${correo}\nTeléfono: ${telefono}`);
        }
    </script>

    <!-- Pie de página -->
    <footer style="text-align: center; padding: 50px 0; background-color: rgba(0, 0, 0, 0.7);">
            <p style="color: #1abc9c; font-size: 25px; margin: 0;">&copy; 2024 SENTIAILOT | Todos los derechos reservados</p>
             <a href="su.html" target="_blank" style="color: #1abc9c; font-size: 25px; text-decoration: none;">Regresar a la página principal</a>
            </footer>

</body>
</html> 
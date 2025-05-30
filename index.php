<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AR IT SOLUTIONS</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * .services{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            justify-content: center;
        }
        body {
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: #111;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: url('IT solutions company.png') no-repeat center center/cover;
            color: white;
            padding: 20px;
            position: relative;
        }
        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        .hero h1, .hero p, .hero .btn {
            position: relative;
            z-index: 2;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8);
        }
        .service-boxes {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            padding: 50px 20px;
            text-align: center;
			justify-content: center;
			align-items: center;
        }
        .info-box {
            background: white;
            padding: 30px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            max-width: 300px;
            transition: transform 0.3s ease;
        }
        .info-box:hover {
            transform: scale(1.05);
        }
        .info-box img {
            width: 250px;
            display: block;
            margin: 0 auto 10px;
        }
        .contact {
            background: url('contactoit.jpg') no-repeat center center/cover;
            padding: 50px 20px;
            text-align: center;
            color: white;
            position: relative;
        }
        .contact::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }
        .contact h2, .contact form {
            position: relative;
            z-index: 2;
        }
        .contact form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }
        .contact form input, .contact form textarea {
            width: 80%;
            max-width: 400px;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }
        .contact form button {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .contact form button:hover {
            background: #0056b3;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #111;
            color: white;
        }
		        }
        #services {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 50px 20px;
        }
		        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: #111;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        .hero {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: url('IT solutions company.png') no-repeat center center/cover;
            color: white;
            padding: 20px;
            position: relative;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .hero p {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        .hero .btn {
            display: none;
        }
        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        #services {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 50px 20px;
        }
		
    </style>
</head>
<body>
    <header>AR IT Solutions</header>
    
    <section class="hero">
        <h1>Innovación y Tecnología a tu Alcance</h1>
        <p>Soluciones IT personalizadas para tu empresa</p>
        <a href="#contact" class="btn">Contáctanos</a>
    </section>
    
    </section>
    <section class="service-boxes">
        <h2 style="text-align: center; width: 100%; margin-bottom: 20px;">QUIÉNES SOMOS</h2>
        <div class="info-box">
            <h3>Empresa</h3>
            <img src="ARITSolutions.png" alt="Logo">
            <p>Somos líderes en soluciones tecnológicas con un enfoque en innovación.</p>
        </div>
        <div class="info-box">
            <h3>Misión</h3>
			<img src="mmisionit.png" alt="Logo">
            <p>Brindar soluciones IT eficientes y seguras para optimizar procesos empresariales.</p>
        </div>
        <div class="info-box">
            <h3>Visión</h3>
			<img src="visionit.png" alt="Logo">
            <p>Ser una empresa de referencia en tecnología y transformación digital.</p>
        </div>
    </section>
    
    </section>
    <section class="service-boxes">
        <h2 style="text-align: center; width: 100%; margin-bottom: 20px;">NUESTROS SERVICIOS</h2>
        <div class="info-box">
                <h3>Desarrollo Web</h3>
                <p>Diseñamos y desarrollamos sitios web modernos y funcionales.</p>
            </div>
            <div class="info-box">
                <h3>Ciberseguridad</h3>
                <p>Protege tu empresa con nuestras soluciones de seguridad informática.</p>
            </div>
            <div class="info-box">
                <h3>Soporte IT</h3>
                <p>Brindamos asistencia técnica y mantenimiento a infraestructuras tecnológicas.</p>
            </div>
        </div>
    </section>
    
    <section id="contact" class="contact">
        <h2>Contáctanos</h2>
        <form action="https://formspree.io/f/xanewnzl" method="POST">
            <input type="text" name="name" placeholder="Tu Nombre" required>
            <input type="email" name="email" placeholder="Tu Correo" required>
            <textarea name="message" placeholder="Tu Mensaje" required></textarea>
            <button type="submit">Enviar Mensaje</button>
        </form>
    </section>
    
    <footer>
        <p>&copy; 2025 AR IT Solutions - Todos los derechos reservados</p>
    </footer>
</body>
</html>


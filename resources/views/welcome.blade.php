<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getalimente</title>

    <!-- Carregar CSS e JS com Vite -->
    @vite(['resources/js/app.js', 'resources/js/script.js', 'resources/css/styles.css']) <!-- Mudança aqui -->
</head>
<body>

    <!-- Navbar com Logo e Texto "AliMente" ao Lado -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logo com nome "AliMente" e a frase "Alimentando sua mente" ao lado -->
            <a class="navbar-brand d-flex align-items-center" href="/">
                <div class="logo-container">
                    <img src="https://via.placeholder.com/150" alt="Logo" class="img-fluid">
                    <div>
                        <p class="custom-font mb-0">AliMente</p>
                        <p class="custom-subtitle mb-0">Alimentando sua mente</p>
                    </div>
                </div>
            </a>

            <!-- Botões adicionais (direita) -->
            <div class="d-flex">
                <!-- Rede Social -->
                <a class="btn btn-outline-primary me-2" href="/humhub">Rede Social</a>
                <!-- Sobre Nós -->
                <a class="btn btn-outline-secondary me-2" href="/sobre">Sobre Nós</a>
                <!-- Termos e Serviços -->
                <a class="btn btn-outline-secondary me-2" href="/termos">Termos e Serviços</a>
                <!-- Login -->
                <a class="btn btn-outline-primary" href="/login">Login</a>
            </div>
        </div>
    </nav>

</body>
</html>

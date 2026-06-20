<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Pro | Agendamento Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Navbar -->
    <nav class="flex justify-between items-center py-6 px-10 bg-white shadow-sm">
        <div class="text-2xl font-bold text-rose-600">AgendaPro</div>
        <div class="space-x-4">
            <a href="login.php" class="text-gray-600 hover:text-rose-600">Entrar</a>
            <a href="#" class="bg-rose-600 text-white px-5 py-2 rounded-full hover:bg-rose-700">Registar</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="py-20 px-10 text-center">
        <h1 class="text-5xl font-extrabold mb-6">Encontre e agende os melhores serviços</h1>
        <p class="text-xl text-gray-600 mb-10">Beleza, saúde e bem-estar à distância de um clique.</p>
        
        <!-- Search Bar -->
        <div class="max-w-2xl mx-auto bg-white p-4 rounded-full shadow-lg flex">
            <input type="text" placeholder="Serviço ou profissional..." class="flex-grow px-4 py-2 outline-none">
            <input type="text" placeholder="Cidade" class="flex-grow px-4 py-2 border-l outline-none">
            <button class="bg-rose-600 text-white px-8 py-2 rounded-full">Procurar</button>
        </div>
    </header>

    <!-- Features Section -->
    <section class="py-20 px-10">
        <div class="grid md:grid-cols-3 gap-10">
            <div class="bg-white p-8 rounded-lg shadow-sm text-center">
                <h3 class="text-xl font-bold mb-4">Agenda 24/7</h3>
                <p class="text-gray-600">Marque os seus serviços a qualquer hora, sem telefonemas.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-sm text-center">
                <h3 class="text-xl font-bold mb-4">Escolha Profissionais</h3>
                <p class="text-gray-600">Compare avaliações e escolha o profissional que prefere.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-sm text-center">
                <h3 class="text-xl font-bold mb-4">Gestão Fácil</h3>
                <p class="text-gray-600">Receba lembretes automáticos dos seus agendamentos.</p>
            </div>
        </div>
    </section>

</body>
</html>
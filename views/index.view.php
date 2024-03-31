<?php require('head.view.php') ?>
<nav class="bg-gray-800">
    <div class=" px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- 
                            Atual: "bg-gray-900 text-white", 
                            Padrão: "text-gray-300 hover:bg-gray-700 hover:text-white" 
                        -->
                        <!-- 
                        If the user is logged the logout appears and disapear the others -->
                        <a href="views/login.view.php" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Lista de usuarios</h1>
    </div>
</header>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold">Lista de usuarios registrados: </h1>
        <ul>
            <?php foreach( $usersData as $key => $value ) : ?>
                <li class="ml-4 font-medium border">
                    <?= $key . ' - ' . 'Name: ' . $value['user_name'] . '<br>' . ' Email: ' . ($value['user_email']) . '<br>' ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>
</div>
</body>

</html>
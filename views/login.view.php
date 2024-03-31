<?php
    // Processo de login 

?>

<?php require('head.view.php') ?>
<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
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
                        <a href="./login.view.php" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Login</a>
                        <a href="./register.view.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Cadastro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 text-center">Login</h1>
    </div>
</header>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form action="index.view.php" method="post" name="login" class="flex flex-col w-full justify-center items-center gap-4">
            <div class="flex flex-col w-[300px]">
                <label for="email">E-mail: </label>
                <input type="email" name="email" placeholder="usertest@test.com" required autocomplete="TRUE">
            </div>
            <div class="flex flex-col w-[300px]">
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="*******" required minlength="12">
            </div>
            <div class="flex flex-col w-[300px]">
                <input type="submit" value="Entrar" class="bg-gray-800 hover:opacity-80 cursor-pointer text-white">
            </div>
        </form>
    </div>
</main>

<style>
    input {
        padding: 8px;
        border-radius: 8px;
        border: gray 1px solid;
    }
</style>

</div>
</body>

</html>
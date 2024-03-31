<?php
// Register Process
session_start();
require_once '../functions/registerFunctions.php';
require_once '../functions/functions.php';

if (urlIs('REQUEST_METHOD', 'POST')) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (registerUser($name, $email, $password)) {
        header('Location: login.view.php');
        exit;
    } else {
        $error = "Erro ao se registrar, verifique e tente novamente!";
    }
}
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
                        <a href="./login.view.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
                        <a href="./register.view.php" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Cadastro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 text-center">Cadastro</h1>
    </div>
</header>

<main class="max-h-screen">
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form action="./login.view.php" method="post" name="cadastro" class="flex flex-col w-full justify-center items-center gap-4">
            <div class="flex flex-col w-[300px]">
                <label for="name">Name: </label>
                <input type="text" name="name" placeholder="nome de usuário" required autocomplete="username">
                <?php if (isset($error) || empty($name)) : ?>
                    <span><?php echo $error; ?></span>
                <?php endif; ?>
            </div>
            <div class="flex flex-col w-[300px]">
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="*******" required minlength="12">
                <?php if (isset($error) || empty($password)) : ?>
                    <span><?php echo $error; ?></span>
                <?php endif; ?>
            </div>
            <div class="flex flex-col w-[300px]">
                <label for="email">E-mail: </label>
                <input type="email" name="email" placeholder="usertest@test.com" required autocomplete="on">
                <?php if (isset($error) || empty($email)) : ?>
                    <span><?php echo $error; ?></span>
                <?php endif; ?>
            </div>
            <div class="flex flex-col w-[300px]">
                <input type="submit" value="Cadastrar" name="cadastrar" class="bg-gray-800 hover:opacity-80 cursor-pointer text-white">
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
<?php require('./partials/head.php') ?>
<?php require('./partials/nav.php') ?>
<?php require('partials/header.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form action="../controllers/login.php" method="get" class="flex flex-col w-full justify-center items-center gap-4">
            <div class="flex flex-col w-[300px]">
                <label for="email">E-mail: </label>
                <input type="email" name="email" placeholder="usertest@test.com">
                <!-- <span>error</span> -->
            </div>
            <div class="flex flex-col w-[300px]">
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="*******">
                <!-- <span>error</span> -->
            </div>
            <div class="flex flex-col w-[300px]">
                <input type="submit" value="Enviar" class="bg-gray-800 hover:opacity-80 cursor-pointer text-white">
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


<?php require('./partials/footer.php') ?>
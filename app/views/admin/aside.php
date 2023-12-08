<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ========== Tailwind Css ========  -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ========== AwesomeFonts Css ========  -->
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../public/assets/css/client/admin.css" />
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">
    <script src="../../../public/assets/js/dashboard_Admin.js" defer></script>
</head>

<body>
    <section class=" flex items-center relative">
        <!-- =========== Aside bar =========== -->
        <aside class="bg-[#186F65] h-[100vh] w-[20%] sm:w-[320px] sm:p-5">
            <!-- ===== logo ===== -->
            <div>
                <!-- <img
                        src="../../../public/assets/images/logo-white.png"
                        alt="logo"
                        class="pt-10"
                    /> -->
            </div>
            <ul class="p-5 mt-10">
                <h2 class="text-base sm:text-2xl font-bold sm:my-5 text-white ">General</h2>
                <li class="my-2">
                    <a href="bank.php"
                        class="text-lg font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-[#0F1A19]   bg-opacity-20">
                        <i class="fa-solid fa-building-columns mr-5 text-lg group-hover:text-[#0F1A19] "></i><span
                            class="hidden sm:inline-block">Bank</span></a>
                </li>
                <li class="my-2">
                    <a href="Users.php"
                        class="text-lg font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-[#0F1A19] bg-indigo-200 bg-opacity-20">
                        <i class="fa-solid fa-user mr-5 text-lg group-hover:text-[#0F1A19]"></i><span
                            class="hidden sm:inline-block">Users</span></a>
                </li>
                <li class="my-2">
                    <a href="Accounts.php"
                        class="text-lg font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-[#0F1A19] bg-indigo-200 bg-opacity-20">
                        <i class="fa-solid fa-file mr-5 text-lg group-hover:text-[#0F1A19]"></i><span
                            class="hidden sm:inline-block">Accounts</span></a>
                </li>
                <li class="my-2">
                    <a href="Transactions.php"
                        class="text-lg font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-[#0F1A19] bg-indigo-200 bg-opacity-20">
                        <i class="fa-solid "></i>
                        <i class="fa-solid fa-right-left mr-5 text-lg group-hover:text-[#0F1A19]"></i><span
                            class="hidden sm:inline-block">Transactions</span></a>
                </li>
                <li class="my-2">
                    <a href="Agency.php"
                        class="text-lg font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-[#0F1A19] bg-indigo-200 bg-opacity-20">
                        <i class="fa-solid fa-building text-white mr-5 text-lg group-hover:text-[#0F1A19]"></i>
                        <span class="hidden sm:inline-block">Agnecy</span></a>
                </li>
                <li class="my-2">
                    <a href="Distributer.php"
                        class="text-lf font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-[#0F1A19] bg-indigo-200 bg-opacity-20">
                        <i class="fa-solid fa-credit-card text-white mr-5 text-lg group-hover:text-[#0F1A19]"></i>
                        <span class="hidden sm:inline-block">Distributer</span></a>
                </li>
            </ul>
            <?php include("./logout.php"); ?>

        </aside>
        <!-- =========== Aside bar =========== -->
        <!-- =========== Content =========== -->
        <main class="bg-gray-100 flex-grow h-[100vh] relative">
            <!-- ============== header =========== -->
            <?php include("./header.php"); ?>
<?php

$role = $_GET["role"];
$type = $_GET["type"];
$id = $_GET["id"];

if ($role == 'sneaker') {
    $json = file_get_contents('./db/sneakers.json');
} else {
    $json = file_get_contents('./db/apparel.json');
}

$array = json_decode($json, true);

$data = $array[$type][$id - 1];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lemkus | Sneakers & Culture | Lemkus</title>
    <link rel="stylesheet" href="./css/tailwind.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://www.dafontfree.net/embed/ZGhhcm1hLWdvdGhpYy1lLWJvbGQmZGF0YS80Ni9kLzYzNDgxL0RoYXJtYUdvdGhpY0VfQm9sZF9SLm90Zg" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <script src="./js/script.js"></script>
</head>

<body>
    <!-- Top Bar Nav-->
    <nav class="w-full py-4" style="border-bottom: 1px solid black">
        <div class="mx-5 flex flex-wrap items-center justify-between">
            <div class="logo font-bold">
                <a href="index.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45%" viewBox="0 0 125.365 17.001">
                        <g id="Small_Logo" transform="translate(-25 -19.5)">
                            <path class="cls-1" id="Path_1073" d="M5.791 1.779L0 18.125h16.209l1.524-4.492H8.368l3.893-11.854z" transform="translate(25 18.049)"></path>
                            <path class="cls-1" id="Path_1074" d="M134.961 18.125l2.7-8.1-6.624 5.814h-.116l-2.731-5.814-2.7 8.1h-6.653L122.8 6.53h-12.883l-.553 1.57h10.649l-1.307 3.947h-10.649l-.61 1.6h10.808l-1.482 4.483h-17.49l5.462-16.346h26.265l2.44 5.745 6.276-5.745h7.467l-5.462 16.346z" transform="translate(-56.041 18.049)"></path>
                            <path class="cls-1" id="Path_1331" d="M380.26 16.3c-1.918 1.541-4.823 2.148-8.048 2.148-5.723 0-8.8-2.2-8.8-5.884a8.6 8.6 0 0 1 .436-2.639l2.333-6.962-7.8 6.285 4.242 8.873h-7.233l-2.441-5.254-2.849 2.292-.988 2.966h-6.8l5.462-16.346h6.8L352.6 7.64l6.77-5.861h14.12l-2.847 8.5a4.5 4.5 0 0 0-.232 1.285c0 1.354.988 2.055 2.789 2.055a3.491 3.491 0 0 0 2.179-.677 4.716 4.716 0 0 0 1.453-2.382l2.934-8.78h6.915l-3.225 9.62a10.155 10.155 0 0 1-3.2 4.9" transform="translate(-254.418 18.049)"></path>
                            <path class="cls-1" id="Path_1332" d="M578.518 6.445c3.457 1.028 5.665 2.195 5.665 4.693a4.836 4.836 0 0 1-1.947 3.83C580.7 16.206 578.2 17 574.974 17a17.115 17.115 0 0 1-10.024-2.966l3.893-3.736a12.444 12.444 0 0 0 6.857 2.312c.872 0 1.482-.257 1.482-.724 0-.514-.378-.677-3.341-1.565-3.777-1.121-5.549-2.2-5.549-4.6a4.655 4.655 0 0 1 1.917-3.62A11.555 11.555 0 0 1 577.443 0a16.253 16.253 0 0 1 9.065 2.452l-3.893 3.736a11.245 11.245 0 0 0-5.869-1.822c-.872 0-1.482.187-1.482.654 0 .49.436.584 3.254 1.424" transform="translate(-436.143 19.5)"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <nav>
                <ul class="flex items-center justify-between font-bold text-sm uppercase no-underline gap-x-2">
                    <li>
                        <a class="px-4 border border-black rounded-full p-1" href="launches.html">launches</a>
                    </li>
                    <li>
                        <button class="px-4 border border-transparent rounded-full font-bold uppercase p-0.5 hover:text-yellow-300 focus:bg-black focus:text-white" data-type="sneaker">sneakers
                        </button>
                    </li>
                    <li>
                        <button class="px-4 border border-transparent rounded-full font-bold uppercase p-0.5 hover:text-yellow-300 focus:bg-black focus:text-white" data-type="apparel">apparel
                        </button>
                    </li>
                </ul>
            </nav>
            <div class="flex items-center font-bold text-sm no-underline pr-6"><a class="hover:text-yellow-300" href="login.html">ACCOUNT</a>
                <a class="pl-6 hover:text-yellow-300" href="#" data-type="modal">WISHLIST (0)</a>
                <a class="pl-6 hover:text-yellow-300" href="search.html">SEARCH</a>
                <a class="pl-6 hover:text-yellow-300" href="#" data-type="bag">BAG (0)</a>
            </div>
        </div>
    </nav>
    <div class="h-96 z-10 w-full hidden bg-white shadow-lg p-5 sticky z-40" style="top:7.4%" id="sneaker-drop">
        <div class="grid grid-flow-col auto-cols-max gap-24">
            <div>
                <div class="text-3xl font-bold">COLLECTIONS</div>
                <div class="flex flex-col mt-5">
                    <a href="sneaker.html" class="no-underline text-black font-bold uppercase hover:text-yellow-400">all
                        sneakers</a>
                    <a href="sneaker.html" class="no-underline text-black font-bold uppercase hover:text-yellow-400">mens</a>
                    <a href="sneaker.html" class="no-underline text-black font-bold uppercase hover:text-yellow-400">womens</a>
                </div>
            </div>
            <div>
                <div class="text-3xl font-bold">BRANDS</div>
                <div class="flex flex-col mt-5">
                    <a href="sneaker.html" class="no-underline text-black hover:text-yellow-400">Nike</a>
                    <a href="sneaker.html" class="no-underline text-black hover:text-yellow-400">Air Jordan</a>
                    <a href="sneaker.html" class="no-underline text-black hover:text-yellow-400">Adidas</a>
                </div>
            </div>
            <div>
                <div class="text-3xl uppercase font-bold">featured</div>
                <div class="grid grid-flow-col auto-cols-max mt-5">
                    <div class="card w-72 mr-3"><img class="bg-contain bg-center border border-black" src="./img/blazer.png">
                        <p class="uppercase font-bold">air max 90 qs</p>
                    </div>
                    <div class="card w-72 mr-3"><img class="bg-contain bg-center border border-black" src="./img/airmax.jpg">
                        <p class="uppercase font-bold">nike blazer</p>
                    </div>
                    <div class="card w-72"><img class="bg-contain bg-center border border-black" src="./img/chuck.jpg">
                        <p class="uppercase font-bold">chuck 70</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-96 z-10 w-full sticky hidden bg-white shadow-lg p-5 z-40" style="top:7.4%" id="apparel-drop">
        <div class="grid grid-flow-col auto-cols-max gap-32">
            <div>
                <div class="text-3xl font-bold">COLLECTIONS</div>
                <div class="flex flex-col mt-5">
                    <a href="apparel.html" class="no-underline text-black font-bold uppercase hover:text-yellow-400">all
                        apparel</a>
                    <a href="apparel.html" class="no-underline text-black font-bold uppercase hover:text-yellow-400">mens</a>
                    <a href="apparel.html" class="no-underline text-black font-bold uppercase hover:text-yellow-400">womens</a>
                </div>
            </div>
            <div>
                <div class="text-3xl font-bold">mens</div>
                <div class="flex flex-col mt-5">
                    <a href="apparel.html" class="no-underline text-black hover:text-yellow-400">T-shirs</a>
                    <a href="apparel.html" class="no-underline text-black hover:text-yellow-400">Hoodies</a>
                    <a href="apparel.html" class="no-underline text-black hover:text-yellow-400">Sweatshirts</a>
                </div>
            </div>
            <div>
                <div class="text-3xl font-bold">womens</div>
                <div class="flex flex-col mt-5">
                    <a href="apparel.html" class="no-underline text-black hover:text-yellow-400">T-shirs</a>
                    <a href="apparel.html" class="no-underline text-black hover:text-yellow-400">Hoodies</a>
                    <a href="apparel.html" class="no-underline text-black hover:text-yellow-400">Sweatshirts</a>
                </div>
            </div>
            <div>
                <div class="text-3xl uppercase font-bold">featured</div>
                <div class="grid grid-flow-col auto-cols-max mt-5">
                    <div class="card w-72 mr-3"><img class="bg-contain bg-center border border-black" src="./img/blazer.png">
                        <p class="uppercase font-bold">air jordan psg tee</p>
                    </div>
                    <div class="card w-72 mr-3"><img class="bg-contain bg-center border border-black" src="./img/airmax.jpg">
                        <p class="uppercase font-bold">nsw icon gx hoodie</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--section-->
    <section>
        <div class="w-full h-16 flex items-center pl-6 space-x-2">
            <span><a href="index.html" class="no-underline text-black">HOME</a></span>
            <span>|</span>
            <?php if ($role == 'sneaker') {
                echo '<span><a href="sneaker.html" class="no-underline text-black">Sneakers</a></span>';
            } else {
                echo '<span><a href="apparel.html" class="no-underline text-black">Apparel</a></span>';
            }

            ?>
        </div>
        <div class="flex height-screen">
            <div class="flex flex-col space-y-4 items-center" style="width: 8%;">
                <?php foreach ($data['img'] as $img) {
                    echo '<div class="w-20 h-20 border border-black">
                    <img class="w-full" src="' . $img . '"/></div>';
                }
                ?>
            </div>
            <div class="overflow-y-auto catalog space-y-5 hide-scroll-bar h-screen" style="width: 47%;">
                <?php foreach ($data['img'] as $img) {
                    echo '<div class="border border-black w-full overflow-hidden flex items-center" style="height: 40rem;">
                    <img class="w-full" src="' . $img . '"/></div>';
                }
                ?>
            </div>
            <div class="pl-16 pr-7 overflow-y-auto" style="width: 45%;">
                <p class="text-7xl font-black mb-7 text-black"><?php echo $data['name'] ?></p>
                <div class="flex justify-between">
                    <p class="text-3xl text-black"><?php echo $data['price'] ?></p>
                    <button class="text-2xl text-black underline">SIZE GUIDE</button>
                </div>
                <div class="flex justify-between my-5">
                    <p class="text-gray-500">
                        <span class="text-black">Get your goods upfront</span>
                        and pay for them over
                        <span class="text-black">3 interest free</span>
                        instalmentsof R599.67. Standard shipping terms apply.
                        <span class="text-black">Find out how >></span>
                    </p>
                    <a href="">
                        <img src="" alt="">
                    </a>
                </div>
                <div class="flex space-x-2 mb-7">
                    <?php foreach ($data['size'] as $size) {
                        echo '<button style="border-radius: 50px; border: 1px solid black;" class="flex justify-center items-center border-2 border-black h-7 w-20 text-black hover:text-white hover:bg-black">' . $size . '</button>';
                    }
                    ?>
                </div>
                <div class="flex justify-between space-x-2">
                    <button style="width: 60%;" class="text-black text-lg h-12 border-2 border-black flex justify-center items-center bg-yellow-400 border border-black rounded-full">
                        ADD TO BAG
                    </button>
                    <button style="width: 40%; border-radius: 50px;" class="text-black text-lg h-12 border-2 border-black flex justify-center items-center border border-black rounded-full">
                        WISHLIST
                    </button>
                </div>
                <p class="text-lg my-5">Product SKU: <?php echo $data['product'] ?></p>
                <div class="border-transparent relative">
                    <button onclick="text_drop('first')" class="h-11 w-full border-t border-b border-black flex items-center text-xl text-black no-underline justify-between">
                        DETAIL
                        <i class="ri-add-line" id="button1"></i>
                    </button>
                    <div id="drop-first" class="pt-5 tab-content hidden">
                        <p>
                            <?php echo $data['details'] ?>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="h-11 border-t border-b border-black flex items-center mt-5">
                        <button class="w-full flex items-center justify-between text-xl" onclick="text_drop('second')">
                            <p class="text-xl text-black ">SHIPPING / RETURNS</p>
                            <i class="ri-add-line" id="button2"></i>
                        </button>
                    </div>
                    <div id="drop-second1" class="pt-3 hidden">
                        <p class="text-xl text-black">SHIPPING:</p>
                        <p class="mt-1">Lemkus.com exclusively uses RAM, one of the leading Courier Companies in SA
                            offering door to door FREE delivery on every order over R800.
                        </p>
                    </div>
                    <div id="drop-second2" class="pt-4 hidden">
                        <p class="text-xl text-black">RETURNS:</p>
                        <p class="mt-1">You are purchasing online and there are going to be times that you get something
                            that you don’t quite want, please don’t fear because we offer one free return on every order
                            made. We will also refund you your money or give you on site credit should you want to wait
                            for something else to come along. Please see our returns and exchanges section for more
                            information.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="mt-28">
        <p class="text-9xl pl-5 text-yellow-400">RECOMMENDED</p>
        <div class="grid grid-cols-3">
            <div class="border border-black p-5 flex justify-center">
                <a href="items.php?role=sneaker&type=nike&id=1">
                    <img class="border border-black" src="./img/sneakers/nike/id1_1.png" alt="product">
                    <div class="text-2xl uppercase mt-5">AIR MAX 2021</div>
                    <div class="text-xl uppercase">R 2,999.00</div>
                </a>
            </div>
            <div class="border border-black p-5 flex justify-center">
                <a href="items.php?role=sneaker&type=nike&id=2">
                    <img class="border border-black" src="./img/sneakers/nike/id2_1.png" alt="product">
                    <div class="text-2xl uppercase mt-5">AIR FORCE 1 07 WB</div>
                    <div class="text-xl uppercase">R 1,999.00</div>
                </a>
            </div>
            <div class="border border-black p-5 flex justify-center">
                <a href="items.php?role=sneaker&type=nike&id=3">
                    <img class="border border-black" src="./img/sneakers/nike/id3_1.png" alt="product">
                    <div class="text-2xl uppercase mt-5">BURROW</div>
                    <div class="text-xl uppercase">R 999.00</div>
                </a>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="px-8 flex justify-between">
            <div class="text-9xl uppercase my-5 text-yellow-400">culture</div>
            <div class="flex items-end"><button class="rounded-full border border-black uppercase bg-yellow-400 p-2 px-6 mb-6">view all</button>
            </div>
        </div>
        <div class="grid grid-cols-4 px-8 font-bold">
            <div class="card flex flex-col mx-2 border-b border-black pb-10">
                <a href="culture_1.html">
                    <img class="border border-black" src="./img/poster.png" alt="">
                    <div class="mt-5 uppercase text-xl hover:text-yellow-300">REEBOK KAMIKAZE X NICE KICKS X NBA JAM</div>
                </a>
            </div>
            <div class="card flex flex-col mx-2 border-b border-black pb-10"><a href="culture_2.html"><img class="border border-black" src="./img/poster2.png" alt="">
                    <div class="mt-5 uppercase text-xl hover:text-yellow-300">BATHANDWA NGWENDU: STORYTELLER + DIRECTOR</div>
                </a></div>
            <div class="card flex flex-col mx-2 border-b border-black pb-10"><a href="culture_3.html"><img class="border border-black" src="./img/poster3.png" alt="">
                    <div class="mt-5 uppercase text-xl hover:text-yellow-300">ROBYN AGULHAS: FASHION DESIGNER</div>
                </a></div>
            <div class="card flex flex-col mx-2 border-b border-black pb-10"><a href="culture_4.html"><img class="border border-black" src="./img/poster4.png" alt="">
                    <div class="mt-5 uppercase text-xl hover:text-yellow-300">HISHAAM ABRAHAMS: PHOTOGRAPHER | RESEARCH PROJECT</div>
                </a></div>
        </div>
    </div>
    <!--modal-->
    <div class="hidden h-full w-full flex items-center border border-dark absolute top-0 z-50" id="wishlist" style="background-color: rgba(0, 0, 0,0.1)">
        <div class="border border-black bg-white mx-auto w-5/6 h-5/6 flex flex-col items-center">
            <div class="w-full bg-black h-10 flex items-center justify-end px-5"><i class="ri-user-fill text-white text-xl"></i>
                <div class="uppercase text-white inline-block mx-5">guest shpper</div><button data-type="modal"><i class="ri-close-line text-white text-xl"></i></button>
            </div>
            <div class="mt-10 flex justify-between w-11/12 border-b border-black pb-5 items-center"><button>
                    <div class="text-2xl uppercase">my wishlist</div>
                </button><i class="ri-more-2-line text-2xl"></i></div>
            <div class="text-xl uppercase mt-20">love it? add to my wishlist</div>
            <div class="p my-10 w-6/12">My Wishlist allows you to keep track of all of your favorites and shopping
                activity whether you're on your computer, phone, or tablet. You won't have to waste time searching all
                over again for that item you loved on your phone the other day - it's all here in one place!</div>
            <button class="p-2 px-5 border border-dark rounded-full uppercase bg-yellow-400">continue shopping</button>
        </div>
    </div>
    <!--slide-->
    <div class="hidden h-screen w-full flex items-center border border-dark absolute top-0 z-50" id="slidbar" style="background-color: rgba(0, 0, 0,0.3)">
        <div class="border-l border-black bg-white h-screen absolute right-0 top-0 w-8/12 flex">
            <div class="border-r border-black w-2/6 h-full">
                <div class="text-3xl uppercase text-center p-4 border-b border-black">anything else?</div>
                <div class="overflow-y-scroll h-full">
                    <div class="p-5 flex flex-col border-b border-black">
                        <a href="items.php?role=sneaker&type=nike&id=4">
                            <img src="./img/sneakers/nike/id4_1.png" alt="nike">
                            <div class="text-xl uppercase">PG 5</div>
                            <div class="uppercase">R 2,199.00</div>
                        </a>
                    </div>
                    <div class="p-5 flex flex-col border-b border-black">
                        <a href="items.php?role=sneaker&type=nike&id=5">
                            <img src="./img/sneakers/nike/id5_1.png" alt="nike">
                            <div class="text-xl uppercase">ZOOM AIR FIRE (W)</div>
                            <div class="uppercase">R 2,099.00</div>
                        </a>
                    </div>
                    <div class="p-5 flex flex-col border-b border-black">
                        <a href="items.php?role=sneaker&type=nike&id=6">
                            <img src="./img/sneakers/nike/id6_1.png" alt="nike">
                            <div class="text-xl uppercase">AIR HUARACHE (W)</div>
                            <div class="uppercase">R 2,199.00</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-4/6 px-3">
                <div class="flex justify-between p-4">
                    <div class="uppercase text-3xl">your bag</div><button class="hover:underline hover:text-gray-500" data-type="bag">close</button>
                </div>
                <div class="p-5 text-xl">Your bag is empty</div>
            </div>
        </div>
    </div>
    <!--footer-->
    <footer class="w-full bg-yellow-400 uppercase text-sm py-10 font-light mt-20">
        <div class="mx-10 flex flex-col items-center justify-between">
            <div class="w-full flex justify-between">
                <div class="join flex flex-col font-bold text-lg w-80">JOIN OUR COMMUNITY
                    <input class="mt-2 appearance-none rounded-sm border w-full py-2 px-3 bg-yellow-400 text-black border-black mb-3 leading-tight placeholder-black focus:outline-none focus:shadow-none" type="email" placeholder="EMAIL" required>
                </div>
                <div class="grid grid-cols-3 gap-2 gap-x-10 text-xs">
                    <a class="border border-transparent py-1 rounded-full hover:border-black transition-all" href="javascript:void(0)">about us
                    </a>
                    <a class="border border-transparent py-1 rounded-full hover:border-black transition-all" href="javascript:void(0)">privacy policy
                    </a>
                    <a class="border border-transparent py-1 rounded-full hover:border-black transition-all" href="javascript:void(0)">how
                        to order
                    </a>
                    <a class="border border-transparent py-1 rounded-full hover:border-black transition-all" href="javascript:void(0)">faq
                    </a>
                    <a class="border border-transparent py-1 rounded-full hover:border-black transition-all" href="javascript:void(0)">delivery policy
                    </a>
                    <a class="border border-transparent py-1 rounded-full hover:border-black transition-all" href="javascript:void(0)">tack your order
                    </a>
                    <a class="border border-transparent py-1 rounded-full hover:border-black transition-all" href="javascript:void(0)">contact us
                    </a>
                    <a class="border border-transparent py-1 rounded-full hover:border-black transition-all" href="javascript:void(0)">terms of use
                    </a>
                    <a class="border border-transparent py-1 rounded-full hover:border-black transition-all" href="javascript:void(0)">return & exchanges
                    </a>
                </div>
            </div><a class="w-full mb-20 mt-10" href="https://lemkus.com" title=""><svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 125.365 17.001" fill="white">
                    <g id="Small_Logo" transform="translate(-25 -19.5)">
                        <path class="cls-1" id="Path_1073" d="M5.791 1.779L0 18.125h16.209l1.524-4.492H8.368l3.893-11.854z" transform="translate(25 18.049)"></path>
                        <path class="cls-1" id="Path_1074" d="M134.961 18.125l2.7-8.1-6.624 5.814h-.116l-2.731-5.814-2.7 8.1h-6.653L122.8 6.53h-12.883l-.553 1.57h10.649l-1.307 3.947h-10.649l-.61 1.6h10.808l-1.482 4.483h-17.49l5.462-16.346h26.265l2.44 5.745 6.276-5.745h7.467l-5.462 16.346z" transform="translate(-56.041 18.049)"></path>
                        <path class="cls-1" id="Path_1331" d="M380.26 16.3c-1.918 1.541-4.823 2.148-8.048 2.148-5.723 0-8.8-2.2-8.8-5.884a8.6 8.6 0 0 1 .436-2.639l2.333-6.962-7.8 6.285 4.242 8.873h-7.233l-2.441-5.254-2.849 2.292-.988 2.966h-6.8l5.462-16.346h6.8L352.6 7.64l6.77-5.861h14.12l-2.847 8.5a4.5 4.5 0 0 0-.232 1.285c0 1.354.988 2.055 2.789 2.055a3.491 3.491 0 0 0 2.179-.677 4.716 4.716 0 0 0 1.453-2.382l2.934-8.78h6.915l-3.225 9.62a10.155 10.155 0 0 1-3.2 4.9" transform="translate(-254.418 18.049)"></path>
                        <path class="cls-1" id="Path_1332" d="M578.518 6.445c3.457 1.028 5.665 2.195 5.665 4.693a4.836 4.836 0 0 1-1.947 3.83C580.7 16.206 578.2 17 574.974 17a17.115 17.115 0 0 1-10.024-2.966l3.893-3.736a12.444 12.444 0 0 0 6.857 2.312c.872 0 1.482-.257 1.482-.724 0-.514-.378-.677-3.341-1.565-3.777-1.121-5.549-2.2-5.549-4.6a4.655 4.655 0 0 1 1.917-3.62A11.555 11.555 0 0 1 577.443 0a16.253 16.253 0 0 1 9.065 2.452l-3.893 3.736a11.245 11.245 0 0 0-5.869-1.822c-.872 0-1.482.187-1.482.654 0 .49.436.584 3.254 1.424" transform="translate(-436.143 19.5)"></path>
                    </g>
                </svg></a>
            <div class="w-full flex justify-between">
                <div class="credit">© 2021 JACK LEMKUS - ALL RIGHTS RESERVED</div>
                <div class="link grid gap-x-5 grid-cols-3">
                    <a class="border border-transparent text-center py-1 px-2 rounded-full hover:border-black transition-all" href="javascript:void(0)">instagram
                    </a>
                    <a class="border border-transparent text-center py-1 px-2 rounded-full hover:border-black transition-all" href="javascript:void(0)">twitter
                    </a>
                    <a class="border border-transparent text-center py-1 px-2 rounded-full hover:border-black transition-all" href="javascript:void(0)">facebook
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
<?php

ini_set("display_errors", 1);

require_once "./../sessionconfig.php";



if (authecheck()) {
  
    redirectto("./../login.php");
}



// redirectto("./login.php");

?>




<!DOCTYPE html>
<html class="">

<head>
    <title>Instagram</title>
    <!-- fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../tailwind.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body class="relative bg-white dark:bg-black">

    <aside class="sm:hidden  md:hidden lg:h-screen lg:block border-r-2 fixed">
        <div class="">
            <img src="./assets/img/instagramlogobgrm.png"
                class="sm:w-0 md:w-0 lg:w-32 ml-5 mt-8 cursor-pointer dark:hidden" alt="">
            <img src="./assets/img/instagramlogowhite.png"
                class="sm:w-0 md:w-0 lg:w-32 ml-5 mt-8 cursor-pointer dark:block hidden" alt="">

            <span class="sm:hidden md:hidden lg:hidden dark:text-white"><i
                    class="fa-brands fa-instagram text-2xl ml-5"></i></span>


            <div class="sm:hidden md:grid md:flex md:flex-col md:items-center  md:mt-7 lg:grid text-center mt-5">
                <button
                    class="md:w-12 md:h-12 md:mb-2 md:ml-2  md:hover:bg-gray-50 hover:rounded-full lg:w-56 lg:h-22 lg:mb-2 lg:flex lg:items-center  bg-light  text-start p-3  transition-all duration-200 hover:bg-gray-50  hover:rounded-3xl   dark:hover:bg-zinc-800 asidebtns ">
                    <a href="javascript:void(0);" class="font-bold md:mt-5 lg:mb-5 dark:text-white dark:-ml-2">
                        <i class="fa-solid fa-house text-xl md:ml-2 lg:mr-2 "></i> <span
                            class="md:invisible lg:visible">Home</span>
                    </a>
                </button>

                <button
                    class="md:w-12 md:h-12 md:mb-2 md:ml-2 md:hover:bg-gray-50 hover:rounded-full lg:w-56 lg:h-22 lg:mb-2  lg:flex lg:items-center bg-light  text-start p-3 transition-all duration-200 hover:bg-gray-50  hover:rounded-3xl dark:hover:bg-zinc-800 asidebtns">
                    <a href="javascript:void(0);" class="md:mt-5 lg:mb-5 dark:text-white dark:-ml-2">
                        <i class="fa-solid fa-magnifying-glass text-2xl md:ml-2 lg:mr-2"></i> <span
                            class="md:invisible lg:visible">Search</span>
                    </a>
                </button>

                <button
                    class=" md:w-12 md:h-12 md:mb-2 md:ml-2 md:hover:bg-gray-50 hover:rounded-full lg:w-56 lg:h-22 lg:mb-2  lg:flex lg:items-center  bg-light  text-start p-3  transition-all duration-200 hover:bg-gray-50  hover:rounded-3xl dark:hover:bg-zinc-800 asidebtns">
                    <a href="javascript:void(0);" class="md:mt-5 lg:mb-5 dark:text-white dark:-ml-2">
                        <i class="fa-regular fa-compass text-2xl md:ml-2 lg:mr-2"></i> <span
                            class="md:invisible lg:visible">Explore</span>
                    </a>
                </button>

                <button
                    class="md:w-12 md:h-12 md:mb-2 md:ml-2 md:hover:bg-gray-50 hover:rounded-full lg:w-56 lg:h-22 lg:mb-2  lg:flex lg:items-center   bg-light  text-start p-3 transition-all duration-200 hover:bg-gray-50  hover:rounded-3xl dark:hover:bg-zinc-800 asidebtns">
                    <a href="javascript:void(0);" class=" dark:text-white dark:-ml-2">
                        <img src="./assets/img/reel.png" class="w-6 inline md:ml-2 lg:mr-2 inline dark:hidden" alt="">
                        <span class="md:invisible lg:visible inline dark:hidden">Reels</span>
                        <img src="./assets/img/reelwhitebgrm.png"
                            class="w-6 inline md:ml-2 lg:mr-2  hidden  dark:inline" alt=""> <span
                            class="md:invisible lg:visible hidden dark:inline">Reels</span>
                    </a>
                </button>

                <button
                    class="md:w-12 md:h-12 md:mb-2 md:ml-2 md:hover:bg-gray-50 hover:rounded-full lg:w-56 lg:h-22 lg:mb-2  lg:flex lg:items-center  bg-light  text-start p-3 transition-all duration-200 hover:bg-gray-50  hover:rounded-3xl dark:hover:bg-zinc-800 asidebtns">
                    <a href="javascript:void(0);" class=" dark:text-white dark:-ml-2">
                        <img src="./assets/img/messenger.png" class="w-6 inline md:ml-2 lg:mr-2 inline dark:hidden"
                            alt=""> <span class="md:invisible lg:visible inline dark:hidden">Messages</span>
                        <img src="./assets/img/messengerbgrm.png" class="w-6 inline md:ml-2 lg:mr-2 hidden  dark:inline"
                            alt=""> <span class="md:invisible lg:visible hidden dark:inline">Messages</span>
                    </a>
                </button>

                <button
                    class="md:w-12 md:h-12 md:mb-2 md:ml-2 md:hover:bg-gray-50 hover:rounded-full md:block lg:w-56 lg:h-22 lg:mb-2  lg:flex lg:items-center  bg-light  text-start p-3  transition-all duration-200 hover:bg-gray-50  hover:rounded-3xl dark:hover:bg-zinc-800 asidebtns">
                    <a href="javascript:void(0);" class="md:mt-5 lg:mb-5 dark:text-white dark:-ml-2">
                        <i class="fa-regular fa-heart text-2xl md:ml-2 lg:mr-2"></i> <span
                            class="md:invisible lg:visible">Notifications</span>
                    </a>
                </button>

                <button
                    class="md:w-12 md:h-12 md:mb-2 md:ml-2 md:hover:bg-gray-50 hover:rounded-full lg:w-56 lg:h-22 lg:mb-2  lg:flex lg:items-center  bg-light  text-start p-3 transition-all duration-200 hover:bg-gray-50  hover:rounded-3xl dark:hover:bg-zinc-800 asidebtns">
                    <a href="javascript:void(0);" class="md:mt-5 lg:mb-5 dark:text-white dark:-ml-2 ">
                        <i class="fa-regular fa-square-plus text-2xl md:ml-2 lg:mr-2"></i> <span
                            class="md:invisible lg:visible">Create</span>
                    </a>
                </button>

                <button
                    class="md:w-12 md:h-12 md:mb-2 md:ml-2 md:hover:bg-gray-50 hover:rounded-full lg:w-56 lg:h-22 lg:mb-2  lg:flex lg:items-center  bg-light  text-start p-3 transition-all duration-200 hover:bg-gray-50  hover:rounded-3xl dark:hover:bg-zinc-800 asidebtns">
                    <a href="javascript:void(0);" class="md:mt-5 lg:mb-5 dark:text-white dark:-ml-2">
                        <img src="./assets/img/profile.jpg" class="w-6 rounded-full inline md:ml-2 lg:mr-2" alt="">
                        <span class="md:invisible lg:visible">Profile</span>
                    </a>
                </button>


                <button id="morebtns"
                    class="md:w-12 md:h-12 md:mb-2 md:ml-2 md:hover:bg-gray-50 hover:rounded-full lg:w-56 lg:h-22  bg-light  text-start p-3 mt-28  transition-all duration-200 hover:bg-gray-50  hover:rounded-3xl dark:hover:bg-zinc-800 asidebtns">
                    <a href="javascript:void(0);" class=" flex items-center  dark:text-white dark:-ml-2">
                        <i class="fa-solid fa-bars text-2xl md:ml-2 lg:mr-3"></i> <span
                            class="md:invisible lg:visible">More</span>
                    </a>
                </button>

            </div>

        </div>




    </aside>


    <!-- For SM  -->
    <div class="sm:block md:block lg:hidden m-0">
        <div class="border-b w-6/6 h-24  ml-10 dark:bg-zinc-800">
            <div class="w-full h-24  flex items-center relative dark:bg-black">
                <img src="./assets/img/instagramlogobgrm.png" class="w-32 ml-2 dark:hidden" alt="">
                <img src="./assets/img/instagramwhitebgrm.png" class="w-32 ml-2 dark:block hidden" alt="">


                <div class=" absolute right-12">
                    <input type="search" class="w-64  bg-stone-200 rounded-lg p-2 dark:bg-zinc-800 dark:text-stone-400"
                        placeholder="        Search">
                    <i class="fa-solid fa-magnifying-glass text-stone-400 p-1 absolute left-3 top-2"></i>
                </div>

                <span class="dark:text-white"><i
                        class="fa-regular fa-heart text-2xl ml-2 absolute right-1 bottom-8"></i></span>
            </div>
        </div>



        <div class="border-t border-white w-full h-24  fixed bottom-0 z-30 dark:bg-black">
            <div class="w-full h-24 bg-white flex justify-center items-center absolute  bottom-0 z-20 dark:bg-black">
                <div class="w-1/6 text-center dark:text-white">
                    <a href="javascript:void(0);" class="font-bold ">
                        <i class="fa-solid fa-house text-3xl md:ml-2 lg:mr-2"></i>
                    </a>
                </div>
                <div class="w-1/6 text-center dark:text-white">
                    <a href="javascript:void(0);" class="">
                        <i class="fa-regular fa-compass text-3xl md:ml-2 lg:mr-2"></i>
                    </a>
                </div>
                <div class="w-1/6 text-center">
                    <a href="javascript:void(0);" class="">
                        <img src="./assets/img/reel.png" class="w-8 inline md:ml-2 lg:mr-2  dark:hidden" alt="">
                        <img src="./assets/img/reelwhitebgrm.png" class="w-7 inline md:ml-2 lg:mr-2 hidden dark:block"
                            alt="">
                    </a>
                </div>
                <div class="w-1/6 text-center dark:text-white">
                    <a href="javascript:void(0);" class=" ">
                        <i class="fa-regular fa-square-plus text-3xl md:ml-2 lg:mr-2"></i>
                    </a>
                </div>
                <div class="w-1/6 text-center">
                    <a href="javascript:void(0);" class=" ">
                        <img src="./assets/img/messenger.png" class="w-9 inline md:ml-2 lg:mr-2 dark:hidden" alt="">
                        <img src="./assets/img/messengerbgrm.png" class="w-8 inline md:ml-2 lg:mr-2 hidden dark:block"
                            alt="">
                    </a>
                </div>
                <div class="w-1/6 text-center dark:text-white">
                    <a href="javascript:void(0);" class=" ">
                        <img src="./assets/img/profile.jpg" class="w-8 rounded-full inline md:ml-2 lg:mr-2" alt="">
                    </a>
                </div>



            </div>
        </div>


    </div>





    <div id="moresettings"
        class="w-64  bg-white rounded-2xl  border border-gray shadow-md mt-10 absolute left-4 top-72 z-10 dark:bg-zinc-800  moretoggles">
        <div
            class="border-b border-gray-200  rounded-tl-2xl rounded-tr-2xl  p-2  transition-all duration-200  hover:bg-gray-50 dark:border-none dark:hover:bg-zinc-900">
            <a href="javascript:void(0);" class="flex items-center  ml-4 dark:text-white">
                Settings
                <i class="fa-solid fa-gear text-xl ml-28"></i>
            </a>
        </div>

        <div
            class="border-b border-gray-200   p-2 transition-all duration-200  hover:bg-gray-50 dark:border-none dark:hover:bg-zinc-900">
            <a href="javascript:void(0);" class="flex items-center ml-4 dark:text-white">
                Your activity
                <i class="fa-solid fa-clock-rotate-left text-xl ml-20"></i>
            </a>
        </div>


        <div
            class="border-b border-gray-200  p-2 transition-all duration-200  hover:bg-gray-50 dark:border-none dark:hover:bg-zinc-900">

            <a href="javascript:void(0);" class="flex items-center ml-4 dark:text-white">
                Saved
                <i class="fa-regular fa-bookmark text-xl ml-32"></i>
            </a>

        </div>



        <div
            class="border-b border-gray-200    p-2 transition-all duration-200  hover:bg-gray-50 dark:border-none dark:hover:bg-zinc-900 darkmoodtog">
            <a href="javascript:void(0);" class="flex items-center ml-4 dark:text-white">
                Switch appearance
                <i class="fa-regular fa-moon text-2xl ml-9"></i>
            </a>
        </div>


        <div
            class="border-b border-gray-200   p-2 transition-all duration-200  hover:bg-gray-50 dark:border-none dark:hover:bg-zinc-900">
            <a href="javascript:void(0);" class="flex items-center ml-4 dark:text-white">
                Report a problem
                <i class="fa-solid fa-house-circle-exclamation text-xl ml-10"></i>
            </a>
        </div>



        <div
            class="border-t border-b border-gray-200   p-2 mt-1 transition-all duration-200  hover:bg-gray-50 dark:border-none dark:hover:bg-zinc-900">
            <a href="javascript:void(0);" class="flex items-center ml-4 dark:text-white">
                Switch acoounts
            </a>
        </div>


        <div id="logoutbtn"
            class="border-b border-gray-200  rounded-bl-2xl rounded-br-2xl  p-2 transition-all duration-200  hover:bg-gray-50 dark:border-none dark:hover:bg-zinc-900">

            <a href="./logout.php" class="flex items-center ml-4 dark:text-white" name="logout">
                Log out
            </a>

        </div>
    </div>



    <section id="socialface"
        class="sm:full  md:w-screen md:h-screen md:ml-1 md:justify-center lg:w-2/4 lg:h-full lg:ml-64 ">
        <div class="sm:w-full sm:ml-10  md:w-full md:text-center  lg:w-2/2 lg:ml-28 flex justify-start  cursor-pointer">
            <div>
                <div
                    class="md:w-24 md:h-24 md:mr-5  lg:w-16 lg:h-16 lg:mr-4 bg-gray-100 bg-gradient-to-l from-red-600 via-purple-600 via-red-600 to-yellow-600 rounded-full  mt-12 flex flex-col justify-center items-center">
                    <img src="./assets/img/story/aespa.jpg"
                        class=" md:w-20 md:border-2 lg:w-14  border lg:border-2 border-white rounded-full" alt="">
                </div>
                <span class="text-sm dark:text-white">aespa_offi..</span>

            </div>
            <div>
                <div
                    class="md:w-24 md:h-24 md:mr-5 lg:w-16 lg:h-16 lg:mr-4 bg-gray-100 bg-gradient-to-l from-red-600 via-purple-600 via-red-600 to-yellow-600 rounded-full  mt-12 flex justify-center items-center">
                    <img src="./assets/img/story/lisa.jpg"
                        class="md:w-20 md:border-2 lg:w-14 border lg:border-2 border-white rounded-full" alt="">
                </div>
                <span class="text-sm dark:text-white">lalalalisa..</span>
            </div>

            <div>
                <div
                    class="md:w-24 md:h-24 md:mr-5 lg:w-16 lg:h-16 lg:mr-4 bg-gray-100 bg-gradient-to-l from-red-600 via-purple-600 via-red-600 to-yellow-600 rounded-full  mt-12 flex justify-center items-center">
                    <img src="./assets/img/story/jisoo.png"
                        class="md:w-20 md:border-2 border border-2 lg:w-14 border-white rounded-full" alt="">
                </div>
                <span class="text-sm dark:text-white">sooyaa..</span>

            </div>


            <div>
                <div
                    class="md:w-24 md:h-24 md:mr-5 lg:w-16 lg:h-16 lg:mr-4 bg-gray-100 bg-gradient-to-l from-red-600 via-purple-600 via-red-600 to-yellow-600 rounded-full  mt-12 flex justify-center items-center">
                    <img src="./assets/img/story/rose.jpg"
                        class="md:w-20 md:border-2 border border-2 lg:w-14 border-white rounded-full" alt="">
                </div>
                <span class="text-sm dark:text-white">rose_are_ro..</span>
            </div>

            <div>
                <div
                    class="md:w-24 md:h-24 md:mr-5 lg:w-16 lg:h-16 lg:mr-4 bg-gray-100 bg-gradient-to-l from-red-600 via-purple-600 via-red-600 to-yellow-600 rounded-full  mt-12 flex justify-center items-center">
                    <img src="./assets/img/story/jennie.jpg"
                        class="md:w-20 md:border-2 border border-2 lg:w-14 border-white rounded-full" alt="">
                </div>
                <span class="text-sm dark:text-white">jennieruby..</span>
            </div>


            <div>
                <div
                    class="md:w-24 md:h-24 md:mr-5 lg:w-16 lg:h-16 lg:mr-4 bg-gray-100 bg-gradient-to-l from-red-600 via-purple-600 via-red-600 to-yellow-600 rounded-full  mt-12 flex justify-center items-center">
                    <img src="./assets/img/story/minnie.jpg"
                        class="md:w-20 md:border-2 border border-2 lg:w-14 border-white rounded-full" alt="">
                </div>
                <span class="text-sm dark:text-white">min.nich..</span>
            </div>


            <div>
                <div
                    class="md:w-24 md:h-24 md:mr-5 lg:w-16 lg:h-16 lg:mr-4 bg-gray-100 bg-gradient-to-l from-red-600 via-purple-600 via-red-600 to-yellow-600 rounded-full  mt-12 flex justify-center items-center">
                    <img src="./assets/img/story/miyeon.jpg"
                        class="md:w-20 md:border-2 border border-2 lg:w-14 border-white rounded-full" alt=""
                        width="59px">
                </div>
                <span class="text-sm dark:text-white">noddle.z..</span>
            </div>


            <div>
                <div
                    class="md:w-24 md:h-24 md:mr-5 lg:w-16 lg:h-16 lg:mr-4 bg-gray-100 bg-gradient-to-l from-red-600 via-purple-600 via-red-600 to-yellow-600 rounded-full  mt-12 flex justify-center items-center">
                    <img src="./assets/img/story/taeyeon.jpg"
                        class="md:w-20 md:border-2 border border-2 lg:w-14 border-white rounded-full" alt=""
                        width="59px">
                </div>
                <span class="text-sm dark:text-white">taeyeon_s..</span>
            </div>


        </div>



        <div
            class="sm:w-4/6 sm:h-screen sm:ml-36 md:w-5/5 md:h-screen   md:overflow-hidden lg:w-3/5 lg:h-screen  lg:ml-52 relative overflow-hidden">
            <div class="sm:3/5 sm:h-3/4 md:5/5 md:h-2/5 lg:w-full lg:h-2/3 border-b mt-12 relative">

                <div class="flex items-center">
                    <div
                        class="w-10 h-10 bg-gray-100 bg-gradient-to-l from-red-600 via-purple-600 via-red-600 to-yellow-600 rounded-full mr-2 flex justify-center items-center">
                        <img src="./assets/img/story/aespa.jpg" class="border border-2 rounded-full" alt=""
                            width="35px">
                    </div>

                    <div class="h-8">
                        <span class="text-sm hover:text-zinc-400 dark:text-white postacc">aespa_official</span>
                        <i class="fa-solid fa-circle-check text-blue-500 text-xs mr-4"></i>

                        <i
                            class="fa-solid fa-ellipsis sm:absolute sm:right-1 text-xl ml-64  hover:text-zinc-400 dark:text-white dark:hover:text-zinc-500 ellipsisbtn"></i>
                    </div>

                    <!-- Hover  -->
                    <div
                        class="sm:bottom-32 md:bottom-72 lg:bottom-20 w-96 h-96  bg-white border-2 rounded-lg shadow-lg hidden transition-all duration-100 absolute left-12  z-10 dark:bg-black hoveracc">
                        <div class="w-full ml-3 mt-5 flex items-center dark:text-white">
                            <div
                                class="w-16 h-16 bg-gray-100 bg-gradient-to-l from-red-600 via-purple-600 via-red-600 to-yellow-600 rounded-full mr-3 flex justify-center items-center">
                                <img src="./assets/img/story/aespa.jpg"
                                    class="border border-2 border-white rounded-full" alt="" width="59px">
                            </div>

                            <div>
                                <span class="text-md font-bold dark:text-white">aespa_official</span>
                                <i class="fa-solid fa-circle-check text-blue-500 text-sm mr-4"></i>
                                <div class="text-zinc-400">aespa 에스파 </div>

                            </div>
                        </div>


                        <div class="w-full  mt-5 flex dark:text-white">
                            <div class="w-1/3 flex flex-col items-center">
                                <div class="font-bold">1,362</div>
                                <span class="text-sm">posts</span>
                                <img src="./assets/img/post/aespa1.jpg" class="w-full mt-8" alt="">
                            </div>
                            <div class="w-1/3 flex flex-col items-center">
                                <div class="font-bold">10M</div>
                                <span class="text-sm">Followers</span>
                                <img src="./assets/img/post/aespa2.jpg" class="w-full mt-8" alt="">
                            </div>
                            <div class="w-1/3 flex flex-col items-center">
                                <div class="font-bold">1</div>
                                <span class="text-sm">Following</span>
                                <img src="./assets/img/post/aespa3.jpg" class="w-full mt-8" alt="">
                            </div>
                        </div>


                        <div class="w-full mt-6 flex">
                            <div class="w-1/2 flex justify-center">
                                <button
                                    class="w-4/5 h-8 bg-blue-400 rounded-lg flex justify-center items-center hover:bg-blue-500">
                                    <img src="./assets/img/messengerbgrm.png" width="25px" alt="">
                                    <span class="text-white ml-1">Message</span>
                                </button>
                            </div>

                            <div class="w-1/2 flex justify-center">
                                <button
                                    class="w-4/5 h-8 bg-stone-200 rounded-lg flex justify-center items-center hover:bg-stone-300">Following</button>
                            </div>

                        </div>


                    </div>


                </div>







                <div class="sm:mt-4 md:mt-4 lg:mt-2 relative">
                    <img src="./assets/img/post/minjeong2.jpg"
                        class="rounded-sm  absolute  left-full socialpost postaespa" alt="">
                    <img src="./assets/img/post/minjeong.jpg" class="rounded-sm absolute left-full socialpost" alt="">
                    <img src="./assets/img/post/minjeong3.jpg" class="rounded-sm absolute left-full socialpost" alt="">
                    <img src="./assets/img/post/ning ning.jpg" class="rounded-sm absolute  left-full socialpost" alt="">
                    <img src="./assets/img/post/gandk.jpg" class="rounded-sm absolute left-full socialpost" alt="">

                    <div
                        class="sm:inset-x-52 sm:inset-y-72 md:inset-x-80 md:inset-y-96 lg:inset-x-52 lg:inset-y-72 w-28 flex absolute">
                        <div class="w-2 h-2 bg-zinc-400 rounded-full mr-1 dots active-color"></div>
                        <div class="w-2 h-2 bg-zinc-400 rounded-full mr-1 dots"></div>
                        <div class="w-2 h-2 bg-zinc-400 rounded-full mr-1 dots"></div>
                        <div class="w-2 h-2 bg-zinc-400 rounded-full mr-1 dots"></div>
                        <div class="w-2 h-2 bg-zinc-400 rounded-full dots"></div>
                    </div>

                    <div class="">
                        <i
                            class="fa-solid fa-circle-chevron-right md:inset-y-52 lg:inset-y-32 text-blue-100 text-xl absolute   right-3"></i>
                        <i
                            class="fa-solid fa-circle-chevron-left md:inset-y-52 lg:inset-y-32 text-gray-100 text-xl hidden absolute   left-3"></i>

                    </div>
                </div>



                <span class="dark:text-white heartnoti"><i id="blankheart"
                        class="fa-regular fa-heart sm:bottom-32 md:bottom-40 lg:bottom-24 text-2xl  mr-2 absolute left-0 bottom-24 "></i></span>
                <span class="dark:text-white"><i
                        class="fa-regular fa-comment sm:bottom-32 md:bottom-40 lg:bottom-24  text-2xl mr-2 absolute left-10 bottom-24"></i></span>
                <span class="dark:text-white"><i
                        class="fa-regular fa-paper-plane sm:bottom-32 md:bottom-40 lg:bottom-24  text-2xl mr-2 absolute left-20 bottom-24"></i></span>
                <span class="dark:text-white savedmark "><i id="bookmark"
                        class="fa-regular fa-bookmark sm:bottom-32 md:bottom-40 lg:bottom-24 text-2xl absolute right-0 bottom-24"></i></span>


                <div class="sm:bottom-16 md:bottom-24 lg:bottom-10 absolute dark:text-white">
                    <span>Like by <b>exyhmym_04</b> and <b>others</b></span>

                    <div class="sm:mt-3 md:mt-2 lg:mt-1 text-zinc-400 text-sm mt-1">View All 2,100 comments</div>
                </div>

                <div class="sm:bottom-8 md:bottom-12 lg:bottom-3 w-full text-sm flex items-center absolute">
                    <input type="text" id="comment" class="w-4/5 focus:outline-none dark:bg-black dark:text-white"
                        placeholder="Add a comment...">
                    <button type="submit"
                        class="text-sm text-blue-400 font-bold hidden absolute right-6 hover:text-black commentsubmit">Post</button>
                    <span class="text-lg absolute right-0 dark:text-white">☺️</span>
                </div>



            </div>

            <!-- Lalisa  -->

            <div class=" sm:3/5 sm:h-3/4 md:5/5 md:h-2/5 lg:w-full lg:h-2/3 border-b mt-12 relative">
                <div class="flex items-center ">
                    <div
                        class="w-10 h-10 bg-gray-100 bg-gradient-to-l from-red-600 via-purple-600 via-red-600 to-yellow-600 rounded-full mr-2 flex justify-center items-center">
                        <img src="./assets/img/story/lisa.jpg" class="border border-2 rounded-full" alt="" width="35px">
                    </div>

                    <div class="h-8">
                        <span class="text-sm hover:text-zinc-400 dark:text-white postacc">lalalalisa_m</span>
                        <i class="fa-solid fa-circle-check text-blue-500 text-xs mr-4"></i>

                        <i
                            class="fa-solid fa-ellipsis sm:absolute sm:right-1 text-xl ml-64  hover:text-zinc-400 ellipsisbtn"></i>
                    </div>



                    <!-- Hover  -->
                    <div
                        class="sm:bottom-32 md:bottom-72 lg:-top-96 w-96 h-96  bg-white border-2 rounded-lg shadow-lg hidden transition-all duration-100 absolute left-12  z-10 dark:bg-black hoveracc">
                        <div class="w-full ml-3 mt-5 flex items-center">
                            <div
                                class="w-16 h-16 bg-gray-100 bg-gradient-to-l from-red-600 via-purple-600 via-red-600 to-yellow-600 rounded-full mr-3 flex justify-center items-center">
                                <img src="./assets/img/story/lisa.jpg" class="border border-2 border-white rounded-full"
                                    alt="" width="59px">
                            </div>

                            <div>
                                <span class="text-md font-bold dark:text-white">lalalalisa_m</span>
                                <i class="fa-solid fa-circle-check text-blue-500 text-sm mr-4"></i>
                                <div class="text-zinc-400">LISA </div>

                            </div>
                        </div>


                        <div class="w-full  mt-5 flex dark:text-white">
                            <div class="w-1/3 flex flex-col items-center">
                                <div class="font-bold">959</div>
                                <span class="text-sm">posts</span>
                                <img src="./assets/img/post/lisa3.jpg" class="w-full mt-8" alt="">
                            </div>
                            <div class="w-1/3 flex flex-col items-center">
                                <div class="font-bold">90M</div>
                                <span class="text-sm">Followers</span>
                                <img src="./assets/img/post/lisa2.jpg" class="w-full mt-8" alt="">
                            </div>
                            <div class="w-1/3 flex flex-col items-center">
                                <div class="font-bold">0</div>
                                <span class="text-sm">Following</span>
                                <img src="./assets/img/post/lisa1.jpg" class="w-full mt-8" alt="">
                            </div>
                        </div>


                        <div class="w-full mt-6 mb-4 flex">
                            <div class="w-1/2 flex justify-center">
                                <button
                                    class="w-4/5 h-8 bg-blue-400 rounded-lg flex justify-center items-center hover:bg-blue-500">
                                    <img src="./assets/img/messengerbgrm.png" width="25px" alt="">
                                    <span class="text-white ml-1">Message</span>
                                </button>
                            </div>

                            <div class="w-1/2 flex justify-center">
                                <button
                                    class="w-4/5 h-8 bg-stone-200 rounded-lg flex justify-center items-center hover:bg-stone-300">Following</button>
                            </div>

                        </div>


                    </div>


                </div>







                <div class="sm:mt-4 md:mt-4 lg:mt-2 relative">
                    <img src="./assets/img/story/lisa.jpg" alt="">


                </div>



            </div>



        </div>

    </section>


    <section id="accountprofile"
        class="sm:hidden md:hidden lg:block lg:w-1/3 lg:h-full absolute right-0 top-0 dark:text-white">
        <div class="ml-12">

            <div class="flex items-center mt-14">
                <img src="./assets/img/profile.jpg" class="rounded-full" alt="" width="55px">
                <div class="ml-5">
                    <div class="text-sm">aitch_04</div>
                    <div class="text-zinc-400">H</div>
                </div>
                <a href="javascript:void" class="text-blue-400 text-xs ml-40">Switch</a>
            </div>

            <div class="mt-4">
                <span class="text-gray-600 text-sm mr-6">Suggesstions for you</span>
                <a href="javascript:void" class="text-xs text-black ml-32">See All</a>
            </div>

            <div class="flex items-center mt-3">
                <img src="./assets/img/suggest/user1.jpg" class="rounded-full" alt="" width="35px">
                <div class="ml-5">
                    <div class="text-sm">smoothy_p</div>
                    <div class="text-zinc-400 text-xs mr-6">Follows you</div>
                </div>
                <a href="javascript:void" class="text-blue-400 text-xs ml-36">Follow</a>
            </div>

            <div class="flex items-center mt-3">
                <img src="./assets/img/suggest/user2.jpg" class="rounded-full" alt="" width="35px">
                <div class="ml-5">
                    <div class="text-sm">jullia1356</div>
                    <div class="text-zinc-400 text-xs mr-7">Followed by smoothy_p , jasminenene</div>
                </div>
                <a href="javascript:void" class="text-blue-400 text-xs ">Follow</a>
            </div>

            <div class="flex items-center mt-3">
                <img src="./assets/img/suggest/user3.jpg" class="rounded-full" alt="" width="35px">
                <div class="ml-5">
                    <div class="text-sm">daliaa806</div>
                    <div class="text-zinc-400 text-xs mr-9">Followed by smoothy_p , damikhine..</div>
                </div>
                <a href="javascript:void" class="text-blue-400 text-xs ">Follow</a>
            </div>

            <div class="flex items-center mt-3">
                <img src="./assets/img/suggest/user4.jpg" class="rounded-full" alt="" width="35px">
                <div class="ml-5">
                    <div class="text-sm">darlin_lae</div>
                    <div class="text-zinc-400 text-xs mr-12">Followed by dankiya , jasminene.....</div>
                </div>
                <a href="javascript:void" class="text-blue-400 text-xs">Follow</a>
            </div>

            <div class="flex items-center mt-3">
                <img src="./assets/img/suggest/user5.jpg" class="rounded-full" alt="" width="35px">
                <div class="ml-5">
                    <div class="text-sm">swam.htet</div>
                    <div class="text-zinc-400 text-xs mr-12">Followed by dankiya , naychikyaw...</div>
                </div>
                <a href="javascript:void" class="text-blue-400 text-xs">Follow</a>
            </div>



            <div class="ml-2 mt-4">
                <a href="javascript:void(0)" class="text-zinc-400 text-xs hover:border-b">About . </a>
                <a href="javascript:void(0)" class="text-zinc-400 text-xs hover:border-b">Help . </a>
                <a href="javascript:void(0)" class="text-zinc-400 text-xs hover:border-b">Press . </a>
                <a href="javascript:void(0)" class="text-zinc-400 text-xs hover:border-b">API . </a>
                <a href="javascript:void(0)" class="text-zinc-400 text-xs hover:border-b">Jobs . </a>
                <a href="javascript:void(0)" class="text-zinc-400 text-xs hover:border-b">Pravicy . </a>
                <a href="javascript:void(0)" class="text-zinc-400 text-xs hover:border-b">Terms . </a>
                <a href="javascript:void(0)" class="text-zinc-400 text-xs hover:border-b">Locations . </a> <br>
                <a href="javascript:void(0)" class="text-zinc-400 text-xs ">Language . </a>
                <a href="javascript:void(0)" class="text-zinc-400 text-xs hover:border-b">Meta Verified . </a>
            </div>

            <div class="text-zinc-400 ml-2 mt-4">
                <p class="text-xs uppercase">&copy;<span id="autoyear"></span> instagram clone from <a
                        href="https://www.instagram.com/aitch_04/">Aitch</a></p>
            </div>


        </div>
    </section>



    <section id="modal" class="w-full h-screen invisible fixed  top-0 z-20 modals">
        <div class="modialdialog w-full h-screen flex justify-center items-center  ">
            <div class="w-96  bg-gray-100 rounded-2xl  border border-gray shadow-md dark:bg-zinc-800 dark:border-none">
                <div
                    class=" border-b  p-3 rounded-tl-2xl rounded-tr-2xl  flex flex-col items-center hover:bg-gray-50 dark:border-zinc-700 dark:hover:bg-zinc-800">
                    <a href="javascript:void(0);" class="flex items-center text-red-600  font-bold">
                        Report
                    </a>

                </div>

                <div
                    class=" border-b p-3 flex flex-col items-center hover:bg-gray-50 dark:border-zinc-700 dark:hover:bg-zinc-800">
                    <a href="javascript:void(0);" class="flex items-center text-red-600 font-bold">
                        Unfollow
                    </a>
                </div>


                <div
                    class="   border-b p-3 flex flex-col items-center hover:bg-gray-50 dark:border-zinc-700 dark:hover:bg-zinc-800 dark:text-white">
                    <a href="javascript:void(0);" class="flex items-center">
                        Add to favorites
                    </a>
                </div>



                <div
                    class="  border-b p-3 flex flex-col items-center  hover:bg-gray-50 dark:border-zinc-700 dark:hover:bg-zinc-800 dark:text-white">
                    <a href="javascript:void(0);" class="flex items-center">
                        Go to post
                    </a>
                </div>


                <div
                    class=" border-b p-3 flex flex-col items-center hover:bg-gray-50 dark:border-zinc-700 dark:hover:bg-zinc-800 dark:text-white">
                    <a href="javascript:void(0);" class="flex items-center">
                        Share to...
                    </a>
                </div>

                <div
                    class=" border-b p-3 flex flex-col items-center hover:bg-gray-50 dark:border-zinc-700 dark:hover:bg-zinc-800 dark:text-white">
                    <a href="javascript:void(0);" class="flex items-center">
                        Copy link
                    </a>
                </div>

                <div
                    class=" border-b p-3 flex flex-col items-center hover:bg-gray-50 dark:border-zinc-700 dark:hover:bg-zinc-800 dark:text-white">
                    <a href="javascript:void(0);" class="flex items-center">
                        Embed
                    </a>
                </div>

                <div
                    class=" border-b p-3 flex flex-col items-center hover:bg-gray-50 dark:border-zinc-700 dark:hover:bg-zinc-800 dark:text-white">
                    <a href="javascript:void(0);" class="flex items-center">
                        About this acc
                    </a>
                </div>


                <div
                    class=" p-3 rounded-bl-2xl rounded-br-2xl  flex flex-col items-center hover:bg-zinc-200 dark:border-zinc-700 dark:hover:bg-zinc-800  dark:text-white cancelbtn">
                    <a href="javascript:void(0);" class="flex items-center">
                        Cancel
                    </a>
                </div>




            </div>
        </div>
    </section>


    <script src="./app.js"></script>

</body>

</html>
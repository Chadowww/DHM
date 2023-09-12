<script setup>

import ButtonContact from "./ButtonContact.vue";
document.addEventListener("DOMContentLoaded", function () {
    let homebutton = document.querySelector(".nav-home");
    let tarifsbutton = document.querySelector(".nav-tarifs");
    let contactbutton = document.querySelector(".nav-contact");

    if (window.location.pathname === "/") {
        console.log(homebutton);
        homebutton.classList.add("text-[#37a6dd]");
        homebutton.classList.remove("text-white/90");
    } else if (window.location.pathname === "/tarifs") {
        tarifsbutton.classList.add("[#37a6dd]");
        tarifsbutton.classList.remove("text-white/90");
    } else if (window.location.pathname === "/contact") {
        contactbutton.classList.add("text-[#37a6dd]");
        contactbutton.classList.remove("text-white/90");
    }
});
</script>

<template>
    <div class="fixed z-[1055] w-full bg-[#353434] h-32 shadow-lg">
        <div class="header-nav flex lg:w-1/2 justify-evenly m-auto pt-2">
            <div class="flex">
                <button
                    type="button"
                    class="flex"
                    data-te-toggle="modal"
                    data-te-target="#exampleModal"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-5 h-5 mx-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <p class="hidden md:block">43 rue Thiers 33500 Libourne</p>
                </button>
            </div>
            <a href="tel:+330557253201" class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-5 h-5 mx-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                <p class="hidden md:block">05 57 25 32 01</p>
            </a>
            <a href="mailto:contact@dhminformatique.fr" class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-5 h-5 mx-1">
                    <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                </svg>
                <p class="hidden md:block">contact@dhminformatique.fr</p>
            </a>
        </div>
        <!-- Main navigation container -->
        <nav
            class="relative flex w-full flex-nowrap items-center justify-between  py-2 text-neutral-500  hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:flex-wrap lg:justify-start lg:py-4"
            data-te-navbar-ref>
            <div class="flex w-full flex-wrap items-center justify-between px-3">
                <!-- Hamburger button for mobile view -->
                <button
                    class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
                    type="button"
                    data-te-collapse-init
                    data-te-target="#navbarSupportedContent8"
                    aria-controls="navbarSupportedContent8"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <!-- Hamburger icon -->
                    <span class="[&>svg]:w-7">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-7 w-7">
          <path
              fill-rule="evenodd"
              d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
              clip-rule="evenodd" />
        </svg>
      </span>
                </button>

                <!-- Collapsible navbar container -->
                <div
                    class="!visible mt-2 hidden flex-grow basis-[100%] items-center justify-around lg:mt-0 lg:!flex lg:basis-auto"
                    id="navbarSupportedContent8"
                    data-te-collapse-item>
                    <!-- Left links -->
                    <div class="w-1/3 flex justify-center">
                        <img src="/images/logo.png" class="h-10" alt="logo dhm informatique">
                    </div>

                    <ul
                        class="w-1/3 list-style-none flex flex-col pl-0 lg:mt-1 lg:flex-row"
                        data-te-navbar-nav-ref>
                        <!-- Home link -->
                        <li
                            class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1"
                            data-te-nav-item-ref>
                            <a
                                class="nav-home lg:px-2 hover:text text-white/90 active:underline  dark:[&.active]:text-neutral-400 font-bold"
                                aria-current="page"
                                href="/"
                                data-te-nav-link-ref
                            >Accueil</a
                            >
                        </li>
                        <!-- Link -->
                        <li
                            class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-1"
                            data-te-nav-item-ref>
                            <a
                                class="nav-contact p-0 text-white/90 transition duration-200 motion-reduce:transition-none font-bold
                                 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2
                                 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                                href="/contact"
                                data-te-nav-link-ref
                            >Contact</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<style scoped>

</style>

<template>
    <div class="flex justify-between px-20">
        <div class="flex flex-col justify-center">
            <div class="pb-5">
                <h1 class="text-6xl font-bold "> <span class="text-blue-950">Notre</span> <span class="text-rose-500">vision</span></h1>
            </div>
            <p class="text-xl">
                « Promotion de l'inclusion et d'utilisation des Nouvelles Technologies de l'Information<br> 
                 et de la Communication (NTIC) pour les citoyens, en particulier les jeunes, les femmes<br> 
                 et les personnes vulnérables. »
            </p>
        </div>
        <div class="pr-24 ">
            <img src="images/creative-writing.svg" alt="creativeImages">
        </div>
    </div>
    <div class="flex justify-center items-center pt-16 pb-11">
        <h1 class="text-6xl font-bold "> <span class="text-blue-950">Nos</span> <span class="text-rose-500">valeurs</span></h1>
    </div>
    <div class="flex flex-row text-4xl justify-between px-20 ">
        <div class="bg-gray-200 flex flex-col justify-between items-center space-y-10 p-36 ">
            <div>
                <img src="images/icons/Fingerprint.svg" alt="Fingerprint">
            </div>
            <p class="text-center font-bold ">Inclusion</p>
        </div>                   
        <div class="bg-rose-500 flex flex-col justify-between items-center space-y-10 p-36 ">
            <div>
                <img src="images/icons/Dev.svg" alt="Dev">
            </div>
            <p class="text-center text-white font-bold ">Innovation</p>
        </div>
        <div class="bg-gray-200 flex flex-col justify-between items-center space-y-10 p-36 ">
            <div>
                <img src="images/icons/Fusée.svg" alt="Fusée">
            </div>
            <p class="text-center font-bold">Solidarité</p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Vision"
    }
</script>
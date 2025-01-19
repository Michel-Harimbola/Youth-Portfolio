<template>
    <div class="flex justify-between px-20">
        <div class="flex flex-col justify-center">
            <div class="pb-5">
                <h1 class="text-6xl font-bold "> <span class="text-bleu">Nos </span> <span class="text-fuchsia">missions</span></h1>
            </div>
            <p class="text-xl">
                Renforcer les capacités en Technologie numérique des gens pour améliorer<br> 
                l’éducation et l’entreprenariat.<br> 
                Faciliter l'accès aux NTIC et sensibiliser à leur utilisation, tout en établissant<br> 
                des liens solides avec les passionnés du domaine.
            </p>
        </div>
        <div class="pr-20">
            <img src="images/analytics.svg" alt="creativeImages" style="width: 550px;">
        </div>
    </div>
    <div class="flex justify-center items-center pt-16 pb-11">
        <h1 class="text-6xl font-bold "> <span class="text-bleu">Nos</span> <span class="text-fuchsia">valeurs</span></h1>
    </div>
    <div class="flex flex-row text-4xl justify-between px-20 ">
        <div class="bg-gray-200 flex flex-col justify-between items-center space-y-10 p-36 ">
            <div>
                <img src="images/icons/Fingerprint.svg" alt="Fingerprint">
            </div>
            <p class="text-center font-bold ">Inclusion</p>
        </div>                   
        <div class="bg-fuchsia flex flex-col justify-between items-center space-y-10 p-36 ">
            <div>
                <img src="images/icons/Dev.svg" alt="Dev">
            </div>
            <p class="text-center text-white font-bold ">Innovation</p>
        </div>
        <div class="bg-gray-200 flex flex-col justify-between items-center space-y-10 p-36 ">
            <div>
                <img src="images/icons/Fusée.svg" alt="Fusée">
            </div>
            <p class="text-center font-bold">Collaboration</p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Vision"
    }
</script>
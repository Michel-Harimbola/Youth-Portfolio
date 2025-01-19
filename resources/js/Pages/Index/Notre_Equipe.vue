<template>
    <div class=" space-y-16 p-20">
        <div class="flex flex-col justify-center space-y-5 items-center">
            <div class="align-self-start">
                <h1 class="text-6xl font-bold"> <span class="text-bleu">Rencontrez</span> <span class="text-fuchsia">notre équipe</span></h1>
            </div>
            <p class="text-center text-xl">Pourvu que c'est une association, elle comporte beaucoup de participants qui jouent<br>
               chacunes des rôles importantes pour notre association.</p>
        </div>

        <div class="flex flex-row text-xl justify-between">
            <div class="bg-gray-100 rounded-md pt-96">
                <div class="bg-bleu rounded-b-lg flex flex-col justify-center py-5 px-24 space-y-3">
                    <h1 class="text-3xl text-fuchsia text-center font-black ">Papeo Miantsa</h1>
                    <p class="text-center text-white">Lorem ipsum</p>
                </div>
            </div>                   
            <div class="bg-gray-100 rounded-lg pt-96">
                <div class="bg-bleu rounded-b-lg flex flex-col justify-center py-5 px-24 space-y-3">
                    <h1 class="text-3xl text-fuchsia text-center font-black ">Mioratiana Linah</h1>
                    <p class="text-center text-white ">Lorem ipsum</p>
                </div>
            </div>
            <div class="bg-gray-100 rounded-lg pt-96">
                <div class="bg-bleu rounded-b-lg flex flex-col justify-center py-5 px-24 space-y-3">
                    <p class="text-3xl text-fuchsia text-center font-black">Francis Omega</p>
                    <p class="text-center text-white">Lorem ipsum</p>
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center space-x-5">
            <div class="bg-fuchsia rounded-full h-3 w-3"></div>
            <div class="bg-gray-300 rounded-full h-3 w-3"></div>
            <div class="bg-gray-300 rounded-full h-3 w-3"></div>
            <div class="bg-gray-300 rounded-full h-3 w-3"></div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Notre_Equipe"
    }
</script>
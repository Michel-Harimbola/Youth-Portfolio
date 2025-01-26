<template>
    <div class="fixed flex text-lg text-white font-bold -mt-4">
        <Link href="/" class="bg-blue-950 pl-3 pr-8 hover:scale-110 duration-200 clip-triangle z-20 ">Accueil</Link>
        <p class="bg-rose-500 px-5 clip-triangle -ml-3">Historique</p>
    </div>

    <div class="flex justify-center mt-5">
        <h1 class="text-6xl text-blue-950 font-bold">Notre <span class="text-rose-500">Historique</span></h1>
    </div>
    <div class="grid grid-cols-3 gap-20 text-lg m-10">
        <div v-for="Historic in all_Historic" :key="Historic.id" class="bg-gray-300 flex flex-col justify-center items-center p-6 rounded-2xl">
            <img :src="`/storage/${Historic.images}`" alt="images" class="w-96 ">
            <h1 class="text-2xl font-semibold text-rose-500 mt-5">
                {{ Historic.title }}
            </h1>
            <div>
                <p class="text-xl font-semibold mt-3">
                    Description:
                </p>
                <p class="w-96">
                    {{ Historic.description}}
                </p>  
                <p>
                    <span class="text-xl font-semibold">Location:</span> 
                    {{ Historic.location }}
                </p>
                <p>
                    <span class="text-xl font-semibold">Date: </span>
                    {{ Historic.date }}
                </p>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<script>
    export default {
        props :{
            all_Historic:Array,
        }
    }
</script>
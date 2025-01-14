<template>
    <div class="flex flex-col justify-center items-center space-y-7 mb-12">
        <h1 class="font-black text-6xl text-blue-950 ">Nos <span class="text-rose-600">réalisations</span></h1>
        <p class="text-center text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, corporis! Assumenda facere possimus cum dolorum dignissimos <br> 
           debitis facilis sed,harum incidunt voluptatibus mollitia modi sunt culpa tenetur suscipit.</p>
    </div>
    <div class="flex justify-between mx-40">
        <div v-for="realisation in realisations" :key="realisation.id">
            <img :src="`/storage/${realisation.images}`" class="rounded-3xl w-96">
            <div class=" relative flex flex-col justify-center items-center bg-gray-300 mx-28 py-5 -mt-14">
                <p class="text-xl font-semibold">{{ realisation.title.toUpperCase() }}</p>
                <Link href="/Realisation" class="flex mt-3 hover:scale-105 duration-200">
                    <p>Voir plus</p>
                    <img src="/images/arrow.svg" alt="arrow" class="w-9 h-8">
                </Link>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<script>
    export default {
        name: "Realisation",
        props: {
            realisations: Array,
        }
    }
</script>
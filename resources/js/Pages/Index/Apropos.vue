<template>
    <div class="mt-12">
        <Notre_Equipe /> 
    </div>
    <div class="flex items-cente h-20 ml-20">
       <div class="bg-fuchsia w-3"></div>
       <div class="bg-bleu text-white flex justify-center items-center pl-5 pr-20">
           <p class="font-black text-5xl">Nos Historique</p>
       </div>
    </div>
    <div class="flex items-center justify-between m-20">
        <div v-for="historic in Historics" :key="historic.id">
            <img :src="`/storage/${historic.images}`" class="w-[420px] h-[520px]">
        </div>
    </div>
    <div class="flex justify-center">
       <Link href="/Historic" class="bg-bleu hover:scale-105 duration-300 text-white text-2xl font-bold px-10 py-3 mb-20 -mt-6">VOIR PLUS</Link>
    </div>
</template>

<script>
    export default {
        name:"Apropos",
        layout:MainLayout,

        compenents: {
            Notre_Equipe,
        },

        props: {
            Historics: Array,
        }
    };
</script>

<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import Notre_Equipe from './Notre_Equipe.vue';
import { Link } from '@inertiajs/vue3';
</script>
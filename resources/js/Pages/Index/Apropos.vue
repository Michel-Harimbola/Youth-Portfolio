<template>
    <div class="mt-12">
        <Notre_Equipe /> 
    </div>
    <div class="flex justify-center">
       <button class="bg-bleu hover:scale-105 duration-300 text-white text-2xl font-bold px-10 py-3 mb-4">VOIR PLUS</button>
    </div>
</template>

<script>
    export default {
        name:"Apropos",
        layout:MainLayout,

        compenents: {
            Notre_Equipe,
        },
    };
</script>

<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import Notre_Equipe from './Notre_Equipe.vue';
</script>
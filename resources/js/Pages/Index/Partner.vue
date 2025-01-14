<template>
    <div class="space-y-10">
        <div class="px-24 py-8 space-y-12 ">
            <div class="flex items-cente h-20 ml-[-10px]">
               <div class="bg-rose-500 w-3"></div>
               <div class="bg-blue-950 text-white flex justify-center items-center pl-5 pr-20">
                   <p class="font-black text-5xl">Nos partenaires</p>
               </div>
            </div>
            <div class="flex justify-between items-center">
                <div v-for="partner in partners" :key="partner.id">
                    <img :src="`/storage/${partner.images}`">
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-24 px-20">
           <div v-for="n in 6" class="bg-gray-200 py-72"></div>
        </div>
        <div class="flex justify-center">
           <button class="bg-blue-950 hover:bg-blue-800 hover:scale-105 duration-300 text-white text-2xl font-bold px-10 py-3 mb-4">VOIR PLUS</button>
        </div>
    </div>
</template>

<script>
    export default {
        name:"Partner",
        props: {
            partners: Array,
        }
    }
</script>
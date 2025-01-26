<template>
    <div class="space-y-10">
        <div class="px-24 py-8 space-y-12">
            <div class="flex items-cente h-20 ml-[-10px]">
               <div class="bg-fuchsia w-3"></div>
               <div class="bg-bleu text-white flex justify-center items-center pl-5 pr-20">
                   <p class="font-black text-5xl">Nos partenaires</p>
               </div>
            </div>
            <div class="flex justify-between items-center">
                <div v-for="partner in partners" :key="partner.id">
                    <img :src="`/storage/${partner.images}`" alt="Image">
                </div>
            </div>
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
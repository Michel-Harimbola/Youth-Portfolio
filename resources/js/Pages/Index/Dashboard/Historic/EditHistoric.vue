<script setup>
    import { router, useForm } from '@inertiajs/vue3';

    const props = defineProps({
        errors: Object,
        Historic: Object,
    })
    
    const form = useForm({
        title:props.Historic.title,
        description:props.Historic.description,
        date:props.Historic.date,
        location:props.Historic.location,
    })

    function submit(id){
        router.put('/Login/Dashboard/Historic/'+id, form)
    }
    
</script>

<template>
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-gray-300 bg-opacity-75 "></div>
        <div class="bg-white rounded-lg space-y-8 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full p-6">
            <label class="text-5xl font-black text-blue-800">Modifier<span class="text-red-500"> l'Historique</span></label>
            <form @submit.prevent="submit(Historic.id)" class="mt-4 space-y-5">
                <div>
                    <label class="block text-2xl font-medium">Titre</label>
                    <input  type="text" id="title" v-model="form.title"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-red-500 text-2xl" v-if="errors.title">{{ errors.title }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Déscription</label>
                    <input  type="text" id="description" v-model="form.description"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-red-500 text-2xl" v-if="errors.description">{{ errors.description }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Date</label>
                    <input  type="date" id="date" v-model="form.date"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-red-500 text-2xl" v-if="errors.date">{{ errors.date }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Location</label>
                    <input  type="text" id="location" v-model="form.location"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-red-500 text-2xl" v-if="errors.location">{{ errors.location }}</div>
                </div>
                <div class="flex justify-end mt-4 space-x-2">
                    <Link href="/Login/Dashboard/Historic" type="submit" class="px-6 py-2 bg-gray-500 text-white text-xl font-bold rounded-md hover:scale-105 duration-300">Annuler</Link>
                    <button type="submit" class="text-xl font-bold px-6 py-2 bg-fuchsia text-white rounded-md hover:scale-105 duration-300">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</template>
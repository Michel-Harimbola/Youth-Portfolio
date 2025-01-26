
<script setup>
    import { useForm } from '@inertiajs/vue3';

    defineProps({
        errors:Object
    });

    const form = useForm({
        title:'',
        description:'',
        date:'',
        images:null,
        location:'',
    });

    function handleFileUpload(event){
        form.images = event.target.files[0];
    }

    function submit(){
        form.post('/Login/Dashboard/Historic');
    }
</script>

<template>
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-gray-300 bg-opacity-75 "></div>
        <div class="bg-white rounded-lg space-y-8 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full p-6">
            <label class="text-5xl font-black text-bleu">Ajouter <span class="text-fuchsia">Historique</span></label>
            <form @submit.prevent="submit" enctype="multipart/form-data" class="mt-4 space-y-5">
                <div>
                    <label class="block text-2xl font-medium">Titre</label>
                    <input  type="text" id="title" v-model="form.title"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-fuchsia text-2xl" v-if="errors.title">{{ errors.title }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Déscription</label>
                    <input  type="text" id="description" v-model="form.description"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-fuchsia text-2xl" v-if="errors.description">{{ errors.description }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Date</label>
                    <input  type="date" id="date" v-model="form.date"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-fuchsia text-2xl" v-if="errors.date">{{ errors.date }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Images</label>
                    <input  type="file" name="images" @change="handleFileUpload"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-fuchsia text-2xl" v-if="errors.images">{{ errors.images }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Location</label>
                    <input  type="text" id="location" v-model="form.location"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-fuchsia text-2xl" v-if="errors.location">{{ errors.location }}</div>
                </div>
                <div class="flex justify-end mt-4 space-x-2">
                    <Link href="/Login/Dashboard/Historic" type="submit" class="px-6 py-2 bg-gray-500 text-white text-xl font-bold rounded-md hover:scale-105 duration-300">Annuler</Link>
                    <button type="submit" class="text-xl font-bold px-6 py-2 bg-fuchsia text-white rounded-md hover:scale-105 duration-300">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AddHistoric"
    }
</script>
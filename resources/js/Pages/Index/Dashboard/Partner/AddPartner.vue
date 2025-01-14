
<script setup>
    import { useForm } from '@inertiajs/vue3';

    defineProps({
        errors:Object
    });

    const form = useForm({
        name:'',
        images:null,
    });

    function handleFileUpload(event){
        form.images = event.target.files[0];
    }

    function submit(){
        form.post('/Login/Dashboard/Partner');
    }
</script>

<template>
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-gray-300 bg-opacity-75 "></div>
        <div class="bg-white rounded-lg space-y-8 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full p-6">
            <label class="text-5xl font-black text-blue-800">Add <span class="text-red-500">Partner</span></label>
            <form @submit.prevent="submit" enctype="multipart/form-data" class="mt-4 space-y-5">
                <div>
                    <label class="block text-2xl font-medium">Nom</label>
                    <input  type="text" id="name" v-model="form.name"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-red-500 text-2xl" v-if="errors.name">{{ errors.name }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Partner'images</label>
                    <input  type="file" name="images" @change="handleFileUpload"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-red-500 text-2xl" v-if="errors.images">{{ errors.images }}</div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit" class="text-2xl font-bold px-6 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-600">Add</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AddPartner"
    }
</script>
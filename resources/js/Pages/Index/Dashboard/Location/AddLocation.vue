
<script setup>
    import { useForm } from '@inertiajs/vue3';
    import { router } from '@inertiajs/vue3';

    defineProps({
        errors:Object
    });

    const form = useForm({
        adress:null,
        lot:null,
    });

    function submit(){
        router.post('/Login/Dashboard/Location', form)
    }
</script>

<template>
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-gray-300 bg-opacity-75 "></div>
        <div class="bg-white rounded-lg space-y-8 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full p-6">
            <label class="text-5xl font-black text-bleu">Ajouter un <span class="text-fuchsia">Location</span></label>
            <form @submit.prevent="submit" class="mt-4 space-y-5">
                <div>
                    <label class="block text-2xl font-medium">Addresses</label>
                    <input  type="text" id="adress" v-model="form.adress" 
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-fuchsia text-2xl" v-if="errors.adress">{{ errors.adress }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Lot</label>
                    <input  type="text" id="lot" v-model="form.lot"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-fuchsia text-2xl" v-if="errors.lot">{{ errors.lot }}</div>
                </div>
                <div class="flex justify-end mt-4 space-x-2">
                    <Link href="/Login/Dashboard/Location" type="submit" class="px-6 py-2 bg-gray-500 text-white text-xl font-bold rounded-md hover:scale-105 duration-300">Annuler</Link>
                    <button type="submit" class=" text-xl font-bold px-6 py-2 bg-fuchsia text-white rounded-md hover:scale-105 duration-300">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AddLocation"
    }
</script>
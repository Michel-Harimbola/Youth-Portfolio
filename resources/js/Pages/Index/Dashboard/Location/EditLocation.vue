<script setup>
    import { router, useForm } from '@inertiajs/vue3';

    const props = defineProps({
        errors: Object,
        location: Object,
    })

    const form = useForm({
        adress:props.location.adress,
        lot:props.location.lot,
    })

    function submit(id){
        router.put('/Login/Dashboard/Location/'+id, form)
    }
    
</script>

<template>
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-gray-300 bg-opacity-75 "></div>
        <div class="bg-white rounded-lg space-y-8 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full p-6">
            <label class="text-5xl font-black text-bleu">Modifier <span class="text-fuchsia">location</span></label>
            <form @submit.prevent="submit(location.id)" class="mt-4 space-y-5">
                <div>
                    <label class="block text-2xl font-medium">Addresse</label>
                    <input  type="text" id="adress" v-model="form.adress" 
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-fuchsia text-2xl" v-if="errors.adress">{{ errors.adress }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Lot</label>
                    <input  type="text" id="lot" v-model="form.lot"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-fuchsia text-2xl" v-if="errors.lot">{{ errors.lot }}</div>
                </div>
                <div class="flex justify-end mt-4 space-x-2">
                    <Link href="/Login/Dashboard/Location" type="submit" class="px-6 py-2 bg-gray-500 text-white text-xl font-bold rounded-md hover:scale-105 duration-300">Annuler</Link>
                    <button type="submit" class="text-2xl font-bold px-6 py-2 bg-fuchsia text-white rounded-md hover:scale-105 duration-300">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</template>
<script setup>
    import { Link, router, useForm } from '@inertiajs/vue3';

    const props = defineProps({
        errors: Object,
        appointment: Object,
    })

    const form = useForm({
        authentification:props.appointment.authentification,
        datetime:props.appointment.datetime,
        motif:props.appointment.motif,
    })

    function submit(id){
        router.put('/Login/Dashboard/Appointment/'+id, form)
    }
    
</script>

<template>
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-gray-300 bg-opacity-75 "></div>
        <div class="bg-white rounded-lg space-y-8 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full p-6">
            <label class="text-5xl font-black text-bleu">Modifier <span class="text-fuchsia">rendez-vous</span></label>
            <form @submit.prevent="submit(appointment.id)" class="mt-4 space-y-5">
                <div>
                    <label class="block text-2xl font-medium">Authentification</label>
                    <input  type="text" id="authentification" v-model="form.authentification" 
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-fuchsia text-2xl" v-if="errors.authentification">{{ errors.authentification }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">DateTime</label>
                    <input  type="text" id="datetime" v-model="form.datetime"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-fuchsia text-2xl" v-if="errors.datetime">{{ errors.datetime }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Motif</label>
                    <input  type="text" id="motif" v-model="form.motif"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-fuchsia text-2xl" v-if="errors.motif">{{ errors.motif }}</div>
                </div>
                <div class="flex justify-end mt-4 space-x-2">
                    <Link href="/Login/Dashboard/Appointment" class="text-xl font-bold px-6 py-2 bg-gray-500 text-white rounded-md hover:scale-105 duration-300">Annuler</Link>
                    <button type="submit" class="text-xl font-bold px-6 py-2 bg-fuchsia text-white rounded-md hover:scale-105 duration-300">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</template>
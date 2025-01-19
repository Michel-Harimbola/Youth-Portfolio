<script setup>
    import { router, useForm } from '@inertiajs/vue3';

    const props = defineProps({
        errors: Object,
        Statistic: Object,
    })
    
    const form = useForm({
        Training_nbr:props.Statistic.Training_nbr,
        Student_nbr:props.Statistic.Student_nbr,
        activitie_nbr:props.Statistic.activitie_nbr,
        Certified_training:props.Statistic.Certified_training,
    })

    function submit(id){
        router.put('/Login/Dashboard/Statistic/'+id, form)
    }
    
</script>

<template>
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-gray-300 bg-opacity-75 "></div>
        <div class="bg-white rounded-lg space-y-8 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full p-6">
            <label class="text-5xl font-black text-bleu">Modifier <span class="text-fuchsia">Statistique</span></label>
            <form @submit.prevent="submit(Statistic.id)" class="mt-4 space-y-5">
                <div>
                    <label class="block text-2xl font-medium">Nbr de la formation</label>
                    <input  type="text" id="Training_nbr" v-model="form.Training_nbr" 
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-red-500 text-2xl" v-if="errors.Training_nbr">{{ errors.Training_nbr }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Nbr des élèves formé</label>
                    <input  type="text" id="Student_nbr" v-model="form.Student_nbr"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-red-500 text-2xl" v-if="errors.Student_nbr">{{ errors.Student_nbr }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Nbr d'activités</label>
                    <input  type="text" id="activitie_nbr" v-model="form.activitie_nbr" 
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-red-500 text-2xl" v-if="errors.activitie_nbr">{{ errors.activitie_nbr }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Formations certifié</label>
                    <input  type="text" id="Certified_training" v-model="form.Certified_training"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-red-500 text-2xl" v-if="errors.Certified_training">{{ errors.Certified_training }}</div>
                </div>
                <div class="flex justify-end mt-4 space-x-2">
                    <Link href="/Login/Dashboard/Statistic" type="submit" class="px-6 py-2 bg-gray-500 text-white text-xl font-bold rounded-md hover:scale-105 duration-300">Annuler</Link>
                    <button type="submit" class="text-xl font-bold px-6 py-2 bg-fuchsia text-white rounded-md hover:scale-105 duration-300">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</template>
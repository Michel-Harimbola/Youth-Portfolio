
<script setup>
    import { useForm } from '@inertiajs/vue3';
    import { router } from '@inertiajs/vue3';

    defineProps({
        errors:Object
    });
    
    const form = useForm({
        Training_nbr:null,
        Student_nbr:null,
        activitie_nbr:null,
        Certified_training:null,
    });

    function submit(){
        router.post('/Login/Dashboard/Statistic', form)
    }
</script>

<template>
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-gray-300 bg-opacity-75 "></div>
        <div class="bg-white rounded-lg space-y-8 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full p-6">
            <label class="text-5xl font-black text-blue-800">Add <span class="text-red-500">Statistic</span></label>
            <form @submit.prevent="submit" class="mt-4 space-y-5">
                <div>
                    <label class="block text-2xl font-medium">Nbr de la formation</label>
                    <input  type="text" id="Training_nbr" v-model="form.Training_nbr" 
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-red-500 text-2xl" v-if="errors.Training_nbr">{{ errors.Training_nbr }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Nbr des élèves formé</label>
                    <input  type="text" id="Student_nbr" v-model="form.Student_nbr"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-red-500 text-2xl" v-if="errors.Student_nbr">{{ errors.Student_nbr }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Nbr d'activités</label>
                    <input  type="text" id="activitie_nbr" v-model="form.activitie_nbr" 
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-red-500 text-2xl" v-if="errors.activitie_nbr">{{ errors.activitie_nbr }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Formations certifié</label>
                    <input  type="text" id="Certified_training" v-model="form.Certified_training"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-red-500 text-2xl" v-if="errors.Certified_training">{{ errors.Certified_training }}</div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit" class=" text-2xl font-bold px-6 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-600">Add</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AddStatistic"
    }
</script>

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
            <label class="text-5xl font-black text-bleu">Ajouter <span class="text-fuchsia">Statistique</span></label>
            <form @submit.prevent="submit" class="mt-4 space-y-5">
                <div>
                    <label class="block text-2xl font-medium">Nbr de la formation</label>
                    <input  type="text" id="Training_nbr" v-model="form.Training_nbr" 
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-fuchsia text-2xl" v-if="errors.Training_nbr">{{ errors.Training_nbr }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Nbr des élèves formé</label>
                    <input  type="text" id="Student_nbr" v-model="form.Student_nbr"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-fuchsia text-2xl" v-if="errors.Student_nbr">{{ errors.Student_nbr }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Nbr d'activités</label>
                    <input  type="text" id="activitie_nbr" v-model="form.activitie_nbr" 
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-fuchsia text-2xl" v-if="errors.activitie_nbr">{{ errors.activitie_nbr }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Formations certifié</label>
                    <input  type="text" id="Certified_training" v-model="form.Certified_training"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 ">
                    <div class=" text-fuchsia text-2xl" v-if="errors.Certified_training">{{ errors.Certified_training }}</div>
                </div>
                <div class="flex justify-end mt-4 space-x-2">
                    <Link href="/Login/Dashboard/Statistic" type="submit" class="px-6 py-2 bg-gray-500 text-white text-xl font-bold rounded-md hover:scale-105 duration-300">Annuler</Link>
                    <button type="submit" class=" text-xl font-bold px-6 py-2 bg-fuchsia text-white rounded-md hover:scale-105 duration-300">Ajouter</button>
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
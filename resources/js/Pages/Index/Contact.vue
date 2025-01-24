<script setup>
    import { useForm } from '@inertiajs/vue3';
    import { router } from '@inertiajs/vue3';

    const form = useForm({
        authentification:null,
        datetime:null,
        motif:null,
    });

    function submit(){
        router.post('/Appointment', form)
    }
</script>

<template>
    <div class="flex justify-center">
        <div class="flex flex-row py-32">
            <div class="bg-bleu flex flex-col justify-center items-start text-white space-y-12 py-12 pl-16 rounded-l-[25px]">
                <div class="space-y-4 pr-12">
                    <p class="text-5xl font-black">Rendez-vous</p>
                    <p class="text-xl">Besoin de Rendez-vous?<br>
                    Cliquez ici pour choisir votre horaire.</p>
                </div>
                <form @submit.prevent="submit">
                    <div class="container space-y-8 flex flex-col pr-28">
                        <input type="text" id="authentification" v-model="form.authentification" placeholder="Votre authentification......"
                        class=" bg-bleu text-xl rounded-lg border-1 border-white placeholder:text-white py-3 pl-6" required>
                        <input type="datetime-local" id="datetime" v-model="form.datetime" 
                        class=" bg-bleu text-xl rounded-lg border-1 border-white placeholder:text-white py-3 pl-6" required>
                        <textarea name="message" placeholder="Votre motif......" rows="6" cols="40" id="motif" v-model="form.motif"
                            class="bg-bleu text-xl border-1 border-white rounded-lg placeholder:text-white pl-5 pt-4" required></textarea>
                    </div>
                    <button type="submit" class="text-xl hover:scale-105 duration-300 bg-fuchsia px-12 py-3 mt-5">ENVOYER</button>
                </form>
            </div>
            <div class="bg-fuchsia p-44 rounded-r-[25px]" style="width: 100%;">
                <img src="/images/YouthComputingblanc.svg" alt="Logo" style="width: 100%;">
            </div>   
        </div>
    </div>
</template>

<script>
    export default {
        name:"Appointment"
    }
</script>

<script setup>
    import { useForm, Link } from '@inertiajs/vue3';
    import { router } from '@inertiajs/vue3';

    const form = useForm({
        title:null,
        description:null,
        amount:null,
        amount_received:null,
    });

    function submit(){
        router.post('/Donation/AddDonation', form)
    }
</script>

<template>
    <div class="fixed flex text-lg text-white font-bold">
        <Link href="/" class="bg-blue-950 pl-3 pr-8 hover:scale-110 duration-200 clip-triangle z-20">Accueil</Link>
        <p class="bg-rose-500 px-5 clip-triangle -ml-3">Donation</p>
    </div>
    <div class="flex justify-center items-center h-screen bg-gray-100">
        <div class="bg-white rounded-xl space-y-8 overflow-hidden shadow-2xl transform transition-all sm:max-w-lg sm:w-full p-6">
            <label class="text-5xl font-black text-bleu">Faire une <span class="text-red-500">Donation</span></label>
            <form @submit.prevent="submit" class="mt-4 space-y-8">
                <div>
                    <input  type="text" id="title" v-model="form.title" placeholder="Entrez le titre ici..."
                    class="mt-1 block w-full p-3 border-2  rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder:text-gray-400" required>
                </div>
                <div>
                    <textarea type="text" id="description" v-model="form.description" placeholder="Description..." rows="4"
                    class="mt-1 block w-full p-3 border-2  rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder:text-gray-400" required></textarea>
                </div>
                <div>
                    <input  type="text" id="amount" v-model="form.amount" placeholder="Amount..."
                    class="mt-1 block w-full p-3 border-2  rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder:text-gray-400" required>
                </div>
                <div>
                    <input  type="text" id="amount_received" v-model="form.amount_received" placeholder="Amount received..."
                    class="mt-1 block w-full p-3 border-2  rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder:text-gray-400" required>
                </div>
                <div class="flex justify-end mt-4 space-x-3">
                    <Link href="/" type="submit" class=" text-2xl font-bold px-4 py-2 bg-gray-500 text-white rounded-lg hover:scale-105 duration-300">Annuler</Link>
                    <button type="submit" class=" text-2xl font-bold px-5 py-2 bg-fuchsia text-white rounded-lg hover:scale-105 duration-300">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AddDonation"
    }
</script>
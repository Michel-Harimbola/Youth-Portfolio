<script setup>
    import { router, useForm } from '@inertiajs/vue3';

    const props = defineProps({
        errors: Object,
        faq: Object,
    })

    const form = useForm({
        question:props.faq.question,
        answer:props.faq.answer,
    })

    function submit(id){
        router.put('/Login/Dashboard/FAQ/'+id, form)
    }
    
</script>

<template>
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-gray-300 bg-opacity-75 "></div>
        <div class="bg-white rounded-lg space-y-8 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full p-6">
            <label class="text-5xl font-black text-bleu">Ajouter <span class="text-fuchsia">FAQ</span></label>
            <form @submit.prevent="submit(faq.id)" class="mt-4 space-y-5">
                <div>
                    <label class="block text-2xl font-medium">Questions</label>
                    <input  type="text" id="question" v-model="form.question" 
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-fuchsia text-2xl" v-if="errors.question">{{ errors.question }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Answers</label>
                    <input  type="text" id="answer" v-model="form.answer"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-fuchsia text-2xl" v-if="errors.answer">{{ errors.answer }}</div>
                </div>
                <div class="flex justify-end mt-4 space-x-2">
                    <Link href="/Login/Dashboard/FAQ" type="submit" class="px-6 py-2 bg-gray-500 text-white text-xl font-bold rounded-md hover:scale-105 duration-300">Annuler</Link>
                    <button type="submit" class="text-xl font-bold px-6 py-2 bg-fuchsia text-white rounded-md hover:scale-105 duration-300">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</template>
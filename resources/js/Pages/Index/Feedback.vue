<template>
    <div class="flex flex-col mb-28">
        <h1 class="text-rose-500 text-6xl font-black flex justify-center items-center">Feedbaks</h1>
        <div class="flex justify-end mr-20 mb-3">
            <button @click="openModal" class="hover:scale-105 hover:bg-rose-500 duration-300 bg-rose-600 text-xl text-white font-bold px-6 py-2">Add feedback</button>
        </div>
        <div v-for="(feedback, index) in feedbacks" class="text-xl flex justify-between items-center border-t-2 border-gray-300 mx-20 pt-5 mb-6">
            <div>
                <div class="flex items-center space-x-3">
                    <img src="images/user_profile.svg" alt="user-profile" class="w-12">
                    <p class="text-blue-950">{{ feedback.email }}</p>
                </div>
                <p v-if="isVisible[index]" class="pl-12 text-gray-700 mb-5">{{ feedback.description }}</p>
            </div>
            <button
               @click="toggleVisibility(index)"
               :class="isVisible[index] ? 'rotate-180' : ''"
               class="flex justify-center hover:scale-125 ml-3 transform transition-transform duration-300"
            >
                <img src="/images/arrows.svg" alt="arrows" class="w-12 h-12" />
            </button>
        </div>
    </div>

    <!--Add feedback-->

    <div v-if="isModalOpen" class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75"></div>
        <div class="bg-white rounded-xl overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full p-6">
            <h1 class="text-5xl font-bold text-blue-950 mb-8">Add<span class="text-rose-500">Feedback</span></h1>
            <form @submit.prevent="submitFeedback" class="text-xl space-y-8">
                <div class="flex flex-col">
                    <div class="relative flex items-center">
                        <img src="images/icons/email-sign-svgrepo-com.svg" class="w-7 absolute ml-2" alt="lock">
                        <input type="email" v-model="form.email" 
                        class="rounded-lg border-2 hover:bg-gray-50 border-blue-950 placeholder:text-gray-400 pl-10 pr-48 py-3" 
                        placeholder="Entrez votre adresse email...." required>
                    </div>
                </div>
                <div class="flex flex-col">
                    <textarea rows="6" class="rounded-lg border-2" v-model="form.description" placeholder="Votre feedback" required></textarea>
                </div>
                <div class="flex justify-end mt-5">
                    <button @click="closeModal" type="button" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-700 mr-2">Cancel</button>
                    <button type="submit" class="font-bold text-white rounded-lg bg-rose-500 px-6 py-1">Add</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import { useForm } from "@inertiajs/vue3";

    export default {
        name: "Feedback",

        props: {
            feedbacks: Array,
        },
        data() {
            return {
                isModalOpen: false,
                isVisible: [],
                form: useForm({
                    email: '',
                    description: '',
                }),
            };
        },

        mounted() {
            this.isVisible = [true, ...Array(this.feedbacks.length - 1).fill(false)];
        },

        methods: {
            toggleVisibility(index) {
                this.isVisible[index] = !this.isVisible[index];
            },

            openModal() {
                this.isModalOpen = true;
            },

            closeModal() {
                this.isModalOpen = false;
            },

            async submitFeedback() {
                this.form.post('/feedback', {
                    onSuccess: () => {
                        this.closeModal();
                        this.form.reset();
                    }
                });
            },
        },
    }
</script>

<template>
    <form @submit.prevent="submit" method="post">
        <div class="bg-gray-200 min-h-screen">
            <div class="flex flex-row justify-center">
                <div class="bg-blue-950 flex my-24 py-48  px-32 rounded-l-3xl">
                    <img src="images/YouthComputingblanc.svg" alt="Logo">
                </div>
                <div class="bg-white flex flex-col justify-center pl-20 pr-32 my-24 space-y-4 rounded-r-3xl ">
                    <h1 class="text-5xl text-rose-500 flex justify-center items-center font-black py-8">CONNEXION</h1>
                    <div class="flex flex-col space-y-2">
                        <label class="pt-10 font-black text-2xl">Adresse email</label>
                        <div class="relative flex items-center">
                            <img src="images/icons/email-sign-svgrepo-com.svg" class="w-7 absolute ml-2" alt="lock">
                            <input type="email" v-model="form.email" 
                            class="rounded-lg border-2 text-lg border-blue-950 placeholder:text-gray-400 pl-10 pr-52 py-3" 
                            placeholder="Entrez votre adresse email...." required>
                        </div>
                        <div class=" text-red-500 text-sm" v-if="errors.email">{{ errors.email }}</div>
                    </div>
                    <div class="flex flex-col space-y-2 pb-5">
                        <label class="pt-7 font-black text-2xl">Mot de passe</label>
                        <div class="relative flex items-center">
                            <img src="images/icons/lock-alt-svgrepo-com.svg" class="w-7 absolute ml-2" alt="lock">
                            <input type="password" v-model="form.password"
                            class="rounded-lg border-2 text-lg border-blue-950 placeholder:text-gray-400 pl-10 pr-52 py-3" 
                            placeholder="Entrez votre mot de passe...." required>
                        </div>
                    </div>
                    <button type="submit" class="hover:bg-rose-500 duration-300 bg-rose-600 flex justify-center text-white text-lg font-black py-4">SE CONNECTER</button>
                    <Link class="text-blue-800 font-bold pt-3 hover:text-blue-500">Mot de passe oublié ?</Link>
                </div>
            </div>
        </div>
    </form>
</template>

<script setup>
    import { useForm, Link } from '@inertiajs/vue3';

    defineProps({
        errors:Object
    });

    const form = useForm({
        email: '',
        password: '',
    });

    function submit() {
        form.post('/Login/login')
    }
</script>
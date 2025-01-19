<template>
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-gray-300 bg-opacity-75 "></div>
        <div class="bg-white rounded-lg space-y-8 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full p-6">
            <label class="text-5xl font-black text-bleu">Ajouter une <span class="text-fuchsia">utilisateur</span></label>
            <form @submit.prevent="submit" class="mt-4 space-y-5">
                <div>
                    <label class="block text-2xl font-medium">Nom</label>
                    <input  type="text" id="name" v-model="form.name" 
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-fuchsia text-2xl" v-if="errors.name">{{ errors.name }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Email</label>
                    <input  type="email" id="email" v-model="form.email"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-fuchsia text-2xl" v-if="errors.email">{{ errors.email }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Mot de passe</label>
                    <input  type="password" id="password" v-model="form.password"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-fuchsia text-2xl" v-if="errors.password">{{ errors.password }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Confirmation du mot de passe</label>
                    <input  type="password" id="password_confirmation" v-model="form.password_confirmation"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-fuchsia text-2xl" v-if="errors.password_confirmation">{{ errors.password_confirmation }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Rôle</label>
                    <select  type="text" id="role" v-model="form.role"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option selected>Membre</option>
                        <option >Administrateur</option>
                    </select>
                    <div class=" text-fuchsia text-2xl" v-if="errors.role">{{ errors.role }}</div>
                </div>
                <div class="flex justify-end mt-4 space-x-2">
                    <Link href="/Login/Dashboard/User" type="submit" class="px-6 py-2 bg-gray-500 text-white text-xl font-bold rounded-md hover:scale-105 duration-300">Annuler</Link>
                    <button type="submit" class="px-6 py-2 bg-fuchsia text-white text-xl font-bold rounded-md hover:scale-105 duration-300">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
    import { useForm, router, Link } from '@inertiajs/vue3';

    defineProps({
        errors:Object
    });

    const form = useForm({
        name:null,
        email:null,
        password:null,
        password_confirmation:null,
        role:null,

    });

    function submit(){
        router.post('/Login/Dashboard/User', form)
    }

</script>

<script>
    export default {
        name: "AddUser"
    }
</script>
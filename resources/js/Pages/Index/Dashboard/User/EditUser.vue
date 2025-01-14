<script setup>
    import { router, useForm } from '@inertiajs/vue3';

    const props = defineProps({
        errors: Object,
        user: Object,
    })

    const form = useForm({
        name:props.user.name,
        email:props.user.email,
        role:props.user.role,
    })

    function submit(id){
        router.put('/Login/Dashboard/User/'+id, form)
    }
    
</script>

<template>
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-gray-300 bg-opacity-75 "></div>
        <div class="bg-white rounded-lg space-y-8 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full p-6">
            <label class="text-5xl font-black text-blue-800">Edit <span class="text-red-500">User</span></label>
            <form @submit.prevent="submit(user.id)" class="mt-4 space-y-5">
                <div>
                    <label class="block text-2xl font-medium">Name</label>
                    <input  type="text" id="name" v-model="form.name" 
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-red-500 text-2xl" v-if="errors.name">{{ errors.name }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Email</label>
                    <input  type="email" id="email" v-model="form.email"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <div class=" text-red-500 text-2xl" v-if="errors.email">{{ errors.email }}</div>
                </div>
                <div>
                    <label class="block text-2xl font-medium">Role</label>
                    <select  type="text" id="role" v-model="form.role"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option selected>Membre</option>
                        <option >Administrateur</option>
                    </select>
                    <div class=" text-red-500 text-2xl" v-if="errors.role">{{ errors.role }}</div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit" class="text-xl font-bold px-6 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-600">Add</button>
                </div>
            </form>
        </div>
    </div>
</template>
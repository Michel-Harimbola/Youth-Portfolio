<template>
    <DashLayout>
        <div class="p-6 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <h2 class="text-5xl font-black text-bleu">Utilisateur</h2>
                <Link href="/Login/Dashboard/User/AddUser" class="px-8 py-3 text-xl font-bold bg-fuchsia text-white rounded-md hover:scale-105 duration-300">Ajouter</Link>
            </div>
            <div v-if="$page.props.flash.message" class="text-xl text-green-800 bg-green-100 p-3 mt-5">{{ $page.props.flash.message }}</div>
            <div class="mt-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-900">
                    <tr>
                        <th class="px-6 py-3 text-left text-xl font-black text-white tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white tracking-wider">Nom</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white tracking-wider">Rôle</th> 
                        <th class="px-6 py-3"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                        <tr v-for="user in all_user">
                            <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ user.id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-80 overflow-hidden">{{ user.name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-80 overflow-hidden">{{ user.email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-80 overflow-hidden">{{ user.role }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right font-medium">
                            <div class="space-x-5 flex items-center justify-end">
                                <button @click.prevent="edit(user.id)"
                                class=" hover:w-9"><img src="/images/icons/edit.svg" alt="edit" class="w-10"></button>
                                <button @click.prevent="destroyUser(user.id)" 
                                class="hover:w-11"><img src="/images/icons/delete.svg" alt="edit" class="w-12"></button>
                            </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </DashLayout>
</template>

<script setup>
    import { Link, router } from '@inertiajs/vue3';

    function destroyUser (id){
        router.delete('/Login/Dashboard/User/'+id)
    }

    function edit(id){
        router.get('/Login/Dashboard/User/'+id+'/EditUser')
    }
</script>

<script>
    import DashLayout from '@/Layouts/DashLayout.vue';

export default {
    components: {
        DashLayout,
    },

    props: {
            all_user: Array
    },
};
</script>
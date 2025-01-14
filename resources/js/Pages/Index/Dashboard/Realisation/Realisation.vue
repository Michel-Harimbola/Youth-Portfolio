<script setup>
    import { router, Link } from '@inertiajs/vue3';

    function destroyRealisation (id){
        router.delete('/Login/Dashboard/Realisation/'+id)
    }

    function edit(id){
        router.get('/Login/Dashboard/Realisation/'+id+'/EditRealisation')
    }
</script>

<template>
    <DashLayout >
        <div class="p-6 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <h2 class="text-5xl font-black text-blue-950">Realisation</h2>
                <Link href="/Login/Dashboard/Realisation/AddRealisation" class="px-8 py-3 text-xl font-bold bg-red-500 text-white rounded-md hover:bg-red-400">Add Realisation</Link>
            </div>
            <div v-if="$page.props.flash.message" class="text-xl text-green-800 bg-green-100 p-3 mt-5">{{ $page.props.flash.message }}</div>
            <div class="mt-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">Images</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">Client</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">Link</th>
                        <th class="px-6 py-3"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                    <tr v-for="Realisation in all_Realisation" :key="Realisation.id">
                        <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ Realisation.id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-96 overflow-hidden">{{ Realisation.title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-96 overflow-hidden">{{ Realisation.description }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-96 overflow-hidden">{{ Realisation.date }}</td>
                        <div class="flex justify-start mt-5 ml-5">
                            <img :src="`/storage/${Realisation.images}`" alt="logo" class="w-12">
                        </div>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-96 overflow-hidden">{{ Realisation.client }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-96 overflow-hidden">{{ Realisation.link }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right  font-medium">
                        <div class="space-x-5 flex items-center justify-end">
                            <button @click.prevent="edit(Realisation.id)"
                            class=" hover:w-9"><img src="/images/icons/edit.svg" alt="edit" class="w-10"></button>
                            <button @click.prevent="destroyRealisation(Realisation.id)" 
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

<script>
    import DashLayout from '@/Layouts/DashLayout.vue';

    export default {
        components: {
            DashLayout,
        },

        props: {
            all_Realisation: Array
        },
    };    
</script>
<script setup>
    import { router, Link } from '@inertiajs/vue3';

    function destroyHistoric (id){
        router.delete('/Login/Dashboard/Historic/'+id)
    }

    function edit(id){
        router.get('/Login/Dashboard/Historic/'+id+'/EditHistoric')
    }
</script>

<template>
    <DashLayout >
        <div class="p-6 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <h2 class="text-5xl font-black text-bleu">Historique</h2>
                <Link href="/Login/Dashboard/Historic/AddHistoric" class="px-8 py-3 text-xl font-bold bg-red-500 text-white rounded-md hover:bg-red-400">Ajouter</Link>
            </div>
            <div v-if="$page.props.flash.message" class="text-xl text-green-800 bg-green-100 p-3 mt-5">{{ $page.props.flash.message }}</div>
            <div class="mt-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-900">
                    <tr>
                        <th class="px-6 py-3 text-left text-xl font-black text-white tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white tracking-wider">Titre</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white tracking-wider">Déscription</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white tracking-wider">Images</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white tracking-wider">Location</th>
                        <th class="px-6 py-3"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                    <tr v-for="Historic in all_Historic" :key="Historic.id">
                        <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ Historic.id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-96 overflow-hidden">{{ Historic.title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-96 overflow-hidden">{{ Historic.description }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-96 overflow-hidden">{{ Historic.date }}</td>
                        <div class="flex justify-start mt-5 ml-5">
                            <img :src="`/storage/${Historic.images}`" alt="logo" class="w-12">
                        </div>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-96 overflow-hidden">{{ Historic.location }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right  font-medium">
                        <div class="space-x-5 flex items-center justify-end">
                            <button @click.prevent="edit(Historic.id)"
                            class=" hover:w-9"><img src="/images/icons/edit.svg" alt="edit" class="w-10"></button>
                            <button @click.prevent="destroyHistoric(Historic.id)" 
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
            all_Historic: Array
        },
    };    
</script>
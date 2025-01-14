<script setup>
    import { router, Link } from '@inertiajs/vue3';

    function destroyLocation (id){
        router.delete('/Login/Dashboard/Location/'+id)
    }

    function edit(id){
        router.get('/Login/Dashboard/Location/'+id+'/EditLocation')
    }
</script>
<template>
    <DashLayout >
        <div class="p-6 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <h2 class="text-5xl font-black text-blue-950">Location</h2>
                <Link href="/Login/Dashboard/Location/AddLocation" class="px-8 py-3 text-xl font-bold bg-red-500 text-white rounded-md hover:bg-red-400">Add Location</Link>
            </div>
            <div v-if="$page.props.flash.message" class="text-xl text-green-800 bg-green-100 p-3 mt-5">{{ $page.props.flash.message }}</div>
            <div class="mt-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">Addresses</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">Lot</th>
                        <th class="px-6 py-3"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                    <tr v-for="Location in all_location"  >
                        <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ Location.id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-96 overflow-hidden">{{ Location.adress }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-96 overflow-hidden">{{ Location.lot }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right  font-medium">
                            <div class="space-x-5 flex items-center justify-end">
                                <button @click.prevent="edit(Location.id)"
                                class=" hover:w-9"><img src="/images/icons/edit.svg" alt="edit" class="w-10"></button>
                                <button @click.prevent="destroyLocation(Location.id)" 
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
            all_location: Array
        },
    };    
</script>
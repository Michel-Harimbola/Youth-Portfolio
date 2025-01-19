<script setup>
    import { router, Link } from '@inertiajs/vue3';

    function destroyDonation (id){
        router.delete('/Login/Dashboard/Donation/'+id)
    }

    function edit(id){
        router.get('/Login/Dashboard/Donation/'+id+'/EditDonation')
    }
</script>
<template>
    <DashLayout >
        <div class="p-6 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <h2 class="text-5xl font-black text-blue-950">Donation</h2>
                <Link href="/Login/Dashboard/Donation/AddDonation" class="px-8 py-3 text-xl font-bold bg-red-500 text-white rounded-md hover:bg-red-400">Add Donation</Link>
            </div>
            <div v-if="$page.props.flash.message" class="text-xl text-green-800 bg-green-100 p-3 mt-5">{{ $page.props.flash.message }}</div>
            <div class="mt-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-3"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                    <tr v-for="Donation in all_donation">
                        <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ Donation.id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-96 overflow-hidden">{{ Donation.title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-96 overflow-hidden">{{ Donation.description }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-96 overflow-hidden">{{ Donation.amount }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right  font-medium">
                        <div class="space-x-5 flex items-center justify-end">
                            <button @click.prevent="edit(Donation.id)"
                            class=" hover:w-9"><img src="/images/icons/edit.svg" alt="edit" class="w-10"></button>
                            <button @click.prevent="destroyDonation(Donation.id)" 
                            class="hover:w-11"><img src="/images/icons/delete.svg" alt="delete" class="w-12"></button>
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
            all_donation: Array
        },
    };    
</script>
<script setup>
    import { router, Link } from '@inertiajs/vue3';

    function destroyFeedback (id){
        router.delete('/Login/Dashboard/Feedback/'+id)
    }

    function edit(id){
        router.get('/Login/Dashboard/Feedback/'+id+'/EditFeedback')
    }
</script>
<template>
    <DashLayout >
        <div class="p-6 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <h2 class="text-5xl font-black text-blue-950">Feedback</h2>
                <Link href="/Login/Dashboard/Feedback/AddFeedback" class="text-bold text-xl px-6 py-2 bg-red-500 text-white rounded-md hover:bg-red-400">Add Feedback</Link>
            </div>
            <div v-if="$page.props.flash.message" class="text-xl text-green-800 bg-green-100 p-3 mt-5">{{ $page.props.flash.message }}</div>
            <div class="mt-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xl font-black text-white uppercase tracking-wider">Post</th>
                        <th class="px-6 py-3"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-300">
                    <tr v-for="feedback in all_feedback"  >
                        <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ feedback.id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-80 overflow-hidden">{{ feedback.description }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-80 overflow-hidden">{{ feedback.email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-500 max-w-80 overflow-hidden">{{ feedback.posts }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right font-medium">
                            <div class="space-x-5 flex items-center justify-end">
                            <button @click.prevent="edit(feedback.id)"
                            class=" hover:w-9"><img src="/images/icons/edit.svg" alt="edit" class="w-10"></button>
                            <button @click.prevent="destroyFeedback(feedback.id)" 
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
            all_feedback: Array
        },
    };    
</script>
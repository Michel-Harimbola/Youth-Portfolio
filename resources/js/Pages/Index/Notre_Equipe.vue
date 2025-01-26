<template>
    <div class="my-24 px-10">
        <div class="flex flex-col justify-center space-y-5 items-center mb-14">
            <div class="align-self-start">
                <h1 class="text-6xl font-bold">
                    <span class="text-bleu">Rencontrez </span>
                    <span class="text-fuchsia">notre équipe</span>
                </h1>
            </div>
            <p class="text-center text-xl">
                Pourvu que c'est une association, elle comporte beaucoup de participants qui jouent<br>
                chacun des rôles importants pour notre association.
            </p>
        </div>

        <div class="flex items-center justify-between">
            <button 
                @click="showPreviousItems" 
                class="hover:bg-gray-100 rotate-90 rounded-full disabled:opacity-40"
                :disabled="startIndex <= 0"
            >
                <img src="images/arrows.svg" alt="arrows" style="width: 60px;">
            </button>
            <div class="flex flex-row text-xl justify-between space-x-32">
                <div 
                    v-for="(team, index) in currentItems" 
                    :key="team.id" 
                    class="w-[450px]"
                >
                    <div style="height: 450px;" class="overflow-hidden">
                        <img 
                            :src="`/storage/${team.image}`" 
                            :alt="team.name" 
                            class="w-full h-full object-cover rounded-t-lg"
                        >
                    </div>
                    <div class="bg-bleu rounded-b-lg flex flex-col justify-center p-5 h-32 space-y-3">
                        <h1 class="text-3xl text-fuchsia text-center font-black">{{ team.name }}</h1>
                        <p class="text-center text-white">{{ team.role }}</p>
                    </div>
                </div>
            </div>
            <button 
                @click="showNextItems" 
                class="hover:bg-gray-100 -rotate-90 text-black rounded-full disabled:opacity-40"
                :disabled="endIndex >= Teams.length"
            >
                <img src="images/arrows.svg" alt="arrows" style="width: 60px;">
            </button>
        </div>

        <div class="flex justify-center mt-8 space-x-4">
            <div 
                v-for="(dot, index) in totalPages" 
                :key="index"
                @click="goToPage(index)"
                class="w-3 h-3 rounded-full cursor-pointer"
                :class="{
                    'bg-fuchsia': currentPage === index,
                    'bg-gray-300': currentPage !== index
                }"
            ></div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Notre_Equipe",

    props: {
        Teams: Array,
    },

    data() {
        return {
            startIndex: 0,
            itemsPerPage: 3,
        };
    },

    computed: {
        currentItems() {
            return this.Teams.slice(this.startIndex, this.startIndex + this.itemsPerPage);
        },
        endIndex() {
            return this.startIndex + this.itemsPerPage;
        },
        totalPages() {
            return Math.ceil(this.Teams.length / this.itemsPerPage);
        },
        currentPage() {
            return Math.floor(this.startIndex / this.itemsPerPage);
        }
    },

    methods: {
        showNextItems() {
            if (this.endIndex < this.Teams.length) {
                this.startIndex += this.itemsPerPage;
            }
        },
        showPreviousItems() {
            if (this.startIndex > 0) {
                this.startIndex -= this.itemsPerPage;
            }
        },
        goToPage(index) {
            this.startIndex = index * this.itemsPerPage;
        }
    }
};
</script>


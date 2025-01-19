<template>
    <div class="flex items-center  pl-20  pb-12 pt-64"> 
       <div class="container flex flex-col justify-between">
           <h1 class="text-5xl font-black font pb-6"><span class="text-bleu">YOUTH</span> <span class="text-fuchsia">COMPUTING</span></h1>
           <div class="flex items-center pb-7 ">
                 <div class="space-y-5 text-xl">
                     <p>
                        Youth Computing est une association de jeunes ayant pour mission d'aider<br>
                        les populations à s'approprier la culture numérique.<br> 
                        Dans l'environnement actuel, les ordinateurs, les téléphones et autres appareils <br> 
                        numériques sont omniprésents,tant dans le secteur public que privé.<br>
                        Les jeunes, y compris les adolescents, manipulent ou souhaitent<br> 
                        manipuler ces appareils.
                    </p>
                    <Transition
                        enter-active-class="transition-opacity duration-500"
                        enter-from-class="opacity-0"
                        enter-to-class="opacity-100"
                        leave-active-class="transition-opacity duration-300"
                        leave-from-class="opacity-100"
                        leave-to-class="opacity-0"
                    >
                        <p v-if="isVisibles">
                            Cependant, on constate que certains jeunes éprouvent des difficultés<br> 
                            à utiliser ces outils,tandis que d'autres n'ont même pas conscience<br>
                            de leur existence.<br>
                            C'est face à ce constat que Youth Computing entend apporter sa contribution.<br>

                            Créée le 17 mai 2021 par trois étudiants motivés, l'association compte<br>
                            aujourd'hui 19 membres actifs.
                        </p>
                    </Transition>
                </div>
                <button @click="isVisibles = !isVisibles" :class="isVisibles ? 'rotate-180' : ''" class="flex justify-center hover:scale-125 ml-3 transform transition-transform duration-300">
                    <img src="images/arrows.svg" alt="arrows" class="w-12 h-12">
                </button>
           </div> 
           <div class="flex gap-x-6">
               <button @click="scrollToSecondPage" class="hover:scale-105 duration-300 bg-bleu text-white text-xl font-bold py-3 px-14">DECOUVRIR</button>
               <button @click="openModal" class="hover:scale-105 duration-300 bg-fuchsia text-white text-xl font-bold py-3 px-14">DONATION</button>
           </div>
       </div>
       <div style="width:70%;" class="mr-28 ">
           <img src="images/Hello.svg" alt="Hello" style="width: 100%;">
       </div>
    </div>

    <!-- add donation -->

    <div v-if="isModalOpen" class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75"></div>
        <div class="bg-white rounded-xl space-y-8 overflow-hidden shadow-2xl transform transition-all sm:max-w-lg sm:w-full p-6">
            <label class="text-5xl font-black text-bleu">Faire une <span class="text-red-500">Donation</span></label>
            <form @submit.prevent="submitDonation" class="mt-4 space-y-8">
                <div>
                    <input  type="text" id="title" v-model="form.title" placeholder="Entrez le titre ici..."
                    class="mt-1 block w-full p-3 border-2  rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder:text-gray-400" required>
                </div>
                <div>
                    <textarea type="text" id="description" v-model="form.description" placeholder="Description..." rows="4"
                    class="mt-1 block w-full p-3 border-2  rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder:text-gray-400" required></textarea>
                </div>
                <div>
                    <input  type="text" id="amount" v-model="form.amount" placeholder="Amount..."
                    class="mt-1 block w-full p-3 border-2  rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder:text-gray-400" required>
                </div>
                <div class="flex justify-end mt-4 space-x-3">
                    <button @click="closeModal" type="submit" class=" text-2xl font-bold px-4 py-2 bg-gray-500 text-white rounded-lg hover:scale-105 duration-300">Annuler</button>
                    <button type="submit" class=" text-2xl font-bold px-5 py-2 bg-fuchsia text-white rounded-lg hover:scale-105 duration-300">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import { useForm } from "@inertiajs/vue3";

    export default {
        name: "Accueil",

        data() {
            return {
                isModalOpen: false,
                isVisibles: false,
                form: useForm({
                    title:'',
                    description:'',
                    amount:'',
                    amount_received:'',
                }),
            }
        },

        methods: {
            scrollToSecondPage() {
                const targetElement = document.getElementById('section2');
                if(targetElement) {
                    const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth' 
                    });

                }
            },

            openModal() {
                this.isModalOpen = true;
            },

            closeModal() {
                this.isModalOpen = false;
            },

            async submitDonation() {
                this.form.post('/Donation', {
                    onSuccess: () => {
                        this.closeModal();
                        this.form.reset();
                    }
                });
            },
        }
    }
</script>
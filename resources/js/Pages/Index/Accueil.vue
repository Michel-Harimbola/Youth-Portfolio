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
                        <p v-if="isVisible">
                            Cependant, on constate que certains jeunes éprouvent des difficultés<br> 
                            à utiliser ces outils,tandis que d'autres n'ont même pas conscience<br>
                            de leur existence.<br>
                            C'est face à ce constat que Youth Computing entend apporter sa contribution.<br>

                            Créée le 17 mai 2021 par trois étudiants motivés, l'association compte<br>
                            aujourd'hui 19 membres actifs.
                        </p>
                    </Transition>
                </div>
                <button @click="isVisible = !isVisible" :class="isVisible ? 'rotate-180' : ''" class="flex justify-center hover:scale-125 ml-3 transform transition-transform duration-300">
                    <img src="images/arrows.svg" alt="arrows" class="w-12 h-12">
                </button>
           </div> 
           <div class="flex gap-x-6">
               <button @click="scrollToSecondPage" class="hover:scale-105 duration-300 bg-bleu text-white text-xl font-bold py-3 px-14">DECOUVRIR</button>
               <Link href="/Donation" class="hover:scale-105 duration-300 bg-fuchsia text-white text-xl font-bold py-3 px-14">DONATION</Link>
           </div>
       </div>
       <div style="width:70%;" class="mr-28 ">
           <img src="images/Hello.svg" alt="Hello" style="width: 100%;">
       </div>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<script>
    export default {
        name: "Accueil",

        data() {
            return {
                isVisible: false,
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
        }
    }
</script>
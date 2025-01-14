<template>
    <div :class="navClass">
      
        <!-- Navbar -->
        <nav class="bg-white py-5 ">
            <div class="flex justify-between pl-20">
                <div>
                    <img src="images/YouthComputingblanc.svg" alt="Logo" class="w-14  bg-red-500 rounded-full" >
                </div>
                <div class="flex flex-row justify-center text-xl items-center space-x-10 pr-3">
                  <ul class="tracking-wide flex gap-x-8 items-center ">
                    <li class="hover:scale-125 duration-300 py-1 hover:text-rose-500">
                      <Link href="/" class="cursor-pointer">ACCUEIL</Link>
                    </li>
                    <li class="hover:scale-125 duration-300 py-1 hover:text-rose-500">
                      <Link href="" class="cursor-pointer">NOS PROJETS</Link>
                    </li>
                    <li class="hover:scale-125 duration-300 py-1 hover:text-rose-500">
                      <Link href="" class="cursor-pointer">BLOG</Link>
                    </li>
                    <li class="hover:scale-125 duration-300 py-1 hover:text-rose-500">
                      <Link href="" class="cursor-pointer">A PROPOS</Link>
                    </li>
                    <div class="hover:scale-105 duration-300">
                        <Link href="/Login"class="hover:bg-rose-500 bg-rose-600 text-white font-bold px-9 py-3 cursor-pointer">CONNEXION</Link>
                    </div>
                    <div>
                        <img src="images/settings.svg" alt="setting gear" class="w-12">
                    </div>
                  </ul>                                        
                </div>
            </div>
        </nav>
    </div>

    <!-- corps de la page -->
    <slot> 
  
    </slot>

    <!-- pied de la page -->
    <footer>
        <div class="bg-blue-950 text-white flex justify-between px-20 pb-32 pt-24">
            <div class="bg-white w-36 h-36 flex flex-col justify-center items-center space-y-[-7px]">
                <img src="/images/YouthComputingblanc.svg" alt="Logo" class="w-14 bg-red-500 rounded-full">
                <div class="space-y-[-10px] flex flex-col items-center">
                    <p class="text-[30px] text-blue-950 font-black ">youth</p>
                    <p class="text-rose-500 text-[9px] ps-3 tracking-[2px] ">COMPUTING</p>
                </div>
            </div>
            <div class="flex flex-col text-xl space-y-5">
                <div class="space-y-[-5px] text-2xl">
                    <h1 class="font-black">YOUTH</h1>
                    <h1 class="font-black">COMPUTING</h1>
                </div>
                <p>A propos</p>
                <p>Nos activités</p>
                <p>Formations</p>
            </div>
            <div class="flex flex-col text-xl space-y-5">
                <h1 class="font-black text-2xl">EVENEMENTS</h1>
                <p>Status</p>
                <p>Communautés(Y2C)</p>
            </div>
            <div class=" space-y-5">
              <h1 class="text-2xl font-black mb-8">CONTACT</h1>
              <div v-for="contact in contacts" class="space-y-5">
                <div v-if="contact.contact_type.toLowerCase() == 'phone'.toLowerCase()"  class="flex space-x-5 items-center">
                  <img src="images/Contact/phone.svg" alt="phone" class="w-6">
                  <p>{{ contact.contact_details }}</p>
                </div>
                <div v-if="contact.contact_type.toLowerCase() == 'email'.toLowerCase()"  class="flex space-x-5 items-center">
                  <img src="images/Contact/email.svg" alt="email" class="w-6">
                  <p>{{ contact.contact_details }}</p>
                </div>
              </div>
              <div class="flex space-x-4">
                <img src="images/Contact/location.svg" alt="location" class="w-8 ml-[-4px] mt-[-8px]">
                <div>
                  <p> {{ location ? location.adress : 'Adresse non disponible' }}</p>
                  <p> {{ location ? location.lot : 'Lot non disponible' }}</p>
                </div>
              </div>
              <div class="flex pt-14 space-x-2 items-center">
                <p class="text-lg font-semibold">SUIVEZ NOUS :</p>
                <div v-for="contact in contacts">
                  <ul>
                    <li class="hover:scale-110 duration-300">
                      <div v-if="contact.contact_type.toLowerCase() == 'facebook'.toLowerCase()" >
                        <Link><img src="images/Contact/facebook.svg" alt="facebook" class="w-12 cursor-pointer"></Link>
                      </div>
                    </li>   
                    <li class="hover:scale-110 duration-300">
                      <div v-if="contact.contact_type.toLowerCase() == 'instagram'.toLowerCase()" >
                        <Link><img src="images/Contact/instagram.svg" alt="instagram" class="w-12 cursor-pointer"></Link>
                      </div>
                    </li>          
                    <li class="hover:scale-110 duration-300">
                      <div v-if="contact.contact_type.toLowerCase() == 'twitter'.toLowerCase()" >
                        <Link><img src="images/Contact/twitter.svg" alt="twitter" class="w-12 cursor-pointer"></Link>
                      </div>
                    </li>
                    <li class="hover:scale-110 duration-300">
                      <div v-if="contact.contact_type.toLowerCase() == 'whatsapp'.toLowerCase()" >
                        <Link><img src="images/Contact/whatsapp.svg" alt="whatsapp" class="w-12 cursor-pointer"></Link>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div>
                <Link href="/Donation"class="hover:border-rose-500 hover:text-rose-400 duration-300 border-2 px-10 py-2 mr-20 ml-[-40px]">DONATION</Link>
            </div>
        </div>
    </footer>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<script>
export default {
  props: {
    location: Object,
    contacts: Array,
  },
  data() {
    return {
      isScrolled: false,
    };
  },
  computed: {
    navClass() {
      return {
        'fixed top-0 left-0 right-0 bg-white z-50 transition-shadow duration-300': true,
        'shadow-lg': this.isScrolled, // Ajoute l'ombre si défilé
        'shadow-none': !this.isScrolled, // Pas d'ombre si en haut
      };
    },
  },
  methods: {
    handleScroll() {
      this.isScrolled = window.scrollY > 0; // Change l'état de la navbar
    },
  },
  mounted() {
    window.addEventListener("scroll", this.handleScroll);
  },
  beforeDestroy() {
    window.removeEventListener("scroll", this.handleScroll);
  },
};
</script>
<template>
    <div :class="navClass">
      
        <!-- Navbar -->
        <nav class="bg-white py-3 ">
            <div class="flex justify-between pl-20">
                <div>
                    <img src="images/YouthComputingblanc.svg" alt="Logo" class="w-14  bg-fuchsia rounded-full" >
                </div>
                <div class="flex flex-row justify-center text-xl items-center pr-3">
                  <ul class="tracking-wide flex gap-x-6 items-center ">
                    <li class="hover:scale-110 duration-300 py-1 hover:text-fuchsia">
                      <Link href="/" class="cursor-pointer">Accueil</Link>
                    </li>
                    <li class="hover:scale-110 duration-300 py-1 hover:text-fuchsia">
                      <Link href="" class="cursor-pointer">Nos activités</Link>
                    </li>
                    <li class="hover:scale-110 duration-300 py-1 hover:text-fuchsia">
                      <Link href="" class="cursor-pointer">Communautés Y2C</Link>
                    </li>
                    <li class="hover:scale-110 duration-300 py-1 hover:text-fuchsia">
                      <Link href="/Apropos" class="cursor-pointer">A propos</Link>
                    </li>
                    <div class="hover:scale-105 duration-300 -mr-3">
                        <Link href="/Login"class="bg-fuchsia text-white font-bold px-9 py-3 cursor-pointer">Connexion</Link>
                    </div>
                    <div>
                        <img src="images/settings.svg" alt="setting gear" class="w-10 mr-3">
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
        <div class="bg-bleu text-white flex justify-between px-20 pb-32 pt-24">
            <div class="bg-white w-36 h-36 flex flex-col justify-center items-center space-y-[-7px]">
                <img src="/images/YouthComputingblanc.svg" alt="Logo" class="w-14 bg-fuchsia rounded-full">
                <div class="space-y-[-10px] flex flex-col items-center">
                    <p class="text-[30px] text-bleu font-black ">youth</p>
                    <p class="text-fuchsia text-[9px] ps-3 tracking-[2px] ">COMPUTING</p>
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
                    <li class="hover:scale-110 duration-300">
                      <div v-if="contact.contact_type.toLowerCase() == 'linkedin'.toLowerCase()" >
                        <Link><img src="images/Contact/linkedin.svg" alt="linkedin" class="w-12 cursor-pointer"></Link>
                      </div>
                    </li>
                    <li class="hover:scale-110 duration-300">
                      <div v-if="contact.contact_type.toLowerCase() == 'youtube'.toLowerCase()" >
                        <Link><img src="images/Contact/youtube.svg" alt="youtube" class="w-12 cursor-pointer"></Link>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div>
                <button @click="openModal" class="hover:border-fuchsia hover:border-fuchsia duration-300 border-2 px-10 py-2 mr-20 ml-[-40px]">DONATION</button>
            </div>
        </div>
    </footer>

    <!-- add donation -->

    <div v-if="isModalOpen" class="fixed inset-0 flex items-center justify-center z-50">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75"></div>
        <div class="bg-white rounded-xl space-y-8 overflow-hidden shadow-2xl transform transition-all sm:max-w-lg sm:w-full p-6">
            <label class="text-5xl font-black text-bleu">Faire une <span class="text-fuchsia">Donation</span></label>
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

<script setup>
import { Link, useForm } from '@inertiajs/vue3';
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
      isModalOpen: false,
      form: useForm({
          title:'',
          description:'',
          amount:'',
          amount_received:'',
      }),
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

  },
  mounted() {
    window.addEventListener("scroll", this.handleScroll);
  },
  beforeDestroy() {
    window.removeEventListener("scroll", this.handleScroll);
  },
};
</script>
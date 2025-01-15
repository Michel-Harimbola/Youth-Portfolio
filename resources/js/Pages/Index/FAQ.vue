<template>
    <div class="space-y-10">
      <div>
        <div class="flex flex-col justify-center items-center gap-5 h-32">
          <div class="align-self-start">
            <h1 class="text-5xl text-rose-500 font-black">Questions fréquemment posées(FAQ)</h1>
          </div>
        </div>
      </div>
  
      <div class="flex flex-col space-y-5 mx-20">
        <div v-for="(faq, index) in faqs" :key="faq.id" class="flex justify-between items-center border-gray-300 border-t-2">
          <div class="flex flex-col">
            <h1 class="text-3xl text-blue-950 pt-6 pb-2 font-black">{{ faq.question }}</h1>
            <p v-if="isVisible[index]" class="text-gray-700 ml-3 text-xl">{{ faq.answer }}</p>
          </div>
          <button
            @click="toggleVisibility(index)"
            :class="isVisible[index] ? 'rotate-180' : ''"
            class="flex justify-center hover:scale-125 ml-3 transform transition-transform duration-300"
          >
            <img src="/images/arrows.svg" alt="arrows" class="w-12 h-12" />
          </button>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: "FAQ",
    props: {
      faqs: Array,
    },
    data() {
      return {
        isVisible: [],
      };
    },
    mounted() {
      this.isVisible = [true, ...Array(this.faqs.length - 1).fill(false)];
    },
    methods: {
      toggleVisibility(index) {
        this.isVisible[index] = !this.isVisible[index];
      },
    },
  };
  </script>
  
  
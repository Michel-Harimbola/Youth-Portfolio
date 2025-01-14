<template>
    <DashLayout>
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-5xl text-blue-950 font-black my-24">YOUTH<span class="text-rose-500">COMPUTING</span></h1>
            <img src="/images/YouthComputingblanc.svg" alt="logo" :id="isSpinning ? 'spin-slow' : ''" @click="toggleSpin"
            class=" bg-blue-950 rounded-full " id="spin-slow" style="width: 25%;">
        </div>
    </DashLayout>
</template>

<script setup>
    
</script>

<script>
    import DashLayout from '@/Layouts/DashLayout.vue';
    
    export default {
        components: {
            DashLayout
        },

        name: 'MyComponent',
        data() {
            return {
            isSpinning: true, 
            };
        },
        methods: {
            toggleSpin() {
            this.isSpinning = !this.isSpinning;
            },
  },

    };
</script>

<style scoped>
@keyframes spin-slow {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

#spin-slow {
  animation: spin-slow 4s linear infinite; 
}
</style>
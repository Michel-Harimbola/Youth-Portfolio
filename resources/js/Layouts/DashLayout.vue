<template>
    <div class="flex flex-col h-screen ">
        <div class="flex justify-between items-center px-4 bg-bleu rounded-2xl py-1 ml-28 m-3">
            <Link ></Link>
            <Link href="/Login/Dashboard" class="flex justify-end hover:text-rose-300 items-end text-xl font-bold text-white pl-32">Home</Link>
            <button @click="logout" class="text-rose-500 text-xl font-bold hover:text-rose-300 ">Déconnexion</button>
        </div>
        <div class="flex flex-row">
            <aside class="-mt-[51px]">
                <div class="bg-bleu flex flex-col justify-center items-center p-3 ml-2  space-y-2 rounded-3xl">
                    <Link href="/Login/Dashboard/User" class="bg-blue-900 hover:rotate-90 transition-all duration-700 rounded-xl ">
                        <img src="/images/Dashboard/User.svg" alt="User" class="w-[69px]" title="Utilisateur">
                    </Link>
                    <Link href="/Login/Dashboard/Historic" class="bg-blue-900 hover:rotate-90 transition-all duration-700 rounded-xl">
                        <img src="/images/Dashboard/History.svg" alt="History" class="w-[69px]" title="Historique">
                    </Link>
                    <Link href="/Login/Dashboard/Location" class="bg-blue-900 hover:rotate-90 transition-all duration-700 rounded-xl">
                        <img src="/images/Dashboard/Location.svg" alt="Location" class="w-[69px]" title="Location">
                    </Link>
                    <Link href="/Login/Dashboard/Feedback" class="bg-blue-900 hover:rotate-90 transition-all duration-700 rounded-xl">
                        <img src="/images/Dashboard/FeedBack.svg" alt="FeedBack" class="w-[69px]" title="Feedback">
                    </Link>
                    <Link href="/Login/Dashboard/Donation" class="bg-blue-900 hover:rotate-90 transition-all duration-700 rounded-xl">
                        <img src="/images/Dashboard/Donation.svg" alt="Donation" class="w-[69px]" title="Donation">
                    </Link>
                    <Link href="/Login/Dashboard/FAQ" class="bg-blue-900 hover:rotate-90 transition-all duration-700 rounded-xl">
                        <img src="/images/Dashboard/faq.svg" alt="faq" class="w-[69px]" title="FAQ">
                    </Link>
                    <Link href="/Login/Dashboard/Contact" class="bg-blue-900 hover:rotate-90 transition-all duration-700 rounded-xl">
                        <img src="/images/Dashboard/Contact.svg" alt="Contact" class="w-[69px]" title="Contact">
                    </Link>
                    <Link href="/Login/Dashboard/Realisation" class="bg-blue-900 hover:rotate-90 transition-all duration-700 rounded-xl">
                        <img src="/images/Dashboard/Realisation.svg" alt="Realisation" class="w-[69px]" title="Réalisation">
                    </Link>
                    <Link href="/Login/Dashboard/Partner" class="bg-blue-900 hover:rotate-90 transition-all duration-700 rounded-xl">
                        <img src="/images/Dashboard/Partner.svg" alt="Partner" class="w-[69px]" title="Partenaires">
                    </Link>
                    <Link href="/Login/Dashboard/Statistic" class="bg-blue-900 hover:rotate-90 transition-all duration-700 rounded-xl">
                        <img src="/images/Dashboard/statistics.svg" alt="Statistic" class="w-[69px]" title="Statistique">
                    </Link>
                    <Link href="/Login/Dashboard/Appointment" class="bg-blue-900 hover:rotate-90 transition-all duration-700 rounded-xl">
                        <img src="/images/Dashboard/Appointment.svg" alt="Rendez-Vous" class="w-[69px]" title="Rendez-Vous">
                    </Link>
                    <Link href="/Login/Dashboard/Team" class="bg-blue-900 hover:rotate-90 transition-all duration-700 rounded-xl">
                        <img src="/images/Dashboard/team.svg" alt="Team" class="w-[69px]" title="Equipe">
                    </Link>
                </div>
            </aside>
            <main class="flex-1 border-bleu rounded-3xl ml-2 mr-2 border-2">
                <slot></slot>
            </main>
        </div>
    </div>
</template>

<script setup>
    import { Link, router } from '@inertiajs/vue3';
</script>

<script>
    export default {
        name: 'DashLayout',

    }

    function logout() {
        router.post('/Logout')
    }
</script>

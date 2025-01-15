<template>
    <div class="flex flex-col justify-center items-center py-10">
        <div>
            <h1 class="text-6xl font-bold "> <span class="text-blue-950">Nos</span> <span class="text-rose-500">projets</span></h1>
        </div>
    </div>
    <div  class="flex justify-between items-center h-14 pt-8 pb-40 pr-20 pl-12" >
        <div>
            <img src="images/soamampiaty.svg" alt="soamampiaty" class="w-96">
        </div>
        <div>
            <img src="images/soamikajy.svg" alt="soamikajy" class="w-80">
        </div>
        <div>
            <img src="images/soamiranty.svg" alt="soamiranty" class="w-80">                  
        </div>
    </div>
    <div class="bg-gray-200 flex flex-row justify-between items-center px-20 py-24">
        <div>
            <h1 class="text-6xl text-blue-950 font-bold ">Statistique de</h1>
            <h1 class="text-6xl text-rose-500 font-bold ">Nos comptes actuelles</h1><br>
            <p class="text-xl">
                Développez vos compétences pour un avenir melleir.<br>
                Apprenez de nouveaux savoir-faire et réaliser vos projets.
            </p>
        </div>
        <div class="grid text-xl grid-cols-2 gap-x-36 gap-y-28">
            <div class="flex flex-row items-center space-x-6">
                <div>
                    <img src="images/icons/user-group.svg" alt="soamiranty" class="w-24">                  
                </div>
                <div>
                    <h2 class="text-3xl text-rose-500 font-bold ">+{{ statistic.Training_nbr }}</h2>
                    <p>Etudiants déjà formé</p>
                </div>
            </div>
            <div class="flex flex-row items-center space-x-6">
                <div>
                    <img src="images/icons/chat-bubble-left-right.svg" alt="soamiranty" class="w-24">                  
                </div>
                <div>
                    <h2 class="text-3xl text-rose-500 font-bold ">+{{ statistic.Student_nbr }}</h2>
                    <p>Nombre d'activités</p>
                </div>
            </div>
            <div class="flex flex-row items-center space-x-6">
                <div>
                    <img src="images/icons/academic-cap.svg" alt="soamiranty" class="w-24">                  
                </div>
                <div>
                    <h2 class="text-3xl text-rose-500 font-bold ">+{{ statistic.activitie_nbr }}</h2>
                    <p>Formations certifié</p>
                </div>
            </div>
            <div class="flex flex-row items-center space-x-6">
                <div>
                    <img src="images/icons/book-open.svg" alt="soamiranty" class="w-24">                  
                </div>
                <div>
                    <h2 class="text-3xl text-rose-500 font-bold ">+{{ statistic.Certified_training }}</h2>
                    <p>Nombre de formations</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Project",
        props: {
            statistic: Object,
        }
    }
</script>
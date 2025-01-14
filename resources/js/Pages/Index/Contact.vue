<template>
    <div class="flex justify-center">
        <div class="flex flex-row py-32">
            <div class="bg-blue-950 flex flex-col justify-center items-start text-white space-y-12 py-12 pl-16 rounded-l-[25px]">
                <div class="space-y-4 pr-12">
                    <p class="text-5xl font-black">Nous contacter</p>
                    <p class="text-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br>
                    dolores quia eaque quisquam, perspiciatis iure earum aperiam ullam inci.<br>
                    Sapiente et magni vel repellat, distinctio ipsum quam. magni vel aperia</p>
                </div>
                <div class="container space-y-8 flex flex-col pr-28">
                    <input type="text" class=" bg-blue-950 text-xl rounded-lg border-1 border-white placeholder:text-white py-3 pl-6" 
                        placeholder="Votre email......">
                    <textarea name="message" placeholder="Votre message......" rows="6" cols="40" 
                            class="bg-blue-950 text-xl border-1 border-white rounded-lg placeholder:text-white pl-5 pt-4"></textarea>
                </div>
                <button class="text-xl hover:bg-rose-500 hover:scale-105 duration-300 bg-rose-600 px-12 py-3">ENVOYER</button>
            </div>
            <div class="bg-red-500 p-44 rounded-r-[25px]" style="width: 100%;">
                <img src="/images/YouthComputingblanc.svg" alt="Logo" style="width: 100%;">
            </div>   
        </div>
    </div>
</template>

<script>
    export default {
        name:"Contact"
    }
</script>
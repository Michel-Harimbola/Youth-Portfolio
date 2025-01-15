<template>
        <div class="flex flex-col space-y-16">
            <div>
                <Accueil />
            </div>
            <div id="section2">
               <Presentation />
            </div>
            <div>
                <Vision />
            </div>
            <div>
                <Project :statistic="statistic" />
            </div>
            <div>
                <Notre_Equipe />
            </div>
            <div>
               <FAQ :faqs="faqs" />
            </div>
            <div>
               <Partner :partners="partners" />
            </div>
            <div>
                <Realisation :realisations="realisations" />
            </div>
            <div>
                <Contact />
            </div>
            <div>
                <Feedback :feedbacks="feedbacks" />
            </div>
        </div>
</template>

<script>
import MainLayout from '@/Layouts/MainLayout.vue';
import Accueil from './Accueil.vue';
import Presentation from './Presentation.vue';
import Vision from './Vision.vue';
import Project from './Project.vue';
import Notre_Equipe from './Notre_Equipe.vue';
import FAQ from './FAQ.vue';
import Partner from './Partner.vue';
import Realisation from './Realisation.vue';
import Contact from './Contact.vue';
import Feedback from './Feedback.vue';

export default {
    name: "Index",
    layout:MainLayout, 

    props: {
        faqs: Array,
        location: Object,
        contacts: Array,
        feedbacks: Array,
        partners: Array,
        statistic: Object,
        realisations: Array,
    },

    components: {
        Accueil,
        Presentation,
        Vision,
        Project,
        Notre_Equipe,
        FAQ,
        Partner,
        Realisation,
        Contact,
        Feedback,
    },
};
</script>
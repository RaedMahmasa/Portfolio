<script setup>
import Project from './Project.vue';
import { ref } from 'vue';
const props = defineProps ({
    skills: Object ,
    projects:Object
});
const filteredProjects = ref(props.projects.data);
const selectedSkill = ref("all")

const filterProjects = (id) => {
    if (id === "all") {
        filteredProjects.value =props.projects.data;
        selectedSkill.value = id;
    } else {
        filteredProjects.value = props.projects.data.filter(project => {
            return project.skill.id === id;
        });
        selectedSkill.value = id;
    }
}
</script>

<template>
    <div class="container mx-auto">
        <nav class=" mb-12 border-b-2 border-tail-100 dark:text-dark-navy-100">
            <ul class="flex flex-col lg:flex-row justify-evenly items-center">
                <li class="cursor-pointer capitalize m-2">
                    <button @click="filterProjects('all')"  class=" flex text-center px-6 py-4 hover:text-light-tail-100 dark:text-dark-navy-100 " :class=" [selectedSkill === 'all' ? 'bg-light-secondary text-light-tail-500 dark:text-dark-navy-100' :
                '',]">
                        All
                    </button>
                </li>
                <li class="cursor-pointer capitalize m-4" v-for="projectSkill in skills.data" :key="projectSkill.id">
                    <button @click="filterProjects(projectSkill.id)" class="btn btn-md
              bg-accent
              hover:bg-light-secondary hover:text-light-tail-500
              dark:hover:bg-dark-secondary dark:hover:text-dark-navy-100
              md:btn-lg
              transition-all flex text-center px-4 py-2 hover:text-light-tail-500 dark:text-dark-navy-100" :class=" [selectedSkill === projectSkill.id ? 'bg-light-secondary text-tail-100 dark:text-dark-navy-100' :
                '',]">
                       {{projectSkill.name}}
                    </button>

                </li>
            </ul>

        </nav>
        <section class="grid gap-y-12 lg:grid-cols-3 lg:gap-8">
            <Project v-for="project in filteredProjects" :key="project.id" :projects="project" />
        </section>
    </div>

</template>

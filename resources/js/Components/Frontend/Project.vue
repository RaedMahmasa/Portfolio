<script setup>
import { Link } from '@inertiajs/vue3'
defineProps ({
    projects:Object
});

</script>
<template>
    <Link :href="projects.project_url" class="group flex flex-col items-center text-center cursor-pointer"
    v-motion
      :initial="{
        opacity: 0,
        y: 100,
      }"
      :enter="{
        opacity: 1,
        y: 0,
      }">

      <div class="mb-6">
          <img class="rounded-2xl h-56" :src="projects.image" :alt="projects.name" />
      </div>
      <span class="group-hover:text-light-tail-500 capitalize text-accent text-sm mb-3">
          {{ projects.skill.name }}
      </span>
      <h3 class="group-hover:text-light-tail-500  text-2xl font-semibold capitalize mb-3">
          {{ projects.name }}
      </h3>
    </Link>
</template>

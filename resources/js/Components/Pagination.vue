<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
    links: Object,
});
</script>

<template>
    <div class="flex">
        <template v-for="(link, key) in links" :key="key">
            <div
                v-if="link.url === null"
                v-html="link.label"
                class="mb-1 mr-1 px-3 py-2 text-gray-400 text-sm leading-4 border rounded"
            ></div>
            <Link
                v-else
                :href="link.url"
                v-html="link.label"
                class="mb-1 mr-1 px-3 py-2 text-gray-900 text-sm leading-4 border rounded hover:bg-white focus:text-indigo-500 focus:border-indigo-500"
                :class="{ 'bg-indigo-300': link.active }"
            ></Link>
        </template>
    </div>
</template>

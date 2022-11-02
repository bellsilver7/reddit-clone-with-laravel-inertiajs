<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
defineProps({
    community: Object,
});
</script>
<template>
    <GuestLayout>
        <div class="flex justify-end m-2 p-2">
            <Link
                v-if="$page.props.auth.check"
                :href="route('communities.posts.create', community.slug)"
                class="px-3 py-4 rounded bg-indigo-500 text-white"
                >Create Post</Link
            >
        </div>
        <h1>Subreddit {{ community.name }} show page</h1>
    </GuestLayout>
</template>

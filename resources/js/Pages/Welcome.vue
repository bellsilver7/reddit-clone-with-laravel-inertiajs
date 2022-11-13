<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import Pagination from "@/Components/Pagination.vue";
import PostCard from "@/Components/PostCard.vue";

defineProps({
    communities: Object,
    posts: Object,
});
</script>
<template>
    <GuestLayout>
        <section class="flex md:flex-row m-2 p-2">
            <div class="w-8/12">
                <PostCard
                    v-for="post in posts.data"
                    :key="post.id"
                    :post="post"
                    :community="post.community_slug"
                />
            </div>
            <div class="w-4/12 p-4">
                <div class="m-2 p-2 bg-slate-500 text-white">
                    <h2>Top Communities</h2>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>

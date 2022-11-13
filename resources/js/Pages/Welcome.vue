<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import PostCard from "@/Components/PostCard.vue";
import CommunityList from "@/Components/CommunityList.vue";

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
                <CommunityList :communities="communities.data">
                    <template #title>Top Communities</template>
                </CommunityList>
            </div>
        </section>
    </GuestLayout>
</template>

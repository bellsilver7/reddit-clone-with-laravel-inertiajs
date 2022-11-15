<script setup>
import { Link } from "@inertiajs/inertia-vue3";
// import PostVote from "./PostVote.vue";
import PostVote from "@/Components/PostVote.vue";

defineProps({
    post: Object,
    community: String,
});
</script>
<template>
    <div
        class="mt-4 flex max-w-4xl rounded-lg border border-gray-200 bg-white shadow-md dark:border-gray-700 dark:bg-gray-800"
    >
        <div class="mr-3">
            <PostVote :post="post" />
        </div>
        <div>
            <div class="m-2 flex p-2">
                <Link
                    :href="route('frontend.communities.show', community)"
                    class="mr-3 font-semibold hover:text-indigo-700"
                    >r/{{ community }}</Link
                >
                <div class="flex">
                    Posted by
                    <span class="font-semibold mx-1">{{ post.username }}</span>
                    {{ post.created_at }}
                </div>
            </div>
            <Link
                :href="
                    route('frontend.communities.posts.show', [
                        community,
                        post.slug,
                    ])
                "
            >
                <h5
                    class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-indigo-700"
                >
                    {{ post.title }}
                </h5>
            </Link>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{ post.description }}
            </p>
            <div class="m-2 flex p-2">
                <p class="mr-4 p-2">Comments({{ post.comments_count }})</p>
                <Link
                    :href="
                        route('frontend.communities.posts.show', [
                            community,
                            post.slug,
                        ])
                    "
                    class="inline-flex items-center rounded-lg bg-blue-700 py-2 px-2 text-center text-sm font-medium text-white"
                >
                    Read more
                    <!-- <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns=""> -->
                </Link>
            </div>
        </div>
    </div>
</template>

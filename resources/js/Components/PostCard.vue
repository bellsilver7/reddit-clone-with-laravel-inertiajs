<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import PostVote from "./PostVote.vue";

defineProps({
    post: Object,
    community: String,
});
</script>
<template>
    <div
        class="mt-4 flex max-w-4xl rounded-lg border border-gray-200 bg-white p-6 shadow-md dark:border-gray-700 dark:bg-gray-800"
    >
        <div class="mr3">
            <PostVote />
        </div>
        <div>
            <div class="m-2 flex p-2">
                <span class="mr-3 font-semibold">r/{{ community }}</span>
                <div class="flex">
                    Posted by
                    <span class="ml-1 font-semibold">{{ post.username }}</span>
                </div>
            </div>
            <Link href="#">
                <h5
                    class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                    {{ post.title }}
                </h5>
            </Link>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{ post.description }}
            </p>
            <div class="m-2 flex p-2">
                <p class="mr-4 p-2">Comments(2)</p>
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

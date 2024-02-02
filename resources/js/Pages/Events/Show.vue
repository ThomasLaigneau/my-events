<script setup>

import AppLayout from '@/Layouts/AppLayout.vue';
import {ref} from 'vue';

const props = defineProps({
    event: {
        type: Array,
        required: true,
    },
    userId: {
        type: Number,
        required: true,
    },
    isUserAttached: {
        type: Boolean,
        required: true,
    },
});
</script>

<template>
    <AppLayout title="Events">
        <section>
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
                <header>
                    <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Evenements</h2>

                    <p class="mt-4 text-8xl font-bold text-center">
                        {{ event.title }} </p>
                </header>
            </div>
            <div class="flex px-48">
                <img src="https://picsum.photos/1000?random=0" alt=""
                     class="mx-auto w-96 object-cover"/>
                <div class="my-auto">
                    <p>
                        <span class="text-red-800 text-xs">
                            {{ event.location }} </span>
                    </p>
                    <p>
                        <span class="">
                            {{ event.description }} </span>
                    </p>
                    <p>
                        <span class="text-gray-900"> {{ event.price }}$</span>
                    </p>
                </div>
                <a v-if="!props.isUserAttached" :href="`/attach/events/${props.event.id}/users/${props.userId}`">S'inscrire</a>
                <a v-else :href="`/detach/events/${props.event.id}/users/${props.userId}`">Se désinscrire</a>
            </div>
        </section>
    </AppLayout>
</template>


<style scoped></style>


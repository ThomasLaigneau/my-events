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
    userCount: {
        type: Number,
        required: true,
    },
});

</script>

<template>

    <AppLayout title="Events">

        <section class="px-8 py-12">

            <div class="container mx-auto flex flex-wrap pb-12">

                <header class="w-full text-left pb-6">
                    <h2 class="text-3xl font-bold text-gray-900">Evenements</h2>
                    <p class="mt-4 text-6xl font-bold">
                        {{ event.title }}
                    </p>
                </header>

                <div class="w-full md:w-1/2 p-6 flex flex-col">
                    <img src="https://picsum.photos/1000?random=0" alt="" class="mx-auto w-96 h-96 object-cover rounded-lg shadow-md"/>
                </div>

                <div class="w-full md:w-1/2 p-6 space-y-2">
                    <span class="inline-block bg-red-200 text-red-800 text-xs px-2 rounded-full uppercase font-semibold tracking-wide">
                        {{ event.location }}
                    </span>
                    <p class="mt-1 text-lg leading-tight font-semibold text-gray-900">
                        {{ event.description }}
                    </p>
                    <p class="mt-2 text-gray-600">
                        Price: {{ event.price }}$
                    </p>
                    <p class="mt-2 text-gray-600">
                        Capacity: {{ props.userCount }} {{ event.capacity }} places
                    </p>
                    <p class="mt-2 text-gray-600">
                        Starts at: {{ event.start_date }}
                    </p>
                    <p class="mt-2 text-gray-600">
                        Ends at: {{ event.end_date }}
                    </p>
                    <a v-if="!props.isUserAttached" :href="`/attach/events/${props.event.id}/users/${props.userId}`" class="mt-4 block w-full px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-gray-700 rounded shadow
                    hover:shadow-lg hover:bg-gray-600 focus:outline-none">
                        S'inscrire
                    </a>
                    <a v-else :href="`/detach/events/${props.event.id}/users/${props.userId}`" class="mt-4 block w-full px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-600 rounded shadow
                    hover:shadow-lg hover:bg-red-500 focus:outline-none">
                        Se désinscrire
                    </a>
                </div>

            </div>

        </section>

    </AppLayout>

</template>

<style scoped></style>

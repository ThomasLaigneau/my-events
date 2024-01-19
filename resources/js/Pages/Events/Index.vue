<script setup>

import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
    events: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <AppLayout title="Events">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Events
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div v-for="event in events" :key="event.id">
                    <h2>
                        {{ event.title }}
                    </h2>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>

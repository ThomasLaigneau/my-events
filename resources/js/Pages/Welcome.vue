<script setup>
import {Head, Link, router} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>


<template>
    <AppLayout>
        <Head>
            <title>Welcome</title>
        </Head>

        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                    Welcome to Laravel
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Select a route from the sidebar
                </p>
            </div>
        </div>
    </AppLayout>
</template>

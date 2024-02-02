<script setup>
import {Head, Link, router} from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>


<template>
Welcome
</template>

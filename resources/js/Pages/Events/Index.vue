<script setup>

import AppLayout from '@/Layouts/AppLayout.vue';
import { ref } from 'vue';

const myCheckbox = ref('');


defineProps({
    events: {
        type: Array,
        required: true,
    },
    categories: {
        type: Array,
        required: true,
    },
});


const unselectCheckbox = () => {
    console.log(myCheckbox.value[1]);
    for(let i=0;i < myCheckbox.value.length; i++){
        myCheckbox.value[i].checked = false;
    }
}


const highestPrice = events => Math.max(...events);


</script>

<template>
    <AppLayout title="Events">

        <section>
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
                <header>
                    <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Evenements</h2>

                    <p class="mt-4 max-w-md text-gray-500">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
                        dicta incidunt est ipsam, officia dolor fugit natus?
                    </p>
                </header>

                <div class="mt-8 sm:flex sm:items-center sm:justify-between">
                    <div class="block sm:hidden">
                        <button
                            class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                            <span class="text-sm font-medium"> Filters & Sorting </span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-4 w-4 rtl:rotate-180">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>

                    <div class="hidden sm:flex sm:gap-4">
                        <div class="relative">
                            <details class="group [&_summary::-webkit-details-marker]:hidden">
                                <summary
                                    class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                                    <span class="text-sm font-medium"> Catégories </span>

                                    <span class="transition group-open:-rotate-180">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </summary>

                                <div
                                    class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0">
                                    <div class="w-96 rounded border border-gray-200 bg-white">
                                        <header class="flex items-center justify-between p-4">
                                            <span class="text-sm text-gray-700"> 0 Selected </span>

                                            <button @click="unselectCheckbox" type="button"
                                                class="text-sm text-gray-900 underline underline-offset-4">
                                                Reset
                                            </button>
                                        </header>

                                        <ul class="space-y-1 border-t border-gray-200 p-4">
                                            <li v-for="(categories, index) in categories">
                                                <label for="myCheckbox" class="inline-flex items-center gap-2">
                                                    <input type="checkbox"
                                                    ref="myCheckbox" id="myCheckbox"
                                                        class="h-5 w-5 rounded border-gray-300" />

                                                    <span class="text-sm font-medium text-gray-700"> {{ categories.name }}
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </details>
                        </div>

                        <div class="relative">
                            <details class="group [&_summary::-webkit-details-marker]:hidden">
                                <summary
                                    class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                                    <span class="text-sm font-medium"> Price </span>

                                    <span class="transition group-open:-rotate-180">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </summary>

                                <div
                                    class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0">
                                    <div class="w-96 rounded border border-gray-200 bg-white">
                                        <header class="flex items-center justify-between p-4">
                                            <span class="text-sm text-gray-700"> The highest price is {{ highestPrice }}
                                            </span>

                                            <button type="button"
                                                class="text-sm text-gray-900 underline underline-offset-4">
                                                Reset
                                            </button>
                                        </header>

                                        <div class="border-t border-gray-200 p-4">
                                            <div class="flex justify-between gap-4">
                                                <label for="FilterPriceFrom" class="flex items-center gap-2">
                                                    <span class="text-sm text-gray-600">$</span>

                                                    <input type="number" id="FilterPriceFrom" placeholder="From"
                                                        class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                                </label>

                                                <label for="FilterPriceTo" class="flex items-center gap-2">
                                                    <span class="text-sm text-gray-600">$</span>

                                                    <input type="number" id="FilterPriceTo" placeholder="To"
                                                        class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </details>
                        </div>
                    </div>

                    <div class="hidden sm:block">
                        <label for="SortBy" class="sr-only">SortBy</label>

                        <select id="SortBy" class="h-10 rounded border-gray-300 text-sm">
                            <option>Trier par</option>
                            <option value="Price, ASC">Prix croissant</option>
                            <option value="Price, DESC">Prix décroissant</option>
                            <option value="Title, ASC">Alphabétique croissant</option>
                            <option value="Title, DESC">Alphabétique croissant</option>
                        </select>
                    </div>
                </div>

                <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

                    <li v-for="(events, index) in events">
                        <a href="#" class="block overflow-hidden">
                            <div class="group">
                                <img src="https://picsum.photos/1000?random=0" alt=""
                                    class="h-[200px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]" />
                                <h3 class="mt-2 text-sm text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                    {{ events.title }}
                                </h3>
                            </div>

                            <div class="relative bg-white pt-3">
                                <p>
                                    <span class="tracking-wider text-gray-900"> {{ events.price }}$</span>
                                </p>
                                <p>
                                    <span
                                        class="tracking-wider text-red-800 text-xs hover:underline hover:underline-offset-4">
                                        {{ events.location }} </span>
                                </p>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </section>
    </AppLayout>
</template>




<style scoped></style>

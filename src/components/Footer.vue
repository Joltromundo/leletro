<script setup lang="ts">
import IconLogo from './icons/IconLogo.vue'
</script>

<template>
    <footer class="rounded-lg shadow bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-5 sm:p-10 md:py-8">
            <div class="flex justify-center flex-col items-center sm:flex-row sm:flex sm:items-between sm:justify-between">
                <route-link to="/" class="flex items-center mb-4 sm:mb-0">
                    <IconLogo />
                </route-link>

                <div class="flex flex-wrap items-center text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023
                        <route-link to="/" class="hover:underline">Leletro™</route-link>. All Rights Reserved.</span>
                </div>
            </div>
        </div>
    </footer>
</template>
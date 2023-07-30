<script setup lang="ts">
    import IconLogo from './icons/IconLogo.vue'
    import IconInfo from './icons/IconInfo.vue'
</script>

<template>
    <header class="rounded-lg shadow bg-gray-900 m-4">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <IconLogo />
                </a>
            </div>

            <div class="flex lg:hidden">
                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            
            <div class="flex bg-red gap-8">
                <router-link to="/" class="text-sm font-semibold leading-6 text-slate-200">Home</router-link>
                <router-link to="/appliance" class="text-sm font-semibold leading-6 text-slate-200">Appliances</router-link>
                <router-link to="/appliance/create" class="text-sm font-semibold leading-6 text-slate-200">Create new</router-link>
            </div>

            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="#" class="text-sm font-semibold leading-6 text-slate-300">
                    <span aria-hidden="true">
                        <IconInfo />
                    </span>
                </a>
            </div>
        </nav>

        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
        </div>
    </header>
</template>
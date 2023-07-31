<script setup lang="ts">
    import IconLogo from './icons/IconLogo.vue'
    import IconInfo from './icons/IconInfo.vue'
    import IconClose from './icons/IconClose.vue'
</script>

<template>
    <header class="rounded-lg shadow bg-gray-900 m-4">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex sm:hidden">
                <button @click="toggleMenu()" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <IconLogo />
                </a>
            </div>
            
            <div :class="{ hidden: openedMenu }" class="fixed flex flex-col p-10 w-[55%] h-full top-0 left-0 bg-slate-900 shadow-lg shadow-black z-10 sm:relative sm:flex-row sm:p-0 sm:w-auto sm:h-full sm:top-0 sm:left-0 sm:bg-inherit sm:shadow-none sm:z-1 sm:relative sm:flex gap-8">
                <router-link to="/" class="text-xl sm:text-sm font-semibold leading-6 text-slate-200">Home</router-link>
                <router-link to="/appliance" class="text-xl sm:text-sm font-semibold leading-6 text-slate-200">Appliances</router-link>
                <router-link to="/appliance/create" class="text-xl sm:text-sm font-semibold leading-6 text-slate-200">Create new</router-link>

                <span @click="toggleMenu()" class="close-menu cursor-pointer absolute right-5 top-10 z-10 text-slate-100 text-xl block sm:hidden">
                    <IconClose />
                </span>
            </div>

            <div class="flex lg:flex lg:flex-1 lg:justify-end">
                <a href="#" class="text-sm font-semibold leading-6 text-slate-300">
                    <span aria-hidden="true">
                        <IconInfo />
                    </span>
                </a>
            </div>
        </nav>
    </header>
</template>

<script lang="ts">
    import { defineComponent } from 'vue'

    export default defineComponent({
        data(){
            return {
                openedMenu: true
            }
        },
        methods:{
            toggleMenu: function(){
                if(this.openedMenu === false){
                    this.openedMenu = true
                } else {
                    this.openedMenu = false
                }
            }
        }
    })

</script>
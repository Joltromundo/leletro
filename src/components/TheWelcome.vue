<script setup lang="ts"></script>

<template>
  <div>
    <div class="relative isolate px-6 lg:px-8">
      <div class="mx-auto max-w-2xl py-10">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
          <div
            class="relative rounded-full px-3 py-1 text-sm leading-6 text-slate-300 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
            Curious about how the API works? <a href="#" class="font-semibold text-indigo-600"><span
                class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
          </div>
        </div>
        <div class="text-center">
          <h1 class="text-4xl font-bold tracking-tight text-slate-100 sm:text-6xl">Create news Appliances registers</h1>
          <p class="mt-6 text-lg leading-8 text-slate-300">Keep in control your data with this panel, that helps to see all your Appliances! Let's start?</p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <router-link to="/appliance"
              class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">See Appliances</router-link>
            <router-link to="/appliance/create" class="text-sm font-semibold leading-6 text-slate-100">Create new <span
                aria-hidden="true">→</span></router-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

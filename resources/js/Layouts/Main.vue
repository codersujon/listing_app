<script setup>
    import { switchTheme } from '../theme';
</script>

<template>
    <header class="bg-slate-800 text-white">
        <nav class="p-6 mx-auto max-w-screen-lg flex items-center justify-between">
            <Link :href="route('home')">Home</Link>
            
            <div>
                <button 
                @click="switchTheme"
                class="w-6 h-6 hover:bg-slate-700 grid place-items-center rounded-full hover:outline outline-1">
                    <i class="fa-solid fa-circle-half-stroke"></i>
                </button>
            </div>
        </nav>
    </header>

    <main class="p-6 mx-auto max-w-screen-lg">
        <slot />
    </main>
</template>

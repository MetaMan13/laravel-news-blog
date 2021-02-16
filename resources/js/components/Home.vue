<template>
    <div>
        <navigation></navigation>
        <div class="h-screen w-full bg-green-300"></div>
        <div class="h-screen w-full bg-yellow-300"></div>
        <div class="h-screen w-full bg-indigo-300"></div>
    </div>
</template>

<script>
    import Navigation from './Navigation.vue'
    export default {
        components: {
            Navigation
        },
        mounted() {
            console.log('Home mounted.')
        }
    }
</script>

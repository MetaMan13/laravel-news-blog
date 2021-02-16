<template>
    <div>
        <navigation></navigation>
        <left-side-bar></left-side-bar>
        <right-side-bar></right-side-bar>

        <div class="min-h-screen">
            <div class="bg-gray-100 min-h-screen"></div>
            <div class="bg-gray-200 min-h-screen"></div>
            <div class="bg-gray-50 min-h-screen"></div>
        </div>
    </div>
</template>

<script>
    import Navigation from './Navigation.vue'
    import LeftSideBar from './left-side-bar/LeftSideBar'
    import RightSideBar from './right-side-bar/RightSideBar'

    export default {
        components: {
            Navigation,
            LeftSideBar,
            RightSideBar
        },
        mounted() {
            console.log('Home mounted.')
        }
    }
</script>

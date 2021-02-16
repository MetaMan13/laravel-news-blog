<template>
    <div>
        <navigation></navigation>
        <left-side-bar></left-side-bar>
        <right-side-bar></right-side-bar>

        <div class="min-h-screen md:w-6/12 mx-auto bg-gray-100 z-0">
            <div class="min-h-screen w-full mx-auto px-4 md:px-6 lg:px-10 xl:px-36 pt-6 lg:pt-10 xl:py-16">
                <!-- Post item starts -->
                <div class="bg-white mb-8" v-for="post in posts" v-bind:key="post.id">
                    <h5>{{ post.title }}</h5>
                    <p>{{ post.body }}</p>
                </div>
            </div>
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
        data(){
            return{
                posts: []
            }
        },
        mounted() {
            console.log('Home mounted.')
        },
        created(){
            axios
            .get('http://127.0.0.1:8000/api/home')
            .then(response => this.posts = response.data)
            .catch(console.log);
        }
    }
</script>

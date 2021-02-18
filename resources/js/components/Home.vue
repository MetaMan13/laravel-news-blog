<template>
    <div>
        <navigation></navigation>
        <left-side-bar></left-side-bar>
        <right-side-bar></right-side-bar>

        <!-- Main Content starts -->
        <div class="min-h-screen md:w-6/12 mx-auto bg-gray-100 z-0">
            <div class="min-h-screen w-full mx-auto px-4 pt-8 md:px-6 lg:px-10 lg:pt-10 xl:py-16 xl:px-40">


                <!-- Post item starts -->
                <div class="bg-white mb-8 py-4 rounded-md shadow-md md:mb-10 lg:mb-12" v-for="post in posts" v-bind:key="post.id">
                    <h4 class="text-sm font-semibold px-4 mb-2 lg:px-6">{{ post.user.name }}</h4>
                    <h5 class="text-lg font-bold px-4 mb-2 lg:px-6 text-gray-800">{{ post.title }}</h5>
                    <p class="text-md px-4 mb-4 lg:px-6">{{ post.body }}</p>
                    <div class="flex px-4 lg:px-6">
                        <div class="flex self-center">
                            <i class="fas fa-thumbs-up self-center"></i>
                            <p class="self-center ml-1">{{ post.likes.length }}</p>
                        </div>
                        <div class="flex self-center ml-5">
                            <i class="fas fa-comments self-center"></i>
                            <p class="self-center ml-1">{{ post.comments.length }}</p>
                        </div>
                    </div>
                </div>
                <!-- Post item ends -->


            </div>
        </div>
        <!-- Main Content ends -->
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
        mounted(){
            axios
            .get('http://127.0.0.1:8000/api/home')
            .then(response => this.posts = response.data)
            .catch(console.log);
        }
    }
</script>

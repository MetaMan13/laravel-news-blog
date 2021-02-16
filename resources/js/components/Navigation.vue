<template>
    <div class="h-12 flex md:h-16 bg-white sticky top-0 left-0 z-20 border-b-2 border-gray-200">
        <div class="h-full flex justify-between px-4 w-full md:mx-auto md:px-6 lg:px-12 xl:px-32">

            <!-- Logo -->
            <div class="h-full flex">
                <i class="fas fa-blog text-xl font-semibold text-green-400 self-center"></i>
                <h3 class="text-xl ml-2 font-semibold text-gray-800 hover:text-gray-600 transition duration-300 ease-in-out self-center">Blog</h3>
            </div>

            <!-- Hamburger icon -->
            <div class="md:hidden flex">
                <i class="fas fa-bars self-center text-lg" @click="toggleHamburgerMenu"></i>
            </div>

            <!-- Hamburger menu -->
            <div v-show="hamburgerMenuOpen" class="md:hidden bg-green-500 absolute h-screen w-full top-0 left-0">
                <i class="fas fa-times" @click="toggleHamburgerMenu"></i>
            </div>

            <!-- Desktop menu -->
            <div class="hidden md:flex md:flex-row h-full">
                <router-link to="/" class="self-center font-semibold mr-8 hover:text-green-400 transition duration-300 ease-in-out">Home</router-link>
                <router-link to="/sad" class="self-center font-semibold mr-8 hover:text-green-400 transition duration-300 ease-in-out">Profile</router-link>
                <router-link to="/" class="self-center font-semibold hover:text-green-400 transition duration-300 ease-in-out">Posts</router-link>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            hamburgerMenuOpen: false,
        }
    },

    methods: {
        toggleHamburgerMenu(){
            return (this.hamburgerMenuOpen ? this.hamburgerMenuOpen = false : this.hamburgerMenuOpen = true)
        }
    }
}
</script>
<template>
    <div class="hidden h-screen w-3/12 fixed top-0 left-0 z-10 md:block border-r-2 border-gray-200 mt-12 md:mt-16 bg-white">
        <div class="md:ml-6 lg:ml-12 xl:ml-32 h-full">
            <left-side-bar-title></left-side-bar-title>
            <left-side-bar-menu></left-side-bar-menu>
        </div>
    </div>
</template>

<script>
import LeftSideBarTitle from './LeftSideBarTitle'
import LeftSideBarMenu from './LeftSideBarMenu'

export default {
    components:{
        LeftSideBarTitle,
        LeftSideBarMenu
    }
}
</script>
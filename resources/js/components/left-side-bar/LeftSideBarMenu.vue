<template>
    <div class="h-full flex flex-col">
        <div v-for="icon in icons" v-bind:key="icon.name" class="mb-2 flex group">
            <i v-bind:class="icon.class" class="text-lg self-center group-hover:text-green-400 transition duration-250 ease-in-out w-7 xl:w-8"></i>
            <router-link v-bind:to="icon.route" class="text-lg self-center group-hover:text-gray-900 transition duration-250 ease-in-out">{{ icon.name }}</router-link>
        </div>
    </div>
</template>

<script>
import LeftSideBarMenuItem from './LeftSideBarMenuItem'

export default {
    components:{
        LeftSideBarMenuItem
    },
    data(){
        return{
            icons: [
                {route: 'breaking-news', class: 'fas fa-globe-europe', name: 'Breaking news'},
                {route: 'location', class: 'fas fa-map-marker-alt', name: 'Local'},
                {route: 'positive', class: 'fas fa-smile-beam', name: 'Positive'},
                {route: 'science', class: 'fas fa-microscope', name: 'Science'},
                {route: 'health', class: 'fas fa-heartbeat', name: 'Health'},
                {route: 'sport', class: 'fas fa-futbol', name: 'Sport'},
                {route: 'finance', class: 'fas fa-money-bill-alt', name: 'Finance'},
                {route: 'lifestyle', class: 'fab fa-pagelines', name: 'Lifestyle'},
                {route: 'politics', class: 'fas fa-landmark', name: 'Politics'},
                {route: 'crime', class: 'fas fa-balance-scale-right', name: 'Crime'},
                {route: 'celebrity', class: 'fas fa-camera', name: 'Celebrity'},
            ]
        }
    },
}
</script>
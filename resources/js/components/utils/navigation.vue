<template>
    <div class="tabs">
        <ul>
            <li :class="LinkClass('/')">
                <router-link  :to="'/'" tag="a">To Do</router-link>
            </li>
            <li :class="LinkClass('/weather')">
                <router-link :to="'/weather'" tag="a">Weather</router-link>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    methods:{
        LinkClass: function(path){
            return {
                'is-active': (this.$route.path == path )
            }
        }
    }
}
</script>

<style>

</style>


<template>



    <template v-for="item in routes">
        <p v-if="item.inmenu" >
            <router-link  :to="{name: item.name}">{{item.meta.title}}</router-link>
        </p>
    </template>

    <div :style="{ padding: '24px', background: '#fff', minHeight: '360px' }">
        <router-view></router-view>
    </div>


</template>

<script>
import { mapGetters, mapState } from 'vuex';

export default {
    name: "App",

    computed: {
        ...mapState(['routes']),
    }

}
</script>

<style scoped>

</style>

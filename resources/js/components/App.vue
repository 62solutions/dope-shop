<template>


    <layout></layout>




</template>

<script>
import { mapGetters, mapState } from 'vuex';
import Layout from "../components/Layout.vue";
export default {
    name: "App",
    components: {Layout},
    computed: {
        ...mapState(['routes']),
    }

}
</script>

<style scoped>

</style>

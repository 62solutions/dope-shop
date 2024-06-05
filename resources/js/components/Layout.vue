<template>

    <div class="common-layout">
        <el-container>
            <el-aside width="200px" :style="{ background: '#a0a0a0' }">
                <template v-for="item in routes">
                    <p v-if="item.inmenu" >
                        <router-link  :to="{name: item.name}">{{item.meta.title}}</router-link>
                    </p>
                </template>
            </el-aside>
            <el-container>
                <el-header :style="{background:'#708090'}">
                    <h1>{{ current_title }}</h1>
                </el-header>
                <el-main>
                    <div :style="{ padding: '24px', background: '#fff', minHeight: '360px' }">
                        <router-view></router-view>
                    </div>
                </el-main>
            </el-container>
        </el-container>
    </div>

</template>

<script>

import { mapState } from 'vuex';
export default {
    name: "Layout",
    computed: {
        ...mapState(['routes', 'current_title']),
    }
}
</script>

<style scoped>

</style>

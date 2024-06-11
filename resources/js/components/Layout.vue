<template>

    <div class="common-layout">
        <el-container>
            <el-aside width="200px">

                <el-menu
                    default-active="2"
                    class="el-menu-vertical-demo"
                >
                    <template v-for="item in routes">
                        <el-menu-item index="2" v-if="item.inmenu && typeof item.children == 'undefined'" >
                            <span >
                               <router-link  :to="{name: item.name}" style="text-decoration: none">{{item.meta.title}}</router-link>
                            </span>
                        </el-menu-item>
                        <template v-if="typeof item.children !== 'undefined'">
                            <el-sub-menu index="1">
                                <template #title>
                                    <span>{{item.meta.title}}</span>
                                </template>
                                <template v-for="children in item.children">
                                    <el-menu-item >
                                        <span>
                                            <router-link  :to="{name: children.name}" style="text-decoration: none">{{children.meta.title}}</router-link>
                                        </span>
                                    </el-menu-item>
                                </template>
                            </el-sub-menu>
                        </template>

                    </template>
                </el-menu>
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

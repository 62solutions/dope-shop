<template>

    <div class="common-layout">
        <el-container>
            <el-aside width="200px">

                <el-menu
                    class="el-menu-vertical-demo"
                    mode="vertical"
                    :unique-opened="true"
                    :default-active="defaultActiveMenuItem"
                    ref="menu"
                >
                    <template v-for="item in routes">
                        <el-menu-item v-if="item.inmenu && typeof item.children == 'undefined'"
                                      @click="handleClick(item)"
                                      :index="item.meta.index"
                        >
                            <span>{{ item.meta.title }}</span>
                        </el-menu-item>
                        <template v-if="typeof item.children !== 'undefined'">
                            <el-sub-menu  :index="item.meta.index">
                                <template #title>
                                    <span>{{item.meta.title}}</span>
                                </template>
                                <template v-for="children in item.children" >
                                    <el-menu-item @click="handleClick(children)"
                                                  :index="children.meta.index"
                                    >
                                        {{children.meta.title}}
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
    data(){
        return{

        }
    },
    computed: {
        ...mapState(['routes', 'current_title', 'defaultActiveMenuItem']),
    },
    methods: {
        handleClick(item) {
            if (item.name) {
                this.$router.push({ name: item.name })
            }
        },


    },


   mounted() {

   }

}
</script>

<style scoped>

</style>

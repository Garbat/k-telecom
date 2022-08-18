<template>
    <div class="container">
        <Menu></Menu>
        <router-view>

        </router-view>
    </div>

</template>

<script>
import Menu from './components/menu';

export default {
    name: "root",
    components: {
        Menu
    },
}
</script>

<style lang="scss" scoped>
.container {
    width: 1440px;
    margin: 0 auto;
    padding: 20px;
}

</style>

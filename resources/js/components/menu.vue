<template>
    <menu>
        <ul>
            <li>
                <router-link to="/">Главная</router-link>
            </li>
            <li>
                <router-link to="/types">Типы оборудования</router-link>
            </li>
            <li>
                <router-link to="/equipment">Оборудование</router-link>
            </li>
        </ul>
        <ul>
            <li>
                <router-link to="/login">Вход</router-link>
            </li>
            <li>
                <router-link to="/register">Регистрация</router-link>
            </li>

        </ul>
    </menu>
</template>

<script>
export default {
    name: "menu"
}
</script>

<style lang="scss" scoped>
menu{
    display: flex;
    justify-content: space-between;
    padding: 15px;
    box-shadow: 0 0 5px rgba(0,0,0,0.3);
    border-radius: 5px;
    margin-bottom: 30px;
    ul{
        display: flex;
        li{
            padding: 5px;
            a{

            }
        }
    }
}

</style>

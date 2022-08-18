<template>
    <div>
        <h1>Авторизация</h1>
        <el-form :model="form" class="login-form" label-width="150px" label-position="top">
            <el-form-item label="Имя" prop="name"  required>
                <el-input v-model="form.name" type="text" autocomplete="off"/>
            </el-form-item>

            <el-form-item label="E-mail" prop="email" required>
                <el-input v-model="form.email" autocomplete="off"/>
            </el-form-item>

            <el-form-item label="Пароль" prop="password" required>
                <el-input v-model="form.password" type="password" autocomplete="off"/>
            </el-form-item>

            <el-form-item label="Повторите пароль" prop="password_confirmation" required>
                <el-input v-model="form.password_confirmation" type="password" autocomplete="off"/>
            </el-form-item>
            <el-form-item>
                <el-button type="primary" @click="">Зарегистрироваться</el-button>
            </el-form-item>
        </el-form>
    </div>
</template>

<script>

export default {
    name: "login",
    data() {
        return {
            form: {}
        }
    }
}
</script>

<style lang="scss" scoped>
h1{
    font-size: 20px;
    margin-bottom: 30px;
}

.login-form{
    width: 300px;
}

</style>

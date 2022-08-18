<template>
    <div>
        <el-table v-if="data" :data="data" stripe style="width: 100%">
            <el-table-column prop="id" label="ID" width="180" />
            <el-table-column prop="title" label="Наименование" width="180" />
            <el-table-column prop="serial_mask" label="Маска с/н" />
            <el-table-column fixed="right" label="Операции" width="120">
                <template #default>
                    <el-button type="primary" :icon="Edit" circle />
                    <el-button  type="danger" :icon="Delete" circle></el-button>
                </template>
            </el-table-column>
        </el-table>
    </div>
</template>

<script>
import {Delete, Edit} from '@element-plus/icons-vue';
import {ElMessage} from 'element-plus';

export default {
    name: "types",
    data() {
        return {
            data: null,

            Delete: Delete,
            Edit: Edit
        }
    },
    created() {
        this.fetchData();
    },
    methods: {
        fetchData() {
            axios.get('/api/equipment-type').then((response)=>{
                this.data = response.data.data;
            }).catch((error)=>{
                ElMessage.error(`Сбой при получении данных (${error.response.data.message})`);
            })
        }
    },
}
</script>


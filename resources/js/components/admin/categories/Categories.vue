<template>
  <div>
    <h2 class="text-danger">Danh sách Category</h2>
    <button class="btn">
        <router-link :to="{ name: 'create-category' }" class="btn btn-primary">
            Thêm Category
        </router-link>
    </button>
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Mô tả</th>
            <th>Trạng Thái</th>
            <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(category, index) in categories" :key="category.id">
                <td>{{ index + 1 }}</td>
                <td>{{ category.name }}</td>
                <td>{{ category.description }}</td>
                <td>
                    <span v-if="category.status" class="badge bg-success">Active</span>
                    <span v-else class="badge bg-danger">Inactive</span>
                </td>
                <td>
                    <router-link :to="{ name: 'show-category', params: { slug: category.slug } }" class="btn btn-info btn-sm">
                        Xem chi tiết
                    </router-link>
                </td>
            </tr>
            
        </tbody>
    </table>
  </div>
</template>

<script>
    import api from '@/utils/axios'

    export default {
        name: 'CategoryList',
        data() {
            return {
            categories: []
            }
        },
        async mounted() {
            try {
            const res = await api.get('/admin/categories')
            this.categories = res.data.data
            } catch (err) {
            console.error('Lỗi gọi API:', err)
            }
        }
    }
</script>

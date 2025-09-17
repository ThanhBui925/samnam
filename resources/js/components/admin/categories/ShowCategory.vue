<template>
  <div>
    <h2 class="text-danger">Chi tiết Category</h2>
    <div v-if="category">
      <p><strong>ID:</strong> {{ category.id }}</p>
      <p><strong>Tên:</strong> {{ category.name }}</p>
      <p><strong>Nội dung:</strong> {{ category.description }}</p>
        <p><strong>Created At:</strong> {{ category.created_at }}</p>
        <p><strong>Updated At:</strong> {{ category.updated_at }}</p>
    </div>
    <div v-else>
      <p>Đang tải...</p>
    </div>
  </div>
</template>

<script>
    import api from '@/utils/axios'

    export default {
        name: 'ShowCategory',
        props: {
            slug: {
                type: String,
                required: true
            }
        },
        data() {
            return {
                category: null
            }
        },
        async mounted() {
            try {
                const res = await api.get(`/admin/categories/${this.slug}`)
                this.category = res.data.data
            } catch (err) {
                console.error('Lỗi gọi API:', err)
            }
        }
    }
</script>
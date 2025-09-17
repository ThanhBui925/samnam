<template>
    <!-- form thêm mới category -->
    <div>
        <h2 class="text-danger">Thêm mới Category</h2>
        <form @submit.prevent="createCategory">
            <div class="mb-3">
                <label for="name" class="form-label">Tên Category</label>
                <input type="text" v-model="name" class="form-control" id="name">
                <!-- Thông báo lỗi từ be -->
                <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">slug</label>
                <input type="text" v-model="slug" class="form-control" id="slug">
                <!-- Thông báo lỗi từ be -->
                <div v-if="errors && errors.slug" class="text-danger">{{ errors.slug[0] }}</div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Mô tả</label>
                <textarea v-model="description" class="form-control" id="description" rows="3" ></textarea>
                <!-- Thông báo lỗi từ be -->
                <div v-if="errors && errors.description" class="text-danger">{{ errors.description[0] }}</div>
            </div>
            <button type="submit" class="btn btn-primary">Tạo Category</button>
        </form>
    </div>
</template>
<script>
    import api from '@/utils/axios'

    export default {
        name: 'CreateCategory',
        data() {
            return {
                name: '',
                slug: '',
                description: '',
                errors: {}
            }
        },
        methods: {
            async createCategory() {
                try {
                    const res = await api.post('/admin/categories', {
                        name: this.name,
                        slug: this.slug,
                        description: this.description
                    });
                    alert('Category created successfully!');
                    this.$router.push({ name: 'categories' });
                } catch (err) {
                    if (err.response && err.response.status === 422) {
                        this.errors = err.response.data.errors;
                    } else {
                        console.error('Error creating category:', err);
                        alert('Failed to create category.');
                    }
                }
            }
        }
    }
</script>
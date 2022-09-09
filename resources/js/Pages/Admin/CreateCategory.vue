<template>
    <main class=" place-items-center ">
        <h1 class=" max-w-md mx-auto mb-5">Add Category</h1>

        <section class="bg-white p-8 rounded-xl max-w-md mx-auto border w-full">
            <div>
                <form @submit.prevent="submit" enctype="multipart/form-data">
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email"> Name </label>

                        <input v-model="form.category_name" class="border p-2 w-full rounded" type="text" name="category_name" id="category_name" required />

                        <div v-if="form.errors.name" v-text="form.errors.category_name" class="text-red-500 text-xs mt-1"></div>
                    </div>

                    <div>
                        <button
                            type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                        >
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</template>
<script setup  >

import { useForm } from '@inertiajs/inertia-vue3';

let form = useForm({
    category_name : '' ,

});

let submit = () => {
    form.post('/admin/add-category');
};


</script>

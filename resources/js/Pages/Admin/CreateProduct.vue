<template>
    <main class=" place-items-center ">
        <section class="bg-white p-8 rounded-xl max-w-md mx-auto border w-full">
            <div>
                <form @submit.prevent="submit" enctype="multipart/form-data">
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email"> Name </label>

                        <input v-model="form.name" class="border p-2 w-full rounded" type="text" name="name" id="name" required />

                        <div v-if="form.errors.name" v-text="form.errors.name" class="text-red-500 text-xs mt-1"></div>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category"> Category </label>
                        <select class="border p-2 w-full rounded" v-model="form.product_category_id"  name="product_category_id" id="product_category_id">
                            <option v-for="category in $page.props.categories" :key="category.id" :value="category.id">{{category.category_name}}</option>
                        </select>
                        <div v-if="form.errors.product_category_id" v-text="form.errors.product_category_id" class="text-red-500 text-xs mt-1"></div>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email"> color </label>

                        <input v-model="form.color" class="border p-2 w-full rounded" type="color" name="color" id="color" required />

                        <div v-if="form.errors.color" v-text="form.errors.color" class="text-red-500 text-xs mt-1"></div>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="photo"> Photo </label>

                        <input  class="border p-2 w-full rounded" type="file" @change="onChange"  required />

                        <div v-if="form.errors.photo" v-text="form.errors.photo" class="text-red-500 text-xs mt-1"></div>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email"> Price </label>

                        <input v-model="form.price" class="border p-2 w-full rounded" type="number" name="price" id="price" required />

                        <div v-if="form.errors.price" v-text="form.errors.price" class="text-red-500 text-xs mt-1"></div>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="short_description"> Short Description </label>

                        <input v-model="form.short_description" class="border p-2 w-full rounded" type="text" name="short_description" id="short_description" required />

                        <div v-if="form.errors.short_description" v-text="form.errors.short_description" class="text-red-500 text-xs mt-1"></div>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="long_description"> Long Description </label>

                        <input v-model="form.long_description" class="border p-2 w-full rounded" type="text" name="long_description" id="long_description" required />

                        <div v-if="form.errors.long_description" v-text="form.errors.long_description" class="text-red-500 text-xs mt-1"></div>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="available"> Available </label>

                        <input v-model="form.available" class="border  rounded" type="checkbox" name="available" id="available" required  />

                        <div v-if="form.errors.available" v-text="form.errors.available" class="text-red-500 text-xs mt-1"></div>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="long_description"> Quantity </label>

                        <input v-model="form.quantity" class="border p-2 w-full rounded" type="number" name="quantity" id="quantity" required />

                        <div v-if="form.errors.quantity" v-text="form.errors.quantity" class="text-red-500 text-xs mt-1"></div>
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

let onChange= (e) => {
    form.photo = e.target.files[0];
};
let form = useForm({
    product_category_id:'',
    name : '' ,
    color : '' ,
    photo : '' ,
    price : '' ,
    short_description : '' ,
    long_description : ''  ,
    available : '' ,
    quantity : '' ,
});

let submit = () => {
    form.post('/admin/add-product');
};


</script>

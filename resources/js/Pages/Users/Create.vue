<template>

    <Head title="Create Users" />

    <h1 class="text-3xl mb-2"> Create New Users</h1>

    <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>
            <input id="name" type="text" name="name" class="border border-gray-400 p-2 w-full" v-model="form.name">
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
            <input id="email" name="email" type="text" class="border border-gray-400 p-2 w-full" v-model="form.email">
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
            <input id="password" type="password" name="password" class="border border-gray-400 p-2 w-full"
                v-model="form.password">
        </div>
        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
        </div>

    </form>
</template>

<script setup>
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia"
let form = reactive({
    name: '',
    email: '',
    password: '',
});
let submit = () => {
    Inertia.post('/users', form);
}
</script>

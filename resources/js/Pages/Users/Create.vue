<template>

    <Head title="Create Users" />

    <h1 class="text-3xl mb-2"> Create New Users</h1>

    <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>
            <input id="name" type="text" name="name" class="border border-gray-400 p-2 w-full" required
                v-model="form.name">
            <div v-if="form.errors.name" v-text="form.errors.name" class="text-red-500 text-xs mt-1"></div>
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
            <input id="email" name="email" type="text" class="border border-gray-400 p-2 w-full" required
                v-model="form.email">
            <div v-if="form.errors.email" v-text="form.errors.email" class="text-red-500 text-xs mt-1"></div>
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
            <input id="password" type="password" name="password" class="border border-gray-400 p-2 w-full" required
                v-model="form.password">
            <div v-if="form.errors.password" v-text="form.errors.password" class="text-red-500 text-xs mt-1"></div>
        </div>
        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                :disabled="form.processing">Submit</button>
        </div>

    </form>
</template>

<script setup>
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia"
import { useForm } from "@inertiajs/inertia-vue3"


// UseForm gives a reactive object that helps with keeping track of a lot of things. Including whether or not the form has been submitted. And it dynamically toggles the 'disabled' mode of the form's submit method
let form = useForm({
    name: '',
    email: '',
    password: '',
});
let submit = () => {
    form.post('/users')
}
</script>

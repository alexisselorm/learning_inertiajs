<template>

    <Head title="Create Users" />

    <h1 class="text-3xl mb-2"> Create New Users</h1>

    <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>
            <input id="name" type="text" name="name" class="border border-gray-400 p-2 w-full" required
                v-model="form.name">
            <div v-if="errors.name" v-text="errors.name" class="text-red-500 text-xs mt-1"></div>
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
            <input id="email" name="email" type="text" class="border border-gray-400 p-2 w-full" required
                v-model="form.email">
            <div v-if="errors.email" v-text="errors.email" class="text-red-500 text-xs mt-1"></div>
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
            <input id="password" type="password" name="password" class="border border-gray-400 p-2 w-full" required
                v-model="form.password">
            <div v-if="errors.password" v-text="errors.password" class="text-red-500 text-xs mt-1"></div>
        </div>
        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                :disabled="processing">Submit</button>
        </div>

    </form>
</template>

<script setup>
import { reactive, ref } from "vue";
import { Inertia } from "@inertiajs/inertia"

// You can choose to use $page.props.errors.<name_of_field> instead of this 'errors' props.
defineProps({
    errors: Object
})

let form = reactive({
    name: '',
    email: '',
    password: '',
});
// This processing reactive variable keeps track of whether the form has been submitted. If it has, it disables the submit button
let processing = ref(false);
let submit = () => {
    Inertia.post('/users', form,
        //The third argument to inertia.post. These provide helper functions to dynamically toggle the state of 'processing' on the submit button
        {
            onStart: () => { processing.value = true },
            onFinish: () => { processing.value = false },
        });
}
</script>

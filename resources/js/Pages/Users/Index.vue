<template>

    <Head title="Users" />

    <div class="flex mb-2 justify-between">

        <div class="flex items-center">
            <h1 class=" font-bold underline">Users</h1>
            <Link v-if="can.createUser" href="/users/create" class="text-blue-500 text-sm ml-3">New User</Link>
        </div>
        <input type="text" placeholder="Search..." class="border px-1 rounded-lg" v-model="search" />
    </div>

    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">

                <tbody>
                    <tr v-for="user in users.data" :key="user.id">
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ user.name }}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <Link :href="`/users/${user.id}/edit`" v-if="user.can.edit"
                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                            <span class="relative">Edit</span>
                            </Link>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>

    <!-- Paginator -->
    <Pagination :links="users.links" class="mt-6" />
</template>
<script setup>
import { ref, watch } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
import Pagination from '../../Shared/Pagination.vue';
import { Inertia } from '@inertiajs/inertia';
import debounce from 'lodash/debounce';

let props = defineProps({
    users: Object,
    filters: Object,
    can: Object
});
console.log(props.filters.search)

let search = ref(props.filters.search)
watch(search, debounce(function (value) {
    Inertia.get('/users', { search: value }, { preserveState: true, replace: true })
}, 400))
</script>

<template>

    <Head title="Users" />

    <h1 class="mb-2 font-bold underline">Users</h1>


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
                            <Link :href="`/users/${user.id}/edit`"
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
import { Link } from '@inertiajs/inertia-vue3';
import Pagination from '../Shared/Pagination.vue';
defineProps({
    users: Object
});

</script>

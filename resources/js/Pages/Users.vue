<template>

    <Head title="Users" />

    <h1 class="mb-2 font-bold underline">Users</h1>

    <div>
        <ul>
            <li v-for="user in users" :key="user">{{ user.name }}</li>
        </ul>
    </div>

</template>
<script setup>
defineProps({
    users: Array
});

</script>

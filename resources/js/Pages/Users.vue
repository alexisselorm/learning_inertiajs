<template>

    <h1>Users</h1>

    <div class="mt-[400px]">
        <p>The current time is {{ time }}.</p>
    </div>
    <Link href="/users" class="text-blue-500 hover:underline" preserve-scroll>Refresh</Link>

</template>
<script >
import Layout from "../Shared/Layout.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    layout: Layout,
    props: {
        time: String
    }
}
</script>

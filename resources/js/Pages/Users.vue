<template>
    <Layout>

        <h1>Users</h1>

        <div class="mt-[400px]">
            <p>The current time is {{ time }}.</p>
        </div>
        <Link href="/users" class="text-blue-500 hover:underline" preserve-scroll>Refresh</Link>
    </Layout>

</template>
<script lang="ts">
import Layout from "../Shared/Layout.vue";
import { defineComponent } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
export default defineComponent({
    name: "Users",
    components: {
        Layout,
        Link
    },
    props: {
        time: {
            type: String
        }
    }
});
</script>

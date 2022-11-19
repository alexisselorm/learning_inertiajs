<template>
    <h1>Users</h1>
    <Nav />

    <div class="mt-[400px]">
        <p>The current time is {{ time }}.</p>
    </div>
    <Link href="/users" class="text-blue-500 hover:underline" preserve-scroll>Refresh</Link>

</template>
<script lang="ts">
import Nav from "../Shared/Nav.vue";
import { defineComponent } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
export default defineComponent({
    name: "Users",
    components: {
        Nav,
        Link
    },
    props: {
        time: {
            type: String
        }
    }
});
</script>

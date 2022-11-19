<template>
    <Layout>
        <!-- this is the slot -->
        <h1 class="text-4xl font-bold">Hello World of Inertia</h1>
        <p>In this series, we will use the following frameworks:</p>

        <!-- end of slot -->

    </Layout>
</template>
<script lang="ts">
import { defineComponent } from 'vue';
import Layout from "../Shared/Layout.vue"
export default defineComponent({
    name: "Home",
    components: {
        Layout
    },
});
</script>

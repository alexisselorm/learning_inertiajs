<template>
    <Layout>
        <!-- this is the slot -->
        <h1 class="text-4xl font-bold">Hello World, {{ name }}</h1>
        <p>In this series, we will use the following frameworks:</p>
        <ul>
            <li v-for="framework in frameworks" :key="framework">{{ framework }}</li>
        </ul>
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
    props: {
        name: {
            type: String
        },
        frameworks: {
            type: Array
        }
    }
});
</script>

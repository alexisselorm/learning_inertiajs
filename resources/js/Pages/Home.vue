<template>
    <h1 class="text-4xl font-bold">Hello World, {{ name }}</h1>
    <Nav />
    <p>In this series, we will use the following frameworks:</p>
    <ul>
        <li v-for="framework in frameworks" :key="framework">{{ framework }}</li>
    </ul>


</template>
<script lang="ts">
import { defineComponent } from 'vue';
import Nav from "../Shared/Nav.vue"
export default defineComponent({
    name: "Welcome",
    components: {
        Nav
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

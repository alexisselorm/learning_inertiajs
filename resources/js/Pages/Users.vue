<template>
    <h1>Users</h1>
    <Nav />


</template>
<script lang="ts">
import Nav from "../Shared/Nav.vue";
import { defineComponent } from "vue";
export default defineComponent({
    name: "Users",
    components: {
        Nav
    },
});
</script>

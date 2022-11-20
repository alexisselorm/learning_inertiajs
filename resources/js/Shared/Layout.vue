<template>
    <section class="p-6 bg-gray-200">
        <header class="flex justify-between">
            <h1 class="font-bold text-lg">My App <span class="font-normal text-sm ml-4">Welcome Back, {{
                    $page.props.auth.user.username
            }}</span></h1>
            <Nav />
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-3xl mx-auto">

            <iframe src="https://player.simplecast.com/fd0bd2ba-c553-466c-a060-b144797ce369?dark=false" frameborder="no"
                seamless width="100%" scrolling="no" class="mb-6"></iframe>

            <slot />
        </div>
    </section>
</template>

<script>
import Nav from "./Nav.vue"

export default {
    name: "Layout",
    components: {
        Nav
    },

}
</script>

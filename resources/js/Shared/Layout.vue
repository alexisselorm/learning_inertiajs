<template>

    <Head title="MyApp">
        <meta type="description" content="Information about my inertia app" head-key="description">
    </Head>

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
            <slot />
        </div>
    </section>
</template>

<script setup>
import Nav from "./Nav.vue"
</script>

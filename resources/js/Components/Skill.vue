<template>
    <section class="
        flex
        items-center
        px-44
        py-6

    ">
        <div class="
                h-8
                w-8
                rounded-full
                border-double
                border-4
            " :class="background"></div>
        <p class="text-2xl font-extrabold text-gray-800 mx-1">
            <slot></slot>
        </p>
    </section>
</template>

<script>
export default {
    props: [
        'background',
    ]
}
</script>

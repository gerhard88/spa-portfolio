<template>
    <section class="
        flex
        items-end
        px-44
        py-6
        justify-between
    ">
        <!-- comes from the customise.json file -->
        <div :class="color" class="bg-gray-100 h-16 w-16 rounded-2xl">
            <slot></slot>
        </div>

        <p class="text-2xl font-extrabold mx-10 flex-1">
            {{ title }}
        </p>

        <p class="text-1xl mx-10 flex-1">
            {{ description }}
        </p>

    </section>
</template>

<script>
export default {
    props: [
        'title',
        'description',
        'color',
    ]
}
</script>

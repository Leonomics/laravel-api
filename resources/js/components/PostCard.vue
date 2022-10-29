<template>
    <article class="relative rounded-lg overflow-hidden">
        <img v-if="post.cover" :src="`/images/${post.cover}`" alt="">
        <div class="p-4 mt-2">
            <h3>
                {{post.title}}
            </h3>
        </div>
    </article>
</template>

<script>
    export default{
        props:{
            post:{
                type: Object,
                required: true
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>
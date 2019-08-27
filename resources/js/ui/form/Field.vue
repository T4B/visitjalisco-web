<template>
    <div
        class="form-field my-2"
        :class="[width, {'has-error':error}]">
        <slot />
        <p v-if="error" class="is-error" v-text="error">
        </p>
    </div>
</template>
<script>
export default {
    props: {
        width: {
            type: String,
            default: 'w-full'
        },
        error: {
            type: [String, Boolean],
            default: false
        }
    }
}
</script>
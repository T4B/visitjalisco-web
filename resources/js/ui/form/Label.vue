<template>
    <label
        class="form-label"
        :for="id">
        <slot />
    </label>
</template>
<script>
export default {
    props: {
        id: {
            type: String,
            default: ''
        }
    }
}
</script>
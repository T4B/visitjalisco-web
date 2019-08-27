<template>
    <label
        class="form-label text-grey-lighter"
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
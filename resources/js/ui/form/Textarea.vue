<template>
    <textarea
        class="form-textarea focus:outline-none border w-full px-2 pt-2 pb-1"
        :id="id"
        :name="id"
        :class="{'has-error':error}"
        :autofocus="autofocus"
        :disabled="disabled"
        :placeholder="placeholder"
        :readonly="readonly"
        :required="required"
        :rows="rows"
        :value="value"
        @input="update"
    />
</template>
<script>
import mixins from './mixins'
export default {
    mixins: [mixins],
    props: {
        rows: {
            default: 2
        }
    }
}
</script>


<template>
  <input
      class="form-input focus:outline-none border w-full px-2 pt-2 pb-1"
      :id="id"
      :name="id"
      :class="{'has-error':error}"
      :autocomplete="autocomplete"
      :autofocus="autofocus"
      :disabled="disabled"
      :placeholder="placeholder"
      :readonly="readonly"
      :required="required"
      :type="type"
      :value="value"
      @input="update"
  />
</template>
<script>
import mixins from './mixins'
export default {
  mixins: [mixins]
}
</script>

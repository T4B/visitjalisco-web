export default {
    props: {
        id: {
            type: String,
            default: ''
        },
        name: {
            type: String,
            default: ''
        },
        value: {
            default: ''
        },
        type: {
            default: 'text'
        },
        placeholder: {
            type: [Boolean, String],
            default: false
        },
        required: {
            type: Boolean,
            default: false
        },
        readonly: {
            type: Boolean,
            default: false
        },
        disabled: {
            type: Boolean,
            default: false
        },
        autofocus: {
            type: Boolean,
            default: false
        },
        autocomplete: {
            type: [String, Boolean],
            default: 'off'
        },
        error: {
            type: [Boolean, String],
            default: false
        }
    },
    methods: {
        update(event) {
            this.$emit('input', event.target.value)
        }
    }
}

<template>
  <modal name="contact" :adaptive="true" width="50%" :min-width="300" height="auto" :scrollable="true">
    <div class="p-8 contact-form" v-show="!sent">
      <p>Si tienes alguna duda o comentario, ponte en contacto con nosotros a través de este formulario.</p>
      <div class="flex flex-wrap justify-between">
        <field :error="error('name')">
          <form-label id="name" v-text="txt_name"></form-label>
          <form-input id="name" v-model="name"/>
        </field>
        <field :error="error('email')">
          <form-label id="email">Correo electrónico</form-label>
          <form-input id="email" v-model="email"/>
        </field>
        <field :error="error('phone')">
          <form-label id="phone">Teléfono</form-label>
          <form-input id="phone" v-model="phone"/>
        </field>
        <field :error="error('message')">
          <form-label id="message">Mensaje</form-label>
          <form-textarea id="message" v-model="message"/>
        </field>
        <div class="text-center my-2">
          <button class="button px-8 py-2 shadow-7xl inline-block rounded-none" @click="send" :class="{'is-loading':sending}" :disabled="sending" v-text="txt_send"></button>
        </div>
      </div>
    </div>
    <div class="p-8 contact-form text-center my-4" v-show="sent">
      <h2 class="font-bold text-red-400 uppercase text-2xl" v-text="txt_success"></h2>
    </div>
  </modal>
</template>
<script>
//import contact from '../../mixins/contact';
export default {
    //mixins: [contact],
    props: {
      txt_name: {
        type: String,
        default: 'Nombre'
      },
      txt_email: {
        type: String,
        default: 'Email'
      },
      txt_phone: {
        type: String,
        default: 'Phone'
      },
      txt_message: {
        type: String,
        default: 'Message'
      },
      txt_send: {
        type: String,
        default: 'Send'
      },
      txt_success: {
        type: String,
        default: 'Success'
      },
    },
    data() {
        return {
          name: '',
          phone: '',
          email: '',
          message: '',
          sending: false,
          sent: false,
          errors: false
        }
    },
    created() {
        this.$root.$on('showContactForm', this.showContactForm)
    },
    methods: {
        showContactForm() {
          this.$modal.show('contact');
        },
        closeContactForm() {
          this.$modal.hide('contact');
        },
        error(id) {
          if (_.has(this.errors, id)) {
            return this.errors[id][0];
          }
          return false;
        },
        send(){
          var params = new FormData()
          params.append('name', this.name)
          params.append('email', this.email)
          params.append('phone', this.phone)
          params.append('message', this.message)


          const config = {
              headers: {
                  'content-type': 'text/html'
              }
          }

          this.sending = true;
          this.$http.post('/contact', params, config)
          .then((response) => {
            this.sent = true;
            this.sending = false;
          })
          .catch(error => {
            this.sending = false;
            this.errors = error.response.data.errors;
          });
      }
    }
}
</script>
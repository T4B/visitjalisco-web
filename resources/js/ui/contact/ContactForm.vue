<template>
  <modal name="contact" :adaptative="true" width="600" height="auto" :scrollable="true">
    <div class="p-8">
      <h2>CONTACTO</h2>
      <p>Si tienes alguna duda o comentario, ponte en contacto con nosotros a través de este formulario.</p>
      <div class="flex flex-wrap justify-between">
        <field :error="error('name')">
          <form-label id="name">Nombre</form-label>
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
          <button class="button px-8 py-2 shadow-7xl inline-block rounded-none" @click="send" :class="{'is-loading':sending}" :disabled="sending">Enviar</button>
        </div>
      </div>
    </div>
  </modal>
</template>
<script>
//import contact from '../../mixins/contact';
export default {
    //mixins: [contact],
    props: {

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

        }
        
    }
}
</script>
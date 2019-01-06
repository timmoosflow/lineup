<template>
    <div class="card text-center">
       <p> {{gig.gigGenre}} </p><span v-on:click="closeBack()">x</span>
    </div>

  </template>

  <script>
  import { mapState } from 'vuex'

    export default {
        name: 'GigDetail',
        methods: {
           closeBack: function() {
                this.$emit('hide-back');
            }
        },
        computed:  mapState([
           'gig'
        ])


    }
</script>

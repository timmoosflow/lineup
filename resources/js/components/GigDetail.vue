<template>
    <div>
        {{gig.gigGenre}}
    </div>

  </template>

  <script>
  import { mapState } from 'vuex'

    export default {
        name: 'GigDetail',
        methods: {

        },
        computed:  mapState([
           'gig'
        ])


    }
</script>

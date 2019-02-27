<template>
    <div class="card gig-detail">
        <div class="mt-4">{{gig.gigDate}}</div>
          <div>{{gig.gigTime}}</div>
          <div>{{gig.gigGenre}}</div>
          <div>@{{gig.gigVenue}}</div>
          <br>
          <div>{{gig.gigAct1}}</div>
          <div>{{gig.gigAct2}}</div>
          <div>{{gig.gigAct3}}</div>
          <div>{{gig.gigAct4}}</div>
          <div>{{gig.gigAct5}}</div>
          <div>{{gig.gigAct6}}</div>
          <div>{{gig.gigAct7}}</div>
          <div>{{gig.gigAct8}}</div>
          <br>
          <span v-on:click="closeBack()">x</span>
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
// fuckc

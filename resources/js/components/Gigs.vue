<template>
    <div class="text-center p-4">
      <div v-on:click="setGig(gig.id)" v-for="gig in gigs" v-bind:key="gig.id" class="card mb-4">
          <div>{{gig.gigDate}}</div>
          <div>{{gig.gigTime}}</div>
          <div>{{gig.gigGenre}}</div>
          <div>@{{gig.gigVenue}}</div>
        </div>
    </div>
</template>

<script>
    import { mapMutations } from 'vuex'

    export default {
        name: 'Gigs',
        computed: {
            welcome() {
                return this.$store.getters.welcome
            }
        },
        data () {
            return {
               gigs: null
            }
        },
        mounted () {
            axios
           .get('http://lineup.test/api/gigs')
           .then(response => (this.gigs = response.data.data))
        },
        methods: {
            ...mapMutations ([
                'SET_GIG'
            ]),
            setGig: function(index) {
              let result = this.gigs.find(obj => obj.id == index);
              this.SET_GIG(result);
              this.$emit('show-back');
            }
        }
    }
</script>

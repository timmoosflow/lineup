<template>
    <div class="card gig-detail">
        this is the add gig componmnent
    </div>

  </template>

  <script>


    export default {
        name: 'AddGig',
        methods: {
           closeBack: function() {
                this.$emit('hide-back');
            }
        },
        computed: {

        }
    }
</script>

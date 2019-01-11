<template>
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">

  <button v-on:click="addGig()" class="float-right">+</button>

</nav>
</template>

<script>
    export default {
        name: 'Filterbar',
        methods: {
           addGig: function () {
               this.$emit('show-back', 'AddGig');
           }
        },
        computed: {

        }
    }
</script>

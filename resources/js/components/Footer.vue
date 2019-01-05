<template>
<footer class="page-footer font-small blue navbar-laravel">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="http://www.bagdaddy.nl/TheLineUp"> TheLineUp</a>
  </div>
  <!-- Copyright -->

</footer>

  </template>

  <script>
    export default {
        name: 'Footer',
        methods: {

        },
        computed: {
            currentUser() {
                return this.$store.getters.currentUser
            }
        }
    }
</script>

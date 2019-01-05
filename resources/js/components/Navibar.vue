<template>
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">

    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/gigs">Gigs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/bands">Bands</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/bookers">Bookers</a>
      </li>
    </ul>

</nav>
</template>

<script>
    export default {
        name: 'Navibar',
        methods: {

        },
        computed: {
            currentUser() {
                return this.$store.getters.currentUser
            }
        }
    }
</script>

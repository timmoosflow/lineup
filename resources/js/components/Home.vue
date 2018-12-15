<template>
    <div>This is the HOME component!
        {{ welcome }}
    </div>
</template>

<script>
    export default {
        name: 'Home',
        computed: {
            welcome() {
                return this.$store.getters.welcome
            }
        }
    }
</script>

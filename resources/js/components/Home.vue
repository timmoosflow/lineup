<template>
    <div class="text-center p-4">This is the HOME component!
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

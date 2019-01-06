<template>
    <div id="main" class="flip-container">
        <div class="front">
            <Header/>
            <Navibar/>
            <router-view @show-back="showBack"></router-view>
            <Footer/>
        </div>
        <div v-show="ok" class="fixed back">
            <GigDetail @hide-back="hideBack"/>
        </div>
    </div>
</template>

<script>
    import Header from './Header.vue';
    import Navibar from './Navibar.vue';
    import Footer from './Footer.vue';
    import GigDetail from './GigDetail.vue';

    export default {
        name: 'main-app',
        data () {
            return {
                ok:false,
            };
        },
        components: {Header, Navibar, Footer, GigDetail},
        methods: {
            showBack: function () {
               this.ok = true;
            },
            hideBack: function () {
               this.ok = false;
            }
        }
    }
</script>

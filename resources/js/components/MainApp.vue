<template>
    <div id="main" class="flip-container">
        <div class="front">
            <Header/>
            <Navibar/>
            <Filterbar @show-back="showBack2"/>
            <router-view @show-back="showBack"></router-view>
            <Footer/>
        </div>
        <div v-show="ok" class="fixed back text-center">
            <component @hide-back="hideBack" :is="CurrentComponent"></component>
        </div>
    </div>
</template>

<script>
    import Header from './Header.vue';
    import Navibar from './Navibar.vue';
    import Filterbar from './Filterbar.vue';
    import Footer from './Footer.vue';
    import GigDetail from './GigDetail.vue';
    import AddGig from './AddGig.vue';

    export default {
        name: 'main-app',
        data () {
            return {
                ok:false,
                CurrentComponent: ''
            };
        },
        components: {Header, Navibar, Filterbar, Footer, GigDetail, AddGig},
        methods: {
            showBack: function (value) {
               this.ok = true;
               function showComp(value) {
                 CurrentComponent = (value);
               }

            },
            showBack2: function (value2) {
               this.ok = true;
               function showComp(value2) {
                 CurrentComponent = (value2);
               }

            },
            hideBack: function () {
               this.ok = false;
            }
        }
    }
</script>
